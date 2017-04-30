<?php
/*
Plugin Name: View My Posts Alone
Version: 1.0
Plugin URI: https://github.com/Nareshkumar979/View-My-Posts-Alone
Description: This plugin is for the Contributors/Writers alone who make contributions to our site in the form of posts or any writings etc., Hence they can view only the contributions what they make unable to see what others have contributed.  It can be used for the posts as well as the Custom Post Type also.
Author: Naresh Kumar .P
Author URI: http://coolguynaresh.blogspot.in/
*/
function vmpsa_hideotherspost( $wp_query ) {
    if (strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false) {
        if ( !current_user_can( 'activate_plugins' ) )  {
			add_action( 'views_edit-post', 'vmpsa_letmehideyou' );
            global $current_user;
            $wp_query->set( 'author', $current_user->id );
        }
    }
}
add_filter('parse_query', 'vmpsa_hideotherspost' );
//Calling the Function to remove all the Status after the Post is Published by the Admin in the Contributor Dashboard not in other Dashboard
function vmpsa_letmehideyou( $views ) {
	unset($views['all']);
	unset($views['publish']);
	unset($views['trash']);
	unset($views['draft']);
	unset($views['pending']);
	return $views;
}
?>
