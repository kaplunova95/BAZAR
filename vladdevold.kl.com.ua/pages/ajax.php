<?php
	session_start();
	$gid = $_REQUEST['gid'];
	$_SESSION['gid'] = $gid;
	
//	$query1 = "INSERT INTO orders ....";
//	$query2 = "UPDATE shop SET count=5 WHERE product=$gid";
	
	echo($gid.' - OK');
?>	