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

class CookiesManage extends ComponentBase
{

    public function componentDetails() {

        return [
            'name'        => 'janvince.smallgdpr::lang.components.cookies_manage.name',
            'description' => 'janvince.smallgdpr::lang.components.cookies_manage.description'
        ];
    }

    public function defineProperties(){

        return [
        ];
    }

    public function onRun() {

        $this->page['sgCookies'] = CookiesSettings::getSGCookies();
    }
    
    public function onRender() {
    }
}
