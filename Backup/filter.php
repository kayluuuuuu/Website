<?php include 'base.php';
	if(!empty($_POST['filter']) && !empty($_POST['textarea'])){
		$_SESSION['filter'] = $_POST['filter'];
	    $_SESSION['filter_val'] = $_POST['textarea'];
	    echo "<meta http-equiv='refresh' content='0;database.php'>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSHS-BRC Research Database</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container center">
	<br><br>
		<h3>Filter Topics</h3><br><br>
		<form action="filter.php" method="post">
			<div class="input-field col s8">
				<select name="filter">
					<option value="yearAccomp">By Year</option>
					<option value="proponent1">By Proponent</option>
					<option value="radviser">By Adviser</option>
					<option value="rteach1">By Teacher</option>
					<option value="competition">By Competition</option>
				</select>
			</div>
			<div class="input-field col s8">
				<input type="text" name="textarea" id="filter">
				<label for="filter">What to Filter</label>
			</div>
			<button class="btn flat waves-effect waves-light" type="submit" name="action">
				Submit
			</button>
		</form>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>