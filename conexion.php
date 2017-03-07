<?php 

	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "formularios";

	$conex= new mysqli($host,$user,$pass,$db);

		/* checkear conexion */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	/* asignar utf-8 */
	if (!$conex->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $mysqli->error);
	    exit();
	}	

 ?>