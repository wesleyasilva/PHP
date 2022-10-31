<?php
require("protect.php");
require("conn.php");

if(!function_exists("insert")){
	function insert(){
		$conn = connect();
		
		$day = isset($_POST['date']) ? $_POST['date']:null;
		$time = isset($_POST['time']) ? $_POST['time']:null;
		$name = isset($_POST['full_name']) ? $_POST['full_name']:null;
		$depart = isset($_POST['depart']) ? $_POST['depart']:null;
		$supervisor = isset($_POST['supervisor']) ? $_POST['supervisor']:null;
		$type = isset($_POST['type']) ? $_POST['type']:null;
		$desc = isset($_POST['description']) ? $_POST['description']:null;

		$sql = "INSERT INTO incident VALUES(0,'$day','$time', '$name', '$depart', '$supervisor', '$type','$desc')";

		mysqli_query($conn, $sql);
		$row = mysqli_affected_rows($conn);
		if($row == 1)
			echo "<script type='text/javascript'>alert('Incident successfully registered!');</script>";
		else
			$_SESSION['msg'] = "ERROR: Incident not registered!";
		
		mysqli_close($conn);
		header("Location: ../incidents.php");
	}
}

protect();
insert();
?>
