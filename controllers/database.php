<?php
	// We're not using env.php currently, config is based on constants.
	//include 'config/env.php';
	include 'config/config.php';

	class Database extends mysqli {
		// Self Shared Instance Among All
		private static $instance = null;

		private $user_name     = DB_USER;
		private $user_password = DB_PASSWORD;
		private $database_name = DB_NAME;
		private $database_host = DB_HOST;

		public static function getInstance() {
			if ( !self::$instance instanceof self ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		public function __clone() {
			trigger_error( 'Object clone is not allowed.', E_USER_ERROR );
		}

		public function __wakeup() {
			trigger_error( 'Deserializing is not allowed.', E_USER_ERROR );
		}

		private function __construct() {
			parent::__construct( $this->database_host, $this->user_name, $this->user_password, $this->database_name);

			if ( mysqli_connect_error() ) {
				exit( 'Connection Error (' . mysqli_connect_error() .  ') ' . mysqli_connect_error());
			}

			parent::set_charset( 'utf-8' );
		}

		public function dbquery( $query ) {
			if ( $this->query( $query ) ) {
				return true;
			}
		}

		public function get_result( $query ) {
			$result = $this->query( $query );

			if ( $result->num_rows > 0 ) {
				$row = $result->fetch_assoc();
				return $row;
			} else {
				return null;
			}
		}
	}