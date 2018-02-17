<?php include 'base.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register|PSHS-BRC Research Database</title>
</head>
<body>
	<?php include 'header.php';?>	
	<div class="container">
		<?php if (!empty($_POST['username']) && !empty($_POST['pass'])) {
			$username=mysqli_escape_string($conn,$_POST['username']);
			$password=md5(mysqli_escape_string($conn,$_POST['pass']));
			$pos=mysqli_escape_string($conn, $_POST['position']);
			$checkusername=mysqli_query($conn,"SELECT * From users WHERE username = '".$username."'");
			$num=$checkusername->num_rows;
			if ($num==1) {
				echo "<p>Username Already Taken!</p>";
			}else{
				$registerquery=mysqli_query($conn,"INSERT INTO users (username,pass,pos,fullname) VALUES ('".$username."', '".$password."', '".$pos."', '$_POST[name]')");
				if ($registerquery) {
					echo "<p>Register Success!</p>";
					echo "<p>Redirecting to the Portal...</p>";
					echo "<meta http-equiv='refresh' content='5;portal.php'>";
				}
				else{
					echo "<p>Register Failed!</p>";
					echo "<meta http-equiv='refresh' content='5;register.php'>";
				}
			}
		}else{
			?>
			    <br>
				<h4 class="center">Register Account</h4>
				<br>
				<hr>
				<br>
				<form method="post" action="register.php">
					<div class="row">
						<div class="input-field col s8 offset-s2">
							<input type="text" name="name" id="name" class="validate">
							<label for="name">Full Name</label>
						</div>
						<div class="input-field col s8 offset-s2">
							<input type="text" name="username" id="user" class="validate">
							<label for="user">Username</label>
						</div>
						<div class="input-field col s8 offset-s2">
							<input type="password" name="pass" id="pass" class="validate">
							<label for="topic">Password</label>
						</div>
						<div class="input-field col s8 offset-s2">
							<select name="position">
								<option value="" disabled selected>Choose Option</option>
								<option value="student">Student</option>
								<option value="teacher">Teacher</option>
							</select>
							<label>Choose Position</label>
						</div>
					</div>
					<br>
					<div class="row center">
						<button type="submit" name="action" class="btn waves-effect waves-light">Submit</button>
					</div>
				</form>
		    <?php
		}
	?>
	</div>
	<?php include 'footer.php';?>
	<div id="modal1" class="modal center">
		<div class="modal-content">
			<h4>Passwords do not match!</h4>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves green btn">Go Back</a>
		</div>
	</div>
</body>
</html>