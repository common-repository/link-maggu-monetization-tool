<?php
/*
Plugin Name: Link Maggu Monetization Tool
Plugin URI: http://linkmaggu.com
Description: This plugin will help you monetize your website through affiliates and advertisers. LinkMaggu Plugin is based on popular external link BWP External Links by Khang Minh.
Version: 1.1.1
Text Domain: bwp-ext
Domain Path: /languages/
Author: Link Maggu
Author URI: http://linkmaggu.com
License: GPLv3
*/

// Front end
require_once(dirname(__FILE__) . '/includes/class-bwp-external-links.php');
$bwp_ext = new BWP_EXTERNAL_LINKS();
add_action('init', array($bwp_ext, 'init'));

// Back end
add_action('admin_menu', 'bwp_ext_init_admin', 1);

function bwp_ext_init_admin()
{
	global $bwp_ext;

	$bwp_ext->init_admin();
}
?>