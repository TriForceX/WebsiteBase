<?php

/*
 * Website Base Class
 * ------
 * Main custom functions
 * More info at https://github.com/TriForceX/WebsiteBase/wiki
 * 
 */

class WebsiteBase
{
	// Constructor 
	public function __construct($config)
	{
		// Set global config
		$this->config = $config;
		
		// Check WordPress install
		if(class_exists('WP'))
		{
			// Get custom WordPress functions
			require_once('wordpress.php');

			// Class initialization
			$this->wp = new WebsiteBaseWP($this->config);
		}
		
		// Set debug
		$this->debug($this->config['debug']);
		
		// Set TimeZone
		date_default_timezone_set($this->config['timezone']);
	}
	
	// Set config
	function set($data) 
	{
		foreach($data as $key => $value) $this->config[$key] = $value;
	}

	// Get config
	function get($key) 
	{
		return $this->config[$key];
	}
	
	// Error handle
	public static function debug($enable = 0)
    {
		ini_set('display_errors', $enable ? 1 : 0);
		ini_set('display_startup_errors', $enable ? 1 : 0);
		error_reporting($enable ? E_ALL : 0);
		
		if($enable == 2)
		{
			ob_start(function(){
				$error = error_get_last();
				$output = null;
				foreach ($error as $info => $string) $output .= '<tr><td>'.$info.'</td><td>'.$string.'</td>';
				return '<table border="1">'.$output.'</table>';
			});
		}
	}
}
