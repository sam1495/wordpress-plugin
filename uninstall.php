<?php

// If uninstall not called from WordPress exit
if( !defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit;

// Delete option from options table
delete_option( 'gumlet_settings' );

// Delete multisite option from the database
delete_site_option( 'gumlet_settings' );
