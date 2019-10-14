<?php

/*
 * Website Base WordPress Class
 * ------
 * Main custom WordPress functions
 * More info at https://github.com/TriForceX/WebsiteBase/wiki
 * 
 */

class WebsiteBaseWP extends WebsiteBase
{ 
	// Constructor 
	public function __construct($config)
	{
		// Set global config
		$this->config = $config;
	}
}