<?php
class ControllerExtensionAnalyticsPsGtm extends Controller
{
    public function index()
    {
        /**
         * Checks if Google Tag Manager (GTM) is enabled in the configuration.
         *
         * If disabled, the function returns an empty string, meaning no GTM script will be added to the page.
         */
        if (!$this->config->get('analytics_ps_gtm_status')) {
            return '';
        }

        /**
         * Retrieves GTM and GCM configuration settings from the system configuration.
         *
         * - `$gtm_id`: Unique ID for the Google Tag Manager container.
         * - `$gcm_status`: Boolean indicating if Google Consent Mode (GCM) is enabled.
         * - `$ad_storage`, `$ad_user_data`, `$ad_personalization`, `$analytics_storage`,
         *   `$functionality_storage`, `$personalization_storage`, `$security_storage`:
         *   Booleans determining storage access settings for different types of cookies/data.
         * - `$wait_for_update`: Integer representing delay (in milliseconds) before applying consent settings.
         * - `$ads_data_redaction`: Boolean setting for redacting ads data.
         * - `$url_passthrough`: Boolean to control URL passthrough setting for enhanced link tracking.
         */
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

        /**
         * If Google Consent Mode (GCM) is enabled, configure consent settings.
         *
         * Creates a `gcm_options` array, defining consent preferences for storage and data types. These include:
         * - `ad_storage`, `ad_user_data`, `ad_personalization`, `analytics_storage`,
         *   `functionality_storage`, `personalization_storage`, `security_storage`:
         *   Each is set to either "granted" or "denied" based on the corresponding configuration.
         * - If `$wait_for_update` is greater than 0, it adds a delay before applying these settings.
         *
         * Appends a JavaScript block to `$html` that initializes the `dataLayer`, defines the `gtag` function,
         * and sets consent using the `gcm_options` and `ads_data_redaction` and `url_passthrough` configurations.
         */
        if ($gcm_status) {
            $gcm_options = array(
                'ad_storage' => $ad_storage ? 'granted' : 'denied',
                'ad_user_data' => $ad_user_data ? 'granted' : 'denied',
                'ad_personalization' => $ad_personalization ? 'granted' : 'denied',
                'analytics_storage' => $analytics_storage ? 'granted' : 'denied',
                'functionality_storage' => $functionality_storage ? 'granted' : 'denied',
                'personalization_storage' => $personalization_storage ? 'granted' : 'denied',
                'security_storage' => $security_storage ? 'granted' : 'denied',
            );

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

        /**
         * Appends the main GTM script block to `$html`.
         *
         * This block creates and inserts a script element into the page that loads GTM from `googletagmanager.com`.
         * - Uses the GTM ID retrieved from configuration.
         * - Initializes the dataLayer and sends a 'gtm.js' event to trigger GTM processing.
         */
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
