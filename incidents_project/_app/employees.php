<?php	
	require("conn.php");
	$conn = connect();

	$name = $_POST['full_name'];
	$dep = $_POST['department'];
	$sup = $_POST['supervisor'];
	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	$lvl = intval($_POST['lvlAccess']);

	$sql = "INSERT INTO employee VALUES(0,'$name','$dep','$sup','$email','$pass','$lvl')";
	
	$rs = mysqli_query($conn, $sql);
	$row = mysqli_affected_rows($conn);

	if($row == 1)
		echo "<script type='text/javascript'>alert('Employee registered successfully!');</script>";
	else
		$_SESSION['erro'] = "This employee already exists in the system!"; 

	mysqli_close($conn);
	header("Location: ../register_employee.php");
?>
