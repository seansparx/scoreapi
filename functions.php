<?php
	class CrowedScoresApi {
		
		private function CrowedScoresApi() {

		}
		
		public static function get_instance()
		{
			return new CrowedScoresApi();
		}
		
		public function get_fixtures()
		{
				echo 'get_fixtures';
		}
	}
?>
