<?php

class PortalUsers extends DBConnect{
	
	
	
	public function executeSelectQuery(){
		
		$sql = "SELECT * FROM employeeportal WHERE id=? AND email=? AND password=? AND firstName=? AND lastName=?
			AND address=? AND phone=? AND salary=? AND SSN=?";
		$result = $this->connect()->prepare($sql);
		$result->execute([id,email,password,firstName,lastName,address,phone,salary,SSN]);
		$users = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($users as $user){
			echo $user[] . '<br>';
		}
	}
	
	public function executeQuery(){
		
	}

?>