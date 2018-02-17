<?php include 'base.php';
	$username = $_POST['username'];
	$password = $_POST['pass'];
	$confpassword = $_POST['confpass'];
	$pos = $_POST['position'];
	$name = $_POST['name'];

	$query = "INSERT INTO users (username,pass,pos,fullname) VALUES ($username, $password, $pos, $name)";

	if ($confpassword == $password) {
		$conn->query($query);
	}else{
		$_SESSION['status'] = 1;
		echo "<meta http-equiv='refresh' content='0;register.php'>";
	}
?>