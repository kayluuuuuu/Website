<?php include 'base.php'; 
	$id = $_SESSION['topicid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Funding|PSHS-BRC Research Database</title>
</head>
<body style="text-align: center">
	<?php include 'header.php'; ?>
	<br>
	<div class="row" style="margin-left: auto">
		<h3>Donate now!</h3>
		<span>
			Process:<br>
			&nbsp&nbsp&nbsp&nbsp1. Take note of the project that you want to fund<br>
			&nbsp&nbsp&nbsp&nbsp2. Fill out the form below. The fields with the asterisk should be filled out for you to submit the form<br>
			&nbsp&nbsp&nbsp&nbsp3. An e-mail confirmation and a representative from the school will contact you after a while regarding your donation.<br>
		</span><br>
<!--		<form method="post" action="paypal.php"> -->
			<div class="input-field col s8 offset-s2">
					Or Donate via Paypal <br>

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6DVWNRFVYMF2A">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<input TYPE="hidden" NAME="return" value="website.domain/success.php?topic=<?php echo $_GET["topic"] ?>">
					</form>

					<!--
					<input type="email" name="ppemail" id="ppemail" class="validate">
					<label for="fname">Enter Paypal Email</label>
					<button type="submit" name="action" class="btn waves-effect waves light">Submit</button>
				-->
			</div>
<!--		</form> -->
	</div>
	<br>
	<hr>
	<br>
	<form action="viewtopic_restart.php" method="post">
		<div class="container">
			<div class="row">
				<div class="input-field col s8 offset-s2">
					<input type="text" name="fname" id="fname" class="validate" required>
					<label for="fname">First Name*</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="mname" id="mname" class="validate">
					<label for="mname">Middle Name</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="lname" id="lname" class="validate" required>
					<label for="lname">Last Name*</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="email" name="email" id="email" class="validate" placeholder="example@website.com" required>
					<label for="email">E-Mail*</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="phone" id="num" class="validate">
					<label for="num">Contact Number</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="amount" id="amount" class="validate" required>
					<label for="amount">Desired Amount*</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" name="address" id="address" class="validate">
					<label for="address">Address</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<textarea id = "comment" class="materialize-textarea"></textarea>
					<label for="comment">Comments</label>
				</div>
				<!--honeypot captcha-->
				<div class="input-field col s8 offset-s2" style="display:none">
					<input type="text" name="captcha" id="captcha" class="validate">
					<label for="address">Address</label>
				</div>
			</div>
			<br>
			<hr>
			<br>
			<div class="row">
				
				<br>
				<button type="submit" name="action" class="btn waves-effect waves light">Submit</button>
			</div>
		</div>
	</form>
	<?php include 'footer.php'; ?>
</body>
</html>