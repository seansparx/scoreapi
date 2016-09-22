<?php
	require 'functions.php';
	
	$api = CrowedScoresApi::get_instance();
	
	echo '<pre>';
	
				$data = $api->get_matches(59); // Major League Soccer(MLS)
	//print_r($data); die;
				if(count($data) > 0){
					$i = 1;
					foreach($data as $d){
							echo ($i++).'. '.$d->dbid.' | '.$d->competition->name.' | '.date('d/M/Y, H:i:s', $d->start/1000).' | '.$d->homeTeam->name.' : '.$d->homeGoals.' - '.$d->awayGoals.' : '.$d->awayTeam->name.' | CurrentState-'.$d->currentState.'<br/>';
					}			
				}
				
?>
