<?php

/*
 * Website Base Class
 * ------
 * Main class functions
 * More info at https://github.com/TriForceX/WebsiteBase/wiki
 * 
 */

class WebsiteBase
{
	// Set main variable
	public $config = ['test' => 'ABC'];
	
	// Constructor 
	public function __construct()
	{
		echo 'The class '.__CLASS__.' was initiated!<br>'; 
	}
	
	function set($data) 
	{
		foreach($data as $key => $value) $this->config[$key] = $value;
	}

	function get($key) 
	{
		return $this->config[$key];
	}
	
	// Error handle
	public static function debug($enable = 0)
    {
		if($enable == 1)
		{
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
		}
		elseif($enable == 2)
		{
			ob_start(function($output = null){
				$error = error_get_last();
				foreach ($error as $info => $string) $output .= '<tr><td>'.$info.'</td><td>'.$string.'</td>';
				return '<table border="1">'.$output.'</table>';
			});
		}
	}
}

// Class initialization
$base = new WebsiteBase();

// Check WordPress install
if(class_exists('WP'))
{
	// Get custom WordPress functions
	require_once('wordpress.php');
	
	// Class initialization
	$base = new WebsiteBaseWP();
}

// Set TimeZone
// date_default_timezone_set(// );

// Set debug
// $base->debug();
