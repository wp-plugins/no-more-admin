<?php
/*
Plugin Name: No mor admin
Plugin URI: http://www.confusedthoughts.com
Description: This disables access to wp-admin to all users who are not admins.
Version: 1.0
Author: Lee Thompson	
Author URI: http://www.confusedthoughts.com
License: GPL2
*/

/*  Copyright 2012  LEE THOMPSON  (email : sr.mysql.dba (at) gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('admin_init', 'no_more_dashboard');
function no_more_dashboard() {
  if (!current_user_can('manage_options') && $_SERVER['DOING_AJAX'] != '/wp-admin/admin-ajax.php') {
  wp_redirect(site_url()); exit;
  }
}

?>
