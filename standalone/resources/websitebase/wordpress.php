<?php

/*
 * Website Base WordPress
 * ------
 * Main custom WordPress functions
 * More info at https://github.com/TriForceX/WebsiteBase/wiki
 * 
 */

// Enable main PHP utilities
class WebsiteBaseWP extends WebsiteBase
{ 
	// Constructor 
	public function __construct()
	{
		echo 'The class '.__CLASS__.' was initiated!<br>'; 
	}
}