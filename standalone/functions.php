<?php

/*
 * Website Base Setup
 * ------
 * Main configuration
 * More info at https://github.com/TriForceX/WebsiteBase/wiki
 * 
 */

// Get the main PHP utilities
require_once('resources/websitebase/core.php');

// Set main Website Base configuration
$base = new WebsiteBase([
	'debug'				=> false,
	'lang' 				=> 'en-US',
	'charset' 			=> 'UTF-8',
	'title' 			=> 'Website Base',
	'description' 		=> 'Custom base structure for websites mainly based on Bootstrap, PHP and jQuery.',
	'keywords' 			=> 'html, jquery, javascript, php, responsive, css3, bootstrap, css, wordpress, bootstrap4',
	'author' 			=> 'TriForce',
	'mobile-capable' 	=> 'yes',
	'viewport' 			=> 'width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no',
	'nav-color' 		=> '#7840a2',
	'nav-color-apple' 	=> 'black',
	'timezone' 			=> 'America/New_York',
	'local_dir'			=> dirname(__FILE__),
	'custom_main_url'	=> false,
	'assets_url'		=> false,
	'rebuild_pass'		=> 'mypassword',
	'minify'			=> true,
	'mix'				=> true,
	'css_file'			=> ['css/extras/example.css'],
	'css_vars'			=> ['$color-custom'	=> '#FF0000'],
	'js_file'			=> ['js/extras/example.js'],
	'js_vars'			=> ['$color-custom'	=> '#FF0000'],
]);