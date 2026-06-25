/**
 * Small GDPR v2 — consent engine (vanilla, no dependencies).
 *
 * Reads/writes per-category cookies, maintains the Consent Mode v2 signals
 * (gtag consent update) and pushes a dataLayer event for non-Google tags.
 * Configuration comes from window.SmallGDPR.config (rendered by the head component).
 *
 * Public API: SmallGDPR.get/set/acceptAll/rejectAll/hasDecision/apply/openSettings
 */
(function (window, document) {
    'use strict';

    var cfg = (window.SmallGDPR && window.SmallGDPR.config) || {};
    var PREFIX = cfg.cookiePrefix || 'sg-cookies';
    var LIFETIME = parseInt(cfg.lifetimeDays, 10) || 365;
    var MAP = cfg.consentMap || {};
    var TYPES = cfg.consentTypes || [
        'analytics_storage', 'ad_storage', 'ad_user_data', 'ad_personalization',
        'functionality_storage', 'personalization_storage', 'security_storage'
    ];
    var GROUPS = cfg.groups || [];
    var EVENT = cfg.eventName || 'cookie_consent_update';

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        window.dataLayer.push(arguments);
    }

    // --- cookies ---------------------------------------------------------

    function readCookie(name) {
        var safe = name.replace(/([.*+?^${}()|[\]\\])/g, '\\$1');
        var m = document.cookie.match('(?:^|; )' + safe + '=([^;]*)');
        return m ? decodeURIComponent(m[1]) : null;
    }

    var SECURE = window.location.protocol === 'https:' ? '; Secure' : '';

    function writeCookie(name, value, days) {
        var d = new Date();
        d.setTime(d.getTime() + days * 86400000);
        document.cookie = name + '=' + value + '; expires=' + d.toUTCString() + '; path=/; SameSite=Lax' + SECURE;
    }

    function deleteCookie(name) {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/; SameSite=Lax' + SECURE;
    }

    function key(slug) {
        return PREFIX + '-' + slug;
    }

    // --- state -----------------------------------------------------------

    function isRequired(slug) {
        for (var i = 0; i < GROUPS.length; i++) {
            if (GROUPS[i].slug === slug) {
                return !!GROUPS[i].required;
            }
        }
        return false;
    }

    function getState() {
        var state = {};
        GROUPS.forEach(function (g) {
            state[g.slug] = g.required ? true : readCookie(key(g.slug)) === '1';
        });
        return state;
    }

    function hasDecision() {
        return readCookie(key('consent')) === '1';
    }

    // --- consent object --------------------------------------------------

    function buildConsent(state) {
        var consent = {};
        TYPES.forEach(function (t) { consent[t] = 'denied'; });

        Object.keys(MAP).forEach(function (slug) {
            if (!state[slug]) {
                return;
            }
            (MAP[slug] || []).forEach(function (t) { consent[t] = 'granted'; });
        });

        return consent;
    }

    // --- applying signals ------------------------------------------------

    function apply(state) {
        state = state || getState();
        var consent = buildConsent(state);

        gtag('consent', 'update', consent);

        var payload = { event: EVENT };
        TYPES.forEach(function (t) { payload[t] = consent[t]; });
        window.dataLayer.push(payload);

        try {
            document.dispatchEvent(new CustomEvent('smallgdpr:consent', {
                detail: { state: state, consent: consent }
            }));
        } catch (e) { /* older browsers without the CustomEvent constructor */ }
    }

    // --- persistence -----------------------------------------------------

    function persist(state) {
        writeCookie(key('consent'), '1', LIFETIME);
        GROUPS.forEach(function (g) {
            if (g.required) {
                return;
            }
            if (state[g.slug]) {
                writeCookie(key(g.slug), '1', LIFETIME);
            } else {
                deleteCookie(key(g.slug));
            }
        });
    }

    function setState(state) {
        persist(state);
        apply(state);
    }

    function acceptAll() {
        var s = {};
        GROUPS.forEach(function (g) { s[g.slug] = true; });
        setState(s);
    }

    function rejectAll() {
        var s = {};
        GROUPS.forEach(function (g) { s[g.slug] = !!g.required; });
        setState(s);
    }

    // --- UI --------------------------------------------------------------

    function hideBar() {
        var bar = document.getElementById('cookies-bar');
        if (bar) {
            bar.style.display = 'none';
        }
    }

    function getDialog() {
        return document.getElementById('sg-settings-dialog');
    }

    function syncChecks(scope) {
        var state = getState();
        var boxes = scope.querySelectorAll('[data-sg-cookie]');
        Array.prototype.forEach.call(boxes, function (box) {
            box.checked = !!state[box.getAttribute('data-sg-cookie')];
        });
    }

    function readChecks(scope) {
        var state = {};
        GROUPS.forEach(function (g) { state[g.slug] = !!g.required; });

        var boxes = scope.querySelectorAll('[data-sg-cookie]');
        Array.prototype.forEach.call(boxes, function (box) {
            var slug = box.getAttribute('data-sg-cookie');
            state[slug] = box.checked || isRequired(slug);
        });
        return state;
    }

    function openSettings() {
        var d = getDialog();
        if (!d) {
            return;
        }
        syncChecks(d);
        if (typeof d.showModal === 'function') {
            d.showModal();
        } else {
            d.setAttribute('open', '');
        }
    }

    function closeSettings() {
        var d = getDialog();
        if (!d) {
            return;
        }
        if (typeof d.close === 'function') {
            d.close();
        } else {
            d.removeAttribute('open');
        }
    }

    function maybeReload(el) {
        var wrap = el.closest ? el.closest('[data-sg-reload="1"]') : null;
        if (wrap) {
            window.location.reload();
            return true;
        }
        return false;
    }

    function afterDecision(el) {
        hideBar();
        closeSettings();
        maybeReload(el);
    }

    function onClick(e) {
        if (!e.target || !e.target.closest) {
            return;
        }
        var el = e.target.closest('[data-sg-action]');
        if (!el) {
            return;
        }

        var action = el.getAttribute('data-sg-action');

        if (action === 'settings') {
            e.preventDefault();
            openSettings();

        } else if (action === 'close') {
            e.preventDefault();
            closeSettings();

        } else if (action === 'accept') {
            e.preventDefault();
            acceptAll();
            afterDecision(el);

        } else if (action === 'reject') {
            e.preventDefault();
            rejectAll();
            afterDecision(el);

        } else if (action === 'save') {
            e.preventDefault();
            var scope = el.closest('[data-sg-list-wrap]') || document;
            setState(readChecks(scope));
            afterDecision(el);
        }
    }

    function init() {
        document.addEventListener('click', onClick, false);

        var d = getDialog();
        if (d) {
            // Click on the backdrop closes the dialog
            d.addEventListener('click', function (e) {
                if (e.target === d) {
                    closeSettings();
                }
            });
        }

        // Re-apply the persisted decision on every page load
        // (consent update + dataLayer event) so GTM/GA see the correct state.
        if (hasDecision()) {
            apply();
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // --- public API ------------------------------------------------------

    window.SmallGDPR = window.SmallGDPR || {};
    window.SmallGDPR.get = getState;
    window.SmallGDPR.set = setState;
    window.SmallGDPR.acceptAll = acceptAll;
    window.SmallGDPR.rejectAll = rejectAll;
    window.SmallGDPR.hasDecision = hasDecision;
    window.SmallGDPR.apply = apply;
    window.SmallGDPR.openSettings = openSettings;

})(window, document);
