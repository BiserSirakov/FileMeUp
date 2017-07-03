<?php

require('framework/base_model.php');

class Users extends BaseModel {

	public $table_name = 'users';

	function register($username, $password) {
		$stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (username, password, join_date) VALUES(?, ?, ?)");
		$result = $stmt->execute(array($username, sha1($password), date('Y-m-d H:i:s')));

		if ($result) {
			$stmt = $this->conn->prepare("SELECT * FROM {$this->table_name} WHERE username=? and password=?");
			$stmt->execute(array($username, sha1($password)));
			return $stmt->fetch();
		}

		return $result;
	}
	
	function login($username, $password) {
		$stmt = $this->conn->prepare("SELECT * FROM {$this->table_name} WHERE username=? and password=?");
		$stmt->execute(array($username, sha1($password)));
		return $stmt->fetch();
	}

}