<?php include 'base.php';
	$topic = mysqli_escape_string($conn, $_POST['topic']);
	$prop = mysqli_escape_string($conn, $_POST['proponents']);
	$resteach = mysqli_escape_string($conn, $_POST['teacher']);
	$resadv = mysqli_escape_string($conn, $_POST['adviser']);
	$yeara = mysqli_escape_string($conn, $_POST['yearaccomp']);
	$abstr = mysqli_escape_string($conn, $_POST['abstract']);
	$comp = mysqli_escape_string($conn, $_POST['comp']);
	$userid = mysqli_escape_string($conn, $_SESSION['UserID']);

	$query = mysqli_query($conn, "INSERT INTO databasetable (topic, proponent1, rteach1, radviser, yearAccomp, competition, abstract, id_submit) VALUES ('".$topic."', '".$prop."', '".$resteach."', '".$resadv."', '".$yeara."', '".$comp."', '".$abstr."', '".$userid."')");
	if ($query) {
		echo "<meta http-equiv='refresh' content='0;database.php'>";
	}else
		echo $conn->error;
?>