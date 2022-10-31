<?php
	require("./_app/protect.php");
	protect();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Enterprise System - Register</title>
	<link type="text/css" rel="stylesheet" href="_css/regist.css"/>
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="incidents.php"><li>INCIDENTS</li></a>
				<a href="register_incident.php"><li>REGISTER INCIDENT</li></a>
				<a href="register_employee.php"><li>REGISTER EMPLOYEE</li></a>
				<a href="exit.php"><li>LOGOUT</li></a>
			</ul>
		</nav>
		<section>
			<h1>New Employee</h1>
			<hr><br/>
			<?php
				if(isset($_SESSION['erro'])){
					echo "<h3>".$_SESSION['erro']."</h3>";
					unset($_SESSION['erro']);
				}
			?>
			<br/><form action="_app/employees.php" method="POST">
				<label>Full Name:</label>
				<input type="text" name="full_name" autofocus required/><br/><br/>
				<label>Department: </label>
					<input type="text" name="department" required/><br/><br/>
				<label>Supervisor: </label>
					<input type="text" name="supervisor" required/><br/><br/>
				<label>Email: </label>
					<input type="text" name="email"/><br/><br/>
				<label>Password: </label>
					<input type="text" name="password"/><br/><br/>
				<fieldset>
					<legend>Access Level: </legend><br/>
						<label><input type="radio" name="lvlAccess" value="1" checked/> Administrator</label><br/><br/>
						<label><input type="radio" name="lvlAccess" value="2"/> Employee</label><br/><br/>
				</fieldset><br/>
				<input type="submit" value="Register"/>
			</form>
		</section>	
</body>
</html>
