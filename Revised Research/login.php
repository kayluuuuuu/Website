<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In|PSHS-BRC Research Database</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="main center">
		<?php 
			if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
			    echo "<meta http-equiv='refresh' content='0;portal.php'>";
			}
			elseif(!empty($_POST['Username']) && !empty($_POST['Password'])){
				$username = mysqli_real_escape_string($conn, $_POST['Username']);
			    $password = md5(mysqli_real_escape_string($conn, $_POST['Password']));

			   	$checkuser = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$username."'");
			    $num = $checkuser->num_rows;
			    $checkpass = mysqli_query($conn, "SELECT * FROM users WHERE pass = '".$password."'");
			    $num2 = $checkpass->num_rows;

			    $val = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$username."' AND pass = '".$password."'");

			    if($num != "" && $num2 !=""){
			        $_SESSION['Username'] = $username;
			        $_SESSION['LoggedIn'] = 1;
			        while ($row=mysqli_fetch_array($val)) {
			        	$_SESSION['UserID'] = $row['id'];
			        	$_SESSION['Level'] = $row['pos'];
			    	}?>
			    	<div class="container">
			    		<br><br><br>
			    		<div class="row">

		    				<h3>Log in Success!</h3>
		    				<br>
		    				<span>You will be redirected to the home page shortly. If nothing happens, click <a href="portal.php">here</a></span>
		    				<meta http-equiv='refresh' content='2;portal.php'>
			    		</div>
			    		<br><br><br>
			    	</div>
			    	<?php 
			    }elseif ($num !="" && $num2 == "") {
			    	echo "<h3 class='center'>Wrong Password!</h3>";
			    	echo "<a href='login.php' class='btn waves-effect waves-light'>Go Back</a>";
			    }
			    else{
			    	echo "<h3 class='center'>No Account Exists</h3>";
			    	echo "<a href='login.php' class='btn waves-effect waves-light'>Go Back</a>";
			    }
			}else{
			  	?>
				<div class="container left-align">
					<br>
					<h4 class="center">Log In</h4>
					<br>
					<hr>
					<br>
					<form method="post" action="login.php">
						<div class="row">
							<div class="input-field col s8 offset-s2">
								<input type="text" name="Username" id="user" class="validate">
								<label for="user">Username</label>
							</div>
							<div class="input-field col s8 offset-s2">
								<input type="password" name="Password" id="pass" class="validate">
								<label for="pass">Password</label>
							</div>
						</div>
						<br>
						<div class="row center">
							<button type="submit" name="action" class="btn waves-effect waves-light">Submit</button>
						</div>
					</form>
					<h4 class="center">Don't have an account? <a href="register.php">Register here!</a></h4>
				</div>
				<?php
			}
		?>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>