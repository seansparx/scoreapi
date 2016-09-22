<?php
	require 'functions.php';
	
	$api = CrowedScoresApi::get_instance();
	
	echo '<pre>';
	
				$data = $api->get_competitions();
	
				if(count($data) > 0){
					$i = 1;
					foreach($data as $d){
							echo ($i++).'. <img src="'.$d->region->flagUrl.'" height="25"/> '.$d->dbid.' | '.$d->fullName.'('.$d->shortName.')<br/>';
					}			
				}
				
				
				
				/*if($league_id == 2){
					$league_name = 'Premier League';
				}else if($league_id == 47){
					$league_name = 'Ligue 1';
				}else if($league_id == 48){
					$league_name = 'Bundesliga';
				}else if($league_id == 49){
					$league_name = 'Serie A';
				}else if($league_id == 46){
					$league_name = 'Spanish La Liga';
				}else if($league_id == 59){
					$league_name = 'Major League Soccer';
				}else if($league_id == 146){
					$league_name = 'Argentina Primera Division'; 	
				}else if($league_id == 160){
					$league_name = 'Brazil Serie A';
				}	*/
?>
