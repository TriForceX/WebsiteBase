<?php include('header.php'); ?>
<!-- Main -->
<main>
	<!-- Main Container  -->
	<div class="container">
		Main Content
		<?php
		class Custom extends WebsiteBase
		{ 
			// Constructor 
			function __construct()
			{
			}
			// Custom function
			public function message($name)
			{
				return 'Hi <b>'.$name.'</b>, the language is <b>'.$this->config['lang'].'</b>';
			}
		}
		
		$custom = new Custom();
		
		$base->set(['custom' => '12345']);	
		echo '<code>'; 
		echo '<br>Config variable: '.$base->get('timezone');	
		echo '<br>Custom variable: '.$base->get('custom');	
		echo '<br>Undefined variable: '.$cause_error;
		echo '<br>Extended function: '.$custom->message('User');
		echo '</code>'; 
		?>
	</div>
	<!-- Main Container (End) -->
</main>
<!-- Main (End) -->
<?php include('footer.php'); ?>