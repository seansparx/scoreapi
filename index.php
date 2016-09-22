<?php
	require 'functions.php';
	
	$api = CrowedScoresApi::get_instance();
	
	$api->get_fixtures();
?>
