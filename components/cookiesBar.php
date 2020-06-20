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

class cookiesBar extends ComponentBase
{

    private $sgCookiesPrefix = 'sg-cookies';

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

        if( CookiesSettings::get('cookies_bar_add_styles', null)) {

            $this->addCss(['assets/cookiesbar/cookiesbar.less']);
        }

        $sgCookies = [];
        
        $sgCookies['consent'] = !empty($_COOKIE[($this->sgCookiesPrefix . '-consent')]);

        foreach(CookiesSettings::get('cookies') as $cookie) {

            if ($cookie['required'] or !empty($_COOKIE[($this->sgCookiesPrefix . '-' . $cookie['slug'])])) {

                $sgCookies[$cookie['slug']] = 1;

            }
        }

        $this->page['sgCookies'] = $sgCookies;

    }
    
    public function onRender() {
    }
}
