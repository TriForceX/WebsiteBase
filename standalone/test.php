<?php include('header.php'); ?>
<!-- Main -->
<main>
	<!-- Main Container  -->
	<div class="container">
		Main Content
		<?php
		$base->set(['custom' => '12345']);	
		echo '<code>'; 
		echo '<br>Variable from config: '.$base->get('timezone');	
		echo '<br>Variable custom: '.$base->get('custom');	
		echo '<br>Variable undefined:'.$cause_error;
		echo '</code>'; 
		?>
	</div>
	<!-- Main Container (End) -->
</main>
<!-- Main (End) -->
<?php include('footer.php'); ?>