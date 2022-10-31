<?php
	require("./_app/protect.php");
	protect();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Enterprise System - Incidents</title>
	<link type="text/css" rel="stylesheet" href="_css/incident.css" />	
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="incidents.php"><li>INCIDENTS</li></a>
				<a href="register_incident.php"><li>REGISTER INCIDENT</li></a>
				<?php 
					if(isset($_SESSION['lvlAccess']) && is_numeric($_SESSION['lvlAccess']) && $_SESSION['lvlAccess'] == 1){
						echo "<a href='register_employee.php'><li>REGISTER EMPLOYEE</li></a>";
						echo "<a href='employees.php'><li>EMPLOYEES</li></a>";
				     	}
				?>
				<a href="exit.php"><li>LOGOUT</li></a>
			</ul>
		</nav>
		<section>
			<h1>Incidents</h1>
			<hr><br/>
			<?php
				if(isset($_SESSION['msg'])){
					echo "<h2>".$_SESSION['msg']."</h2>";
					unset($_SESSION['msg']);
				}
			?>
			<br/><div class="table">
				<table class="tabela">
					<tr>
    					<th>Nº</th>
						<th>Date</th>
						<th>Time</th>
						<th>Name</th>
						<th>Department</th>
						<th>Supervisor</th> 
						<th>Title</th>
						<th>Description</th>
					</tr>
					<?php 
						require("./_app/select.php");
						select();
					?>
				</table>
			</div>	
		</section>	
	</div>
</body>
</html>
