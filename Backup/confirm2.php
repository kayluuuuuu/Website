<?php include 'base.php';
	$topic = mysqli_escape_string($conn, $_POST['topic']);
	$prop = mysqli_escape_string($conn, $_POST['proponents']);
	$resteach = mysqli_escape_string($conn, $_POST['teacher']);
	$resadv = mysqli_escape_string($conn, $_POST['adviser']);
	$yeara = mysqli_escape_string($conn, $_POST['yearaccomp']);
	$abstr = mysqli_escape_string($conn, $_POST['abstract']);
	$comp = mysqli_escape_string($conn, $_POST['comp']);
	$fundreq = mysqli_escape_string($conn, $_POST['fundreq']);
	$userid = mysqli_escape_string($conn, $_SESSION['UserID']);
	include("uploadpaper.php");
	if($uploadOk)
	{
		$query = mysqli_query($conn, "INSERT INTO databasetable_restart_tableconfirm (topic,proponent1,rteach1,radviser, yearLevel, competition, abstract, id_submit, fundReq) VALUES ('".$topic."', '".$prop."', '".$resteach."', '".$resadv."', '".$yeara."', '".$comp."', '".$abstr."', '".$userid."', '".$fundreq."')");
		if ($query) {
			echo mysqli_error($conn);
			echo "<meta http-equiv='refresh' content='0;database_restart.php'>";
		}else
		echo $conn->error;
	}
	else
	{
		
	//	echo "<meta http-equiv='refresh' content='0;database_restart.php'>";
		
		//do gui things
	}
?>