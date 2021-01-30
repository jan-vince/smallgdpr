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

        if(CookiesSettings::get('cookies_bar_add_styles', null))
        {
        
            switch( CookiesSettings::get('cookies_bar_add_styles', null)) 
            {

                case 2:

                    $this->addCss(['assets/cookiesbar/cookiesbar-topline.less']);

                    break;

                default:

                    $this->addCss(['assets/cookiesbar/cookiesbar.less']);

                    break;
            }

        }

        $this->page['sgCookies'] = CookiesSettings::getSGCookies();
    }

    public function onRender() {
    }
}
