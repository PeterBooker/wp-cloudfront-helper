<?php
/**
 * Plugin Name: WP CloudFront Helper
 * Plugin URI:  https://peterbooker.com
 * Description: Makes small changes which help you to use AWS CloudFront for fullpage caching on WordPress.
 * Version:     1.0
 * Author:      Peter Booker
 * Author URI:  http://peterbooker.com
 * License:     GPLv2+
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'WP_CloudFront' ) ) {

    class WP_CloudFront {

        /**
         * NewRelic API URL
         *
         * @var string
         */
        private $api_url = 'https://api.newrelic.com/v2/';

        /**
         * NewRelic API Key
         * http://docs.newrelic.com/docs/apis/api-key
         *
         * @var string
         */
        private $api_key;

        /**
         * Gets the Page Number
         *
         * @return int
         */
        public function get_page() {

            return $this->page;

        }

        /**
         * Sets the Page Number
         *
         * @param int $page
         */
        public function set_page( $page ) {

            $this->page = $page;

        }

        /**
         * Constructor
         *
         * @param string $api_key
         */
        public function __construct( $api_key ) {

            $this->api_key = $api_key;

        }
		
		private function set_cache_control() {
		
		}

    }

}

new WP_CloudFront();