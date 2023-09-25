<?php

class Dbconnect {
	private $dbName = "employeePortal";
	private $host = "localhost";
	private $user = "root";
	private $passwd = "";
	
	protected function connect(){
		$connectString = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;
		$pdo = new PDO($connectString, $this->user, $this->passwd);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return PDO;
	}
}