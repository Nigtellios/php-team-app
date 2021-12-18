<?php
	include 'controllers/database.php';

	class Party extends Database {
		static function get_party( $party_id ) {
			$get_party_query = "SELECT * FROM party WHERE id='$party_id'";
			$return_party = Database::getInstance()->get_result( $get_party_query );
		}
	}