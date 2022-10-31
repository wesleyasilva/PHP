<?php
	require("./_app/protect.php");
	protect();
	unset($_SESSION['user'],$_SESSION['name'],$_SESSION['dep'],$_SESSION['super'],$_SESSION['lvlAccess']);
	header("Location: index.php");
?>
