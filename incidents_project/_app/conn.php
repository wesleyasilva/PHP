<?php
if(!function_exists("conenct")){
	function connect(){
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "company";
		$con = mysqli_connect($host, $user, $pass, $db);

		if(!$con){
			return die("CONNECTION ERROR: ".mysqli_connect_error());
		}else{
			return $con;
		}
	}
}
?>
