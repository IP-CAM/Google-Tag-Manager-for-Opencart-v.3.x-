<?php
class ControllerExtensionAnalyticsPsGtm extends Controller
{
    public function index()
    {
        if (!$this->config->get('analytics_ps_gtm_status')) {
            return '';
        }

        $gtm_id = $this->config->get('analytics_ps_gtm_gtm_id');
        $gcm_status = (bool) $this->config->get('analytics_ps_gtm_gcm_status');
        $ad_storage = (bool) $this->config->get('analytics_ps_gtm_ad_storage');
        $ad_user_data = (bool) $this->config->get('analytics_ps_gtm_ad_user_data');
        $ad_personalization = (bool) $this->config->get('analytics_ps_gtm_ad_personalization');
        $analytics_storage = (bool) $this->config->get('analytics_ps_gtm_analytics_storage');
        $functionality_storage = (bool) $this->config->get('analytics_ps_gtm_functionality_storage');
        $personalization_storage = (bool) $this->config->get('analytics_ps_gtm_personalization_storage');
        $security_storage = (bool) $this->config->get('analytics_ps_gtm_security_storage');
        $wait_for_update = (int) $this->config->get('analytics_ps_gtm_wait_for_update');
        $ads_data_redaction = (bool) $this->config->get('analytics_ps_gtm_ads_data_redaction');
        $url_passthrough = (bool) $this->config->get('analytics_ps_gtm_url_passthrough');

        $html = "<script>" . PHP_EOL;
        $html .= "window.dataLayer = window.dataLayer || [];" . PHP_EOL;
        $html .= "function gtag() { dataLayer.push(arguments); }" . PHP_EOL;

        if ($gcm_status) {
            $default_consent = [
                'ad_storage' => $ad_storage ? 'granted' : 'denied',
                'ad_user_data' => $ad_user_data ? 'granted' : 'denied',
                'ad_personalization' => $ad_personalization ? 'granted' : 'denied',
                'analytics_storage' => $analytics_storage ? 'granted' : 'denied',
                'functionality_storage' => $functionality_storage ? 'granted' : 'denied',
                'personalization_storage' => $personalization_storage ? 'granted' : 'denied',
                'security_storage' => $security_storage ? 'granted' : 'denied',
            ];

            if ($wait_for_update > 0) {
                $default_consent['wait_for_update'] = $wait_for_update;
            }

            $default_consent_json = json_encode($default_consent);
            $ads_data_redaction_str = $ads_data_redaction ? 'granted' : 'denied'; // Upgrade to consent mode v2
            $url_passthrough_str = $url_passthrough ? 'granted' : 'denied'; // Upgrade to consent mode v2

            $html .= PHP_EOL . "gtag('consent', 'default', " . $default_consent_json . ");" . PHP_EOL;
            $html .= "gtag('set', 'ads_data_redaction', '" . $ads_data_redaction_str . "');" . PHP_EOL;
            $html .= "gtag('set', 'url_passthrough', '" . $url_passthrough_str . "');" . PHP_EOL;
        }

        $html .= "</script>" . PHP_EOL;
        $html .= "<!-- Google Tag Manager -->" . PHP_EOL;
        $html .= "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':" . PHP_EOL;
        $html .= "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0]," . PHP_EOL;
        $html .= "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=" . PHP_EOL;
        $html .= "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);" . PHP_EOL;
        $html .= "})(window,document,'script','dataLayer','" . $gtm_id . "');</script>" . PHP_EOL;
        $html .= "<!-- End Google Tag Manager -->" . PHP_EOL;

        return $html;
    }
}
