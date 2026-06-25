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

        // Styles and JS are loaded by the cookiesConfig head component — only the cookie state is needed here.
        $this->page['sgCookies'] = CookiesSettings::getSGCookies();
        $this->page['sgCookiesLocalePrefix'] = CookiesSettings::getSGCookiesLocalePrefix();
        $this->page['sgRenderTags'] = CookiesSettings::shouldRenderTags();

        // Read booleans directly (the cookiesSettingsGet Twig helper coalesces '0' to the default)
        $this->page['sgRejectShow'] = (bool) CookiesSettings::get('btn_reject_show', true);
        $this->page['sgSettingsShow'] = (bool) CookiesSettings::get('btn_settings_show', true);
        $this->page['sgBarReload'] = !((bool) CookiesSettings::get('cookies_bar_disable_page_reload', true));
    }
}
