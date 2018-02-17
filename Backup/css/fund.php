<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Funding|PSHS-BRC Research Database</title>
</head>
<body class="center">
	<?php include 'header.php'; ?>
	<br>
	<h3>How much will you fund this?</h3>
	<br>
	<hr>
	<br>
	<form action="viewtopic_restart.php" method="post">
		<div class="container">
			<div class="row">
				<div class="input-field col s8 offset-s2">
					<input type="text" name="fundconf" id="conf" class="validate">
					<label for="conf">Amount of Money (in PHP)</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="name" id="name" class="validate">
					<label for="name">Enter Your Name</label>
				</div>
			</div>
			<br>
			<div class="row">
				<button type="submit" name="action" class="btn waves-effect waves light">Submit</button>
			</div>
		</div>
	</form>
	<?php include 'footer.php'; ?>
</body>
</html>