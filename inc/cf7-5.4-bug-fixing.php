<?php

    function cleanRestUrlFromGetParams()
    {
        $restUrl = esc_url_raw(get_rest_url());
        $ind = strpos($restUrl, '?');
        if ( FALSE !== $ind ) {
            $strArr = explode('?', $restUrl);
            $restUrl = $strArr[0];
        }

        return $restUrl;
    }

    // rewrite localize_script of the Plugin CF7 V5.4
    // /plugins/contact-form-7-master/includes/controller.php : 126
    add_action('wpcf7_enqueue_scripts', function() {

        $restUrl = cleanRestUrlFromGetParams();

        $wpcf7 = array(
            'api' => array(
                'root'      => $restUrl,
                'namespace' => 'contact-form-7/v1',
            ),
        );

        if ( defined('WP_CACHE') and WP_CACHE ) {
            $wpcf7['cached'] = 1;
        }

        wp_localize_script('contact-form-7', 'wpcf7', $wpcf7);
    });
