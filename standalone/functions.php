<?php

/*
 * Website Base Setup
 * ------
 * Main configuration
 * More info at https://github.com/TriForceX/WebsiteBase/wiki
 * 
 */

// Get the main classes
require_once('resources/websitebase/core.php');

// Set main configuration
$base = new WebsiteBase([
	// Internal
	'debug'				=> false,
	'timezone' 			=> 'America/New_York',
	// Meta tags
	'lang' 				=> 'en-US',
	'charset' 			=> 'UTF-8',
	'title' 			=> 'Website Base',
	'description' 		=> 'Custom base structure for websites mainly based on Bootstrap, PHP and jQuery.',
	'keywords' 			=> 'html, jquery, javascript, php, responsive, css3, bootstrap, css, wordpress, bootstrap4',
	'author' 			=> 'TriForce',
	'mobile-capable' 	=> 'yes',
	'viewport' 			=> 'width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no',
	'ua-compatible'		=> 'IE=edge',
	'nav-color' 		=> '#7840a2',
	'nav-color-apple' 	=> 'black',
	// Assets
	'assets_path'		=> dirname(__FILE__),
	'custom_url'		=> false,
	'minify'			=> true,
	'compile_pass'		=> 'mypassword',
	// Custom vars
	'css_file'			=> ['css/extras/example.css'],
	'css_vars'			=> ['$color-custom'	=> '#FF0000'],
	'js_file'			=> ['js/extras/example.js'],
	'js_vars'			=> ['$color-custom'	=> '#FF0000'],
]);
