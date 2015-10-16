<?php
/*
Plugin Name: WP OAuth Allow All Hosts
Description: Allow WP-OAuth's callback to redirect to any host. Use for local development only. 
Author: Proper Design
Version: 0.1
Author URI: http://properdesign.rs
Network: True
*/

// Copyright (c) 2015 Proper Design. All rights reserved.
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************


add_action('init', 'allow_localhost_api_requests', -100);

function allow_localhost_api_requests(){
    add_filter( 'http_request_host_is_external', '__return_true', 30 );
}