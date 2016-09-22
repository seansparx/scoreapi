<?php
	class CrowedScoresApi {
		
		private $api_key = ''; 
		private $api_url = '';
		
		private function CrowedScoresApi() {

		}
		
		
		
		public static function get_instance()
		{
			return new CrowedScoresApi();
		}
		
		
		/** 
		 * Get a list of competitions.
		 * 
		 * @return array
		 */
		public function get_competitions()
		{
			$output = file_get_contents($this->api_url."/competitions?api_key=".$this->api_key);
			return json_decode($output);
		}
		
		
		/** 
		 * Get a list of teams. Displays all teams by default.
		 * 
		 * @return array
		 */
		public function get_teams($round_ids = null, $competition_ids = null)
		{
			$output = file_get_contents($this->api_url."/teams?api_key=".$this->api_key);
			return json_decode($output);
		}
		
		
		/** 
		 * Get a list of matches.
		 * 
		 * Allowed time interval for matches is 7 days. When looking at single team’s matches 365 days.
		 * Default from value is 24 hours before the request, default to value is 7 (365) days after from.
		 * If team_id (round_ids) are not specified, all teams (rounds) are displayed.
		 * 
		 * @return array
		 */
		public function get_matches($competition_id, $team_id = null, $round_ids = null, $from = null, $to = null)
		{
			$output = file_get_contents($this->api_url."/matches?api_key=".$this->api_key."&competition_id=".$competition_id);
			return json_decode($output);
		}
		
		
		
	}
?>
