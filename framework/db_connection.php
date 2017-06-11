<?php

class DBConnection {
	public $host   = "localhost";
	public $db     = "filemeupdb";
	public $user   = "root";
	public $pass   = "parola123";
	public $conn   = null;
	
	private static $instance = null;
	
	function __construct() {
		$this->conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
	}
	
	static function get_instance() {
		if (!self::$instance) {
			self::$instance = new  DBConnection();
		}
		
		return self::$instance;
	}
}