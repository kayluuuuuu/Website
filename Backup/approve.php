<?php include 'base.php';
	$id = $_SESSION['idval'];
	$query = "INSERT INTO databasetable_restart (topic, proponent1, rteach1, radviser, yearLevel, fundReq, fundObt, competition, abstract, id_submit) SELECT topic, proponent1, rteach1, radviser, yearLevel, fundReq, fundObt, competition, abstract, id_submit FROM databasetable_restart_tableconfirm WHERE id = $id";
	$conn->query($query);

	$sql = "DELETE FROM databasetable_restart_tableconfirm WHERE id = $id";
	$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSHS-BRC Research Database</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="center">
		<br><br><br>
		<h3>Topic approved for funding!</h3>
		<h5>Redirecting to portal...</h5>
		<meta http-equiv='refresh' content='3;portal.php'>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>