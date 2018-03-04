<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername,$username,$password);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "CREATE DATABASE IF NOT EXISTS researchdatabase";
	if (mysqli_query($conn, $sql)) {
		mysqli_select_db($conn, "researchdatabase");
	} else {
    	echo "Error creating database: " . mysqli_error($conn);
	}
?>
<link rel="stylesheet" type="text/css" href="css/indexCss.css">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower|Kalam|Mono
ton|Nova+Flat|Open+Sans+Condensed:300|Permanent+Marker|Roboto+Slab|Shadows+Into+Light|Source+Code+Pro" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/materialize.css"  media="screen" title="no title" charset="utf-8">
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/script.js"></script>