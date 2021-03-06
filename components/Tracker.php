<?php namespace Mohsin\GoogleAnalytics\Components;

use Cms\Classes\ComponentBase;
use Mohsin\GoogleAnalytics\Models\Settings;

class Tracker extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'mohsin.googleanalytics::lang.strings.tracker',
            'description' => 'mohsin.googleanalytics::lang.strings.tracker_desc'
        ];
    }

    public function trackingId()
    {
        return Settings::get('web_measurement_id');
    }

    public function domainName()
    {
        return Settings::get('domain_name');
    }

    public function anonymizeIp()
    {
        return Settings::get('anonymize_ip');
    }

    public function forceSSL()
    {
        return Settings::get('force_ssl');
    }
}
