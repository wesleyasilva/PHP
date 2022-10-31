<?php
if(isset($_POST['email']) && strlen($_POST['email']) > 0){
		if(!isset($_SESSION))
			SESSION_START();
		
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pass'] = $_POST['pass'];	

		$conn = connect();
		$sql_code = "SELECT * FROM employee WHERE email='$_SESSION[email]'";
		$sql_query = mysqli_query($conn, $sql_code);
		$dado = mysqli_fetch_assoc($sql_query);

		if($dado == 0){
			$erro[] = "User not registered!";
		}else{
			if($dado['password'] == md5($_SESSION['pass'])){
				$_SESSION['user'] = $dado['id'];
				$_SESSION['full_name'] = $dado['full_name'];
				$_SESSION['department'] = $dado['department'];
				$_SESSION['supervisor'] = $dado['supervisor'];
				$_SESSION['lvlAccess'] = $dado['lvlAccess'];
			}else{
				$erro[] = "Invalid password!";
			}
		}

		mysqli_close($conn);

		if(count($erro) == 0 || !$erro){
			header("Location: incidents.php");
		}
	}
