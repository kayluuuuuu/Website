<?php 
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
		if ($_SESSION['Level']=="admin" || $_SESSION['Level']=="master"|| $_SESSION['Level']=="teacher") {
			?>
			<header>
				<nav class="grey lighten-1">
					<div class="nav-wrapper">
						<a href="portal.php" class="left">&nbsp&nbsp&nbspHome</a>
						<span class="brand-logo center black-text">PSHS-BRC Research Database</span>
						<ul class="right hide-on-med-and-down">
		        			<li><a href="addtopic.php">Add Topic</a></li>
		        			<li><a href="approval.php">Approve Topics</a></li>
		        			<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
			</header>
			<?php
		}else {
			?>
			<header>
				<nav class="grey lighten-1">
					<div class="nav-wrapper">
						<a href="portal.php" class="left">&nbsp&nbsp&nbspHome</a>
						<span class="brand-logo center black-text">PSHS-BRC Research Database</span>
						<ul class="right hide-on-med-and-down">
		        			<li><a href="addtopic_restart.php">Add Topic</a></li>
		        			<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<div class="nav-content"></div>
				</nav>
			</header>
			<?php
		}
	}else{
		?>
		<header>
			<nav class="grey lighten-1">
				<div class="nav-wrapper">
					<a href="portal.php" class="left">&nbsp&nbsp&nbspHome</a>
					<span class="brand-logo center black-text">PSHS-BRC Research Database</span>
					<ul class="right hide-on-med-and-down">
	        			<li><a href="login.php">Log In</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<?php
	}
?>