<?php
if(!function_exists("protect")){
	function protect(){
		if(!isset($_SESSION))
			SESSION_START();

		if(!isset($_SESSION['user']) || !is_numeric($_SESSION['user'])){
			header("Location: index.php");		
		}
	}	
}
?>
