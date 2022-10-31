<?php
	require("./_app/protect.php");
	protect();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Enterprise System - New Incident</title>
	<link type="text/css" rel="stylesheet" href="_css/new_incident.css"/>
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="incidents.php"><li>INCIDENTS</li></a>
				<a href="register_incident.php"><li>NEW INCIDENT</li></a>
				<?php 
					if(isset($_SESSION['lvlAccess']) && is_numeric($_SESSION['lvlAccess']) && $_SESSION['lvlAccess'] == 1){
						echo "<a href='register_employee.php'><li>REGISTER EMPLOYEE</li></a>";
					}
				?>
				<a href="exit.php"><li>LOGOUT</li></a>
			</ul>
		</nav>
		<section>
			<h1>REGISTER INCIDENT</h1>
			<hr><br/><br/>
			<form action="_app/insert.php" method="POST">
				<label>Day: </label>
					<input type="text" id="date" name="date" readonly/>&nbsp;&nbsp;&nbsp;&nbsp;
				<label>Time: </label>
					<input type="text" id="time" name="time" readonly/>
				<br/><br/><label>Full Name:</label>
				<input type="text" name="full_name" value="<?php echo $_SESSION['full_name']; ?>" readonly /><br/><br/>
				<label>Department: </label>
					<input type="text" name="depart" value="<?php echo $_SESSION['department']; ?>" readonly /><br/><br/>
				<label>Supervisor: </label>
					<input type="text" name="supervisor" value="<?php echo $_SESSION['supervisor']; ?>" readonly/><br/><br/>
				<label>Title: </label>
					<input type="text" name="type" autofocus required/><br/><br/>
				<label>Description: </label><br/>
					<textarea name="description" rows="10" cols="30"></textarea><br/><br/>
				<input type="submit" id="input" name="register" value="Register"/>
		</section>	
</body>
<script>
		var data = document.querySelector('#date');
		var clock = document.querySelector('#time');
		
		setInterval(function(){
			data.setAttribute('value', (new Date).toLocaleDateString());
			clock.setAttribute('value',((new Date).toLocaleString().substr(11, 8)));
		},1000);

</script>
</html>
