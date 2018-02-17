<?php include 'base.php';
	$id=$_SESSION['idval']
	$query = "DELETE FROM databasetable_restart_confirmtable WHERE id = $id";

	$conn->query($query);
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
		<h3>Topic disproved for funding!</h3>
		<h5>Redirecting to portal...</h5>
		<meta http-equiv='refresh' content='3;portal.php'>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>