<?php

#Disable Auto Update Notification Emails for Core Updates
#Simply add the following code to disable notification emails for automatic updates of the WordPress core.
add_filter( 'auto_core_update_send_email', 'wpb_stop_auto_update_emails', 10, 4 );
  
function wpb_stop_update_emails( $send, $type, $core_update, $result ) {
if ( ! empty( $type ) && $type == 'success' ) {
return false;
}
return true;
}

#Disable Auto Update Notification Emails for Plugins
#Add the following code to disable notification emails for automatic updates of WordPress plugins.
add_filter( 'auto_plugin_update_send_email', '__return_false' );

#Disable Auto Update Notification Emails for Themes
#Add the following code to disable notification emails for automatic updates of WordPress themes.
add_filter( 'auto_theme_update_send_email', '__return_false' );
