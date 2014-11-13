<?php
// disable theme switching
add_action( 'admin_init', 'wplg_lock_theme' );  
function wplg_lock_theme() {
	global $submenu, $userdata;
	get_currentuserinfo();
	if ( $userdata->ID != 1 ) {
		unset( $submenu['themes.php'][5] );
		unset( $submenu['themes.php'][15] );
	}
}
?>
