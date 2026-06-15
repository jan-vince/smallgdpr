<?php 

namespace JanVince\SmallGDPR\Components;

use Cms\Classes\ComponentBase;
use JanVince\SmallGDPR\Models\CookiesSettings;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Redirect;
use Input;
use Session;
use Flash;
use Form;
use Log;
use App;

class CookiesBar extends ComponentBase
{

    public function componentDetails() {

        return [
            'name'        => 'janvince.smallgdpr::lang.components.cookies_bar.name',
            'description' => 'janvince.smallgdpr::lang.components.cookies_bar.description'
        ];
    }

    public function defineProperties(){

        return [
        ];
    }

    public function onRun() {

        // Styly i JS načítá head komponenta cookiesConfig — tady stačí stav cookies.
        $this->page['sgCookies'] = CookiesSettings::getSGCookies();
        $this->page['sgCookiesLocalePrefix'] = CookiesSettings::getSGCookiesLocalePrefix();
        $this->page['sgRenderTags'] = CookiesSettings::shouldRenderTags();

        // Booleany čteme přímo (Twig helper cookiesSettingsGet coalescuje '0' na default)
        $this->page['sgRejectShow'] = (bool) CookiesSettings::get('btn_reject_show', true);
        $this->page['sgSettingsShow'] = (bool) CookiesSettings::get('btn_settings_show', true);
        $this->page['sgBarReload'] = !((bool) CookiesSettings::get('cookies_bar_disable_page_reload', true));
    }
}
