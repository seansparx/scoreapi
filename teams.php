<?php
	require 'functions.php';
	
	$api = CrowedScoresApi::get_instance();
	
	echo '<pre>';
	
				$data = $api->get_teams();
	//print_r($data); die;
				if(count($data) > 0){
					$i = 1;
					foreach($data as $d){
							echo ($i++).'. <img src="'.$d->flagUrl.'" height="25"/> | '.$d->dbid.' | <img src="'.$d->shirtUrl.'" height="25"/>'.$d->name.'<br/>';
					}			
				}
				
?>
