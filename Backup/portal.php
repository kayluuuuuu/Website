
<!DOCTYPE html>
<html>
<head>
	<title>PSHS-BRC Research Database</title>
	<?php include 'base.php'; ?>
</style>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="row" style="margin: 0px">

		<div class="col m6" style="height: 85vh; text-align: center; padding: 0px; padding-bottom: 0px">
	
			<div class="parallax-container" style="height: 85vh;" onmouseover=" $('#res-db-img').css({'filter':'blur(0) brightness(50%) contrast(120%)'});" onmouseleave=" $('#res-db-img').css({'filter':'blur(3px) brightness(50%) contrast(120%)'})">
			    <div class="section no-pad-bot">
			      <div class="container">
			        <br><br><br><br><br>
			        <h5 class="white-text">PSHS - BRC</h5>
			        <h3 class="header center teal-text white-text">RESEARCH DATABASE</h3>
			        <div class="row center">
			          <p class="header col s12 light white-text">View abstracts and other information about all the past researches in Philippine Sciece High School - Bicol Region Campus.</p>
			        </div>
			        <div class="row center">
			          <a href="database.php" class="btn-large waves-effect waves-light teal lighten-1">Proceed</a>
			        </div>
			        <br><br>

			      </div>
			    </div>
		    	<div class="parallax"><img id="res-db-img" src="resdb.jpeg" style="transform: translate3d(-60%, 9px, 0px); display: block;height: 30vh;filter: blur(3px) brightness(50%) contrast(120%);"></div>
		    </div>
		<!--	<div class="container">
				<br><br><br><br><br><br><br><br>
				<h5>PSHS-BRC</h5>
				<h3>RESEARCH DATABASE</h3>
				<div class="container">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<a href="database.php" class="waves-effect waves-light btn">PROCEED</a>
			</div>
		-->
		</div>
		<div class="col m6" style="height: 85vh; text-align: center; padding: 0px; padding-bottom: 0px">
			<div class="parallax-container" style="height: 85vh;"  style="height: 85vh;" onmouseover=" $('#restart-img').css({'filter':'blur(0) brightness(50%) contrast(120%)'});" onmouseleave=" $('#restart-img').css({'filter':'blur(3px) brightness(50%) contrast(120%)'})">
			    <div class="section no-pad-bot">
			      <div class="container">
			        <br><br><br><br><br><br>
			        <div class="row center">
			        	<h3 class="header center teal-text white-text">THE <span class="light-green-text text-accent-4">RE</span><span class="red-text">START<span></span></h3>
			          <p class="header col s12 light white-text">View important information about ongoing studies of student researchers in PSHS-BRC. Help the students financially by considering a donation in the funding section.</p>
			        </div>
			        <div class="row center">
			          <a href="database_restart.php" class="btn-large waves-effect waves-light teal lighten-1">Proceed</a>
			        </div>
			        <br><br>

			      </div>
			    </div>
		    	<div class="parallax"><img id="restart-img" src="restart.jpeg" style="transform: translate3d(-60%, 9px, 0px); display: block;height: 30vh;filter: blur(3px) brightness(50%) contrast(120%);"></div>
		    </div>
		<!--	<div class="container">
				<br><br><br><br><br><br><br><br><br><br>
				<h3>THE <span class="light-green-text text-accent-4">RE</span><span class="red-text">START<span></span></h3>
				<p>View important information about ongoing studies of student researchers in PSHS-BRC. Help the students financially by considering a donation in the funding section.</p>
				<a href="database_restart.php" class="waves-effect waves-light btn">PROCEED</a>
			</div>
		-->
		</div>
	</div>
	<?php include 'footer.php'; ?>
	</body>
</html>