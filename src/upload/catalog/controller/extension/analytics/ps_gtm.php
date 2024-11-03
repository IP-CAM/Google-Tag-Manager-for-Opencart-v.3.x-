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

        $html = '';

        if ($gcm_status) {
            $gcm_options = [
                'ad_storage' => $ad_storage ? 'granted' : 'denied',
                'ad_user_data' => $ad_user_data ? 'granted' : 'denied',
                'ad_personalization' => $ad_personalization ? 'granted' : 'denied',
                'analytics_storage' => $analytics_storage ? 'granted' : 'denied',
                'functionality_storage' => $functionality_storage ? 'granted' : 'denied',
                'personalization_storage' => $personalization_storage ? 'granted' : 'denied',
                'security_storage' => $security_storage ? 'granted' : 'denied',
            ];

            if ($wait_for_update > 0) {
                $gcm_options['wait_for_update'] = $wait_for_update;
            }

            $html .= '<script>
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }

                gtag("consent", "default", ' . json_encode($gcm_options, JSON_PRETTY_PRINT) . ');
                gtag("set", "ads_data_redaction", ' . ($ads_data_redaction ? 'true' : 'false') . ');
                gtag("set", "url_passthrough", ' . ($url_passthrough ? 'true' : 'false') . ');
            </script>';
        }

        $html .= '
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
        new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
        \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,\'script\',\'dataLayer\',\'' . $gtm_id . '\');</script>
        <!-- End Google Tag Manager -->';

        return $html;
    }
}
