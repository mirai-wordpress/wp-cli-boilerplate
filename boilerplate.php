<?php

if ( defined( 'WP_CLI' ) && WP_CLI ) {

	class class_name extends WP_CLI_Command {

		protected $db;

		public function __construct() {
			$this->db = $GLOBALS['wpdb'];
		}

		/* Custom functions here */
		echo "Your code functions goes here";
	}

	WP_CLI::add_command( 'command_name', 'class_name' );
}