<?php

class Quiz {
	// Database credentials
	private $host     = 'localhost';
	private $username = '114708';
	private $password = 'saltaire';
	private $database = '114708';
	public  $db;

	public function __construct(){
		if(!isset($this->db)){
			// Connect to the database    
			try {
				$this->db = new mysqli($this->host, $this->username, $this->password, $this->database);
			}catch (Exception $e){
				$error = $e->getMessage();
				echo $error;
			}
		}
	}
	public function get_questions(){
	 	$select = "SELECT * FROM `questionst2` where is_enabled = '1' ";
	 	$result = mysqli_query($this->db ,$select);
	 	return mysqli_fetch_all($result);
	}
	public function quiz_options($qid) {
		$select = "SELECT * FROM `quiz_optionst2` where qid = '$qid' AND is_enabled = '1'  ";
	 	$result = mysqli_query($this->db ,$select);
	 	return mysqli_fetch_all($result);
	} 
	public function answer($qid) {
	 $select = "SELECT * FROM `quiz_answert2` where qid = '$qid' ";
	 $result = mysqli_query($this->db ,$select);
	 return mysqli_fetch_all($result);
	} 
}
?>