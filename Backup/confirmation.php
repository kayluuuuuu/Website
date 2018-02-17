<?php include 'base.php'; 
	$_SESSION['idval']=$_POST['val'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSHS-BRC Research Database</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container center">
		<div class="row">
			<div class="col s12">
				<br><br><br>
				<h3>Do you Approve or Disprove?</h3>
				<br>
				<a href="approve.php" class="btn waves-effect waves-light">Approve</a>
				<a href="disprove.php" class="btn waves-effect waves-light red">Disprove</a>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>