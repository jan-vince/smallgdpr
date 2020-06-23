<?php

namespace JanVince\SmallGDPR\Updates;

use JanVince\SmallGDPR\Models\CookiesSettings;
use October\Rain\Database\Updates\Migration;
use Config;
use Flash;
use Log;
use AjaxException;

class v14_migration extends Migration
{
    public function up() {

        $settings = CookiesSettings::instance();
        $groups = $settings->get('cookies');

        if(!is_array($groups)) {
            return;
        }

        try {

            foreach ($groups as $key => $values) {

                $values['scripts'] = [

                    0 => [
                        'scripts_file' => (empty($values['scripts_file']) ? null : $values['scripts_file']),
                        'scripts_code' => (empty($values['scripts_code']) ? null : $values['scripts_code']),
                        'scripts_run_production' => (empty($values['scripts_run_production']) ? null : $values['scripts_run_production']),
                    ],
                ];

                $groups[$key] = $values;
            }

            $settings->cookies = $groups;

            $settings->save();

            Log::error('SG: Successfull data migration to v1.4.0.');

        } catch(\Exception $e) {
            Log::error('SG: Error running plugin migration! ' . $e->getMessage());

            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => 'Error running migration. Please check your scripts in Cookies groups!'
            ]);

        }

    }

    public function down() {

        // Will not reverse

    }
}
