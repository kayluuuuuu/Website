<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Topic|PSHS-BRC Research Database</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<br>
		<h3>Add your Research Topic</h3>
		<br>
		<hr>
		<form method="post" action="confirm2.php">
			<div class="row">
				<div class="input-field col s8 offset-s2">
					<input type="text" name="topic" id="topic" class="validate">
					<label for="topic">Research Title</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="proponents" id="prop" class="validate">
					<label for="prop">Proponents</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="teacher" id="resteach" class="validate">
					<label for="resteach">Research Teacher</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="adviser" id="resadv" class="validate">
					<label for="resadv">Research Adviser/s</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="yearaccomp" id="yeara" class="validate">
					<label for="yeara">Year Level</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="fundreq" id="funr" class="validate">
					<label for="funr">Funds Requested (PHP)</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<textarea id="textarea1" class="materialize-textarea" name="abstract"></textarea>
					<label for="textarea1">Abstract</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<textarea id="textarea2" class="materialize-textarea" name="comp"></textarea>
					<label for="textarea2">Competitions Joined</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 offset-s5">
					<button type="submit" name="action" class="btn waves-effect waves-light">
						Submit
					</button>
				</div>
			</div>
		</form>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>