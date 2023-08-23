<?php

// ** Database settings - Do not change these. ** //
define('DB_NAME', 'tugboat');
define('DB_USER', 'tugboat');
define('DB_PASSWORD', 'tugboat');
define('DB_HOST', 'mysql');

define( 'WP_HOME', 'https://' . getenv('TUGBOAT_SERVICE_URL_HOST') );
define( 'WP_SITEURL', 'https://' . getenv('TUGBOAT_SERVICE_URL_HOST') . '/wp' );
