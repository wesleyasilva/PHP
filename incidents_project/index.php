<?php
	require("./_app/conn.php");
	require("./_app/session.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Enterprise System - Login</title>
	<link type="text/css" rel="stylesheet" href="_css/index.css"/>	
</head>
<body>
	<form action="" method="POST">
		<label>Email:<br/>
		<input class="campo" type="email" name="email" placeholder="email@example.com" required autofocus/></label><br/><br/>
		<label>Password:<br/>
		<input class="campo" type="password" name="pass" required/></label><br/><br/>
		<?php
			if(isset($erro) && count($erro) > 0)
				foreach($erro as $msg){
					echo "<h3>$msg</h3>";
				}
		?>
		<input class="btn" type="submit" name="btn" value="Login"/>
	</form>
</body>
</html>
