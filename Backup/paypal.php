<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="business" value="<?php echo $_POST['ppemail']?>">
	<input type="hidden" name="cmd" value="_donations">
	<input type="hidden" name="item_name" value="Topic">
	<input type="hidden" name="item_number" value="Topic">
	<input type="hidden" name="currency_code" value="PHP">
	<input type="image" name="submit" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_donate_92x26.png" alt="donate">
	<img src="https://www.paypalobjects.com/en_US/i/src/pixel.gif" alt="" width="1" height="1">
</form>