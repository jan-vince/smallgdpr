# Small GDPR
> Cookie consent bar for October CMS with native Google Consent Mode v2.

Version 2 is a major rewrite: the plugin now owns the Consent Mode plumbing.
You map cookie groups to Google consent types and the plugin emits the
`gtag('consent', 'update', …)` signal **and** a `dataLayer` event on every page
load and consent change — no pasted gtag/GTM snippets needed for the common case.

> **Upgrading from 1.x?** v2.0 is a conscious major upgrade (bump the version in
> `composer.json`). A migration moves your data to the new schema automatically
> (it guesses `consent_types` from group slugs and copies your button labels).
> The Bootstrap dependency and the old style presets are gone — there is now a
> single floating-pill bar and a native `<dialog>` settings window, themable via
> CSS custom properties.


## Installation

**GitHub** — clone into the `/plugins` dir:

```sh
git clone https://github.com/jan-vince/smallgdpr plugins/janvince/smallgdpr
```

**October backend** — search for *Small GDPR* in:
> Settings → Updates & Plugins → Install plugins


## Quick start

1. **Settings → Small GDPR → Settings → Import** → *Import default settings*.
2. **Settings → Small GDPR → Cookies → Integration**:
   - `Tag type` = *Google Analytics 4* or *Google Tag Manager*
   - `Tag ID` = `G-XXXXXXX` (GA4) or `GTM-XXXXXXX` (GTM)
3. Add the two components to your layout — **both are required**:

```twig
<head>
    ...
    {# REQUIRED — must be inside <head>, as high as possible,
       before any analytics / tag scripts #}
    {% component 'cookiesConfig' %}
</head>
<body>
    {# right after <body> opens #}
    {% component 'cookiesBar' %}
    ...
</body>
```

> ⚠️ **`cookiesConfig` must live in `<head>`.** It sets the Consent Mode
> `default` and loads the GA4/GTM tag, and that has to happen *before* any tag
> fires. Put it as high in `<head>` as possible (ideally first). Without it the
> bar still renders, but no tags are loaded and consent is never applied.

4. (Optional) create a `/gdpr` page and drop in the **Manage cookies** component
   (or its page snippet) so visitors can change their choice later.

That's it — no need to paste GA4/GTM code anywhere. The plugin renders the
loader, the consent default, the consent update and the dataLayer event for you.


## How it works

- **`cookiesConfig`** (head) outputs, in order: the `dataLayer`/`gtag` stub, the
  Consent Mode `default` (seeded from saved cookies so returning visitors start
  `granted`), the GA4/GTM loader (from `Tag ID`), your custom head code, and the
  plugin JS.
- **`cookiesBar`** (body) renders the GTM `<noscript>` (GTM only), your custom
  body code, the floating-pill bar and the settings `<dialog>`.
- On every consent change **and** every page load (once a decision exists), the
  JS calls `gtag('consent', 'update', …)` and pushes a `dataLayer` event so
  non-Google tags can fire via a Custom Event trigger:

```js
dataLayer.push({
  event: 'cookie_consent_update',
  analytics_storage: 'granted',
  ad_storage: 'denied',
  ad_user_data: 'denied',
  ad_personalization: 'denied'
});
```


## Settings

### Tab: Cookies

**Integration**
- `Tag type` — `none` / `Google Analytics 4 (gtag.js)` / `Google Tag Manager`.
- `Tag ID` — `G-…` or `GTM-…`. The plugin renders the matching loader.
- `Load tags only in production` — when on, the loader is rendered only in the
  production environment (the bar still works everywhere so you can test the UI).
- `Consent dataLayer event name` — default `cookie_consent_update`.

**Cookies groups** — one group per cookie category (Necessary, Statistical,
Marketing, …):
- `Required` — cannot be disabled by the user.
- `Default enabled` — active without explicit consent (use for anonymous data
  only, mind your local laws).
- `Default checked` — pre-checked in the settings dialog (scripts still gated).
- `Google consent types` — which Consent Mode signals this group grants
  (`analytics_storage`, `ad_storage`, `ad_user_data`, `ad_personalization`,
  `functionality_storage`, `personalization_storage`, `security_storage`). This
  mapping drives the automatic consent update.
- `Scripts` *(advanced)* — optional raw JS/files injected server-side when the
  group is consented, with `head`/`body` position, production and per-page limits.
  Most setups won't need this — use GTM + the dataLayer event instead.

**Custom code** — raw `<head>` / `<body>` code injected after the plugin block,
for tags the plugin does not load directly (Meta, LinkedIn, Hotjar, …).

### Tab: Cookies bar

Title, content, page-reload toggle, and the button labels / visibility
(Accept, Reject, Settings, Save).

### Tab: Manage cookies

Title and content shown above the cookie list in the **Manage cookies**
component / dialog.

### Tab: Settings

- `Cookies expiration` — cookie lifetime in days.
- `Set cookies for each language` — adds a locale prefix to cookie names (for
  RainLab.Translate setups that need a separate consent per language).
- **Import** — import a YAML preset from Media, a custom path, or the bundled
  default (leave empty).
- **Export** — export current settings as a YAML preset (backup / template).


## Components

### `cookiesConfig`
Place inside `<head>`, as high as possible. Renders the Consent Mode init and the
tag loader.

### `cookiesBar`
Place right after `<body>`. Renders the bar and the settings dialog.

**Hide the bar** on a specific page/layout via the [View Bag](https://docs.octobercms.com/4.x/cms/components.html):

```ini
[viewBag]
hideCookiesBar = 1
```

### `cookiesManage`
Put on a privacy page (e.g. `/gdpr`) so visitors can change their choice. Also
available as a Static Pages snippet.


## JavaScript API

A global `SmallGDPR` object is available:

```js
SmallGDPR.get()         // { necessary: true, statistical: false, … }
SmallGDPR.set(state)    // persist a state object + emit signals
SmallGDPR.acceptAll()
SmallGDPR.rejectAll()
SmallGDPR.hasDecision() // has the user decided yet?
SmallGDPR.openSettings()
```

Listen for changes:

```js
document.addEventListener('smallgdpr:consent', function (e) {
  console.log(e.detail.state, e.detail.consent);
});
```


## Twig

With the `cookiesBar` or `cookiesManage` component on the page you can read the
consent state in Twig:

```twig
{% if sgCookies.statistical %}
  ...
{% endif %}
```


## Theming

The bar and dialog are styled with CSS custom properties — override them in your
own stylesheet (no Bootstrap required):

```css
:root {
  --sg-bg: #1a2842;
  --sg-primary: #0d6efd;
  --sg-text: #ffffff;
  /* … see assets/css/smallgdpr.css for the full list */
}
```


----
> Thanks to the [October CMS](https://octobercms.com) team and to
> [OFFLINE](https://github.com/OFFLINE-GmbH) for inspiration from
> [their GDPR plugin](https://github.com/OFFLINE-GmbH/oc-gdpr-plugin).

Created by [Jan Vince](http://www.vince.cz), freelance web designer from the Czech Republic.
