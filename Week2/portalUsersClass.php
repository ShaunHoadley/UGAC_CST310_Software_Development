<?php

class Dbconnect {
	private $dbName = "portalUsers";
	private $host = "localhost";
	private $user = "root";
	private $passwd = "admin";
	
	protected function connect(){
		$dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->passwd);
		return PDO;
	}
}