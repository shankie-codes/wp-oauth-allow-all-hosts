# WP-OAuth Allow All Hosts

By default, WP-Oauth uses `wp_http_validate_url()` to stop redirects to IPs beginning with `127` or `192`. This is a bit of a drag for local development. This plugin removes that restriction for local development (though please don't use on a production server).
