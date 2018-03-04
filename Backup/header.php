<?php 
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
		if ($_SESSION['Level']=="admin" || $_SESSION['Level']=="master"|| $_SESSION['Level']=="teacher") {
			?>
		 <nav>
		    <div class="nav-wrapper grey">
		      <a href="#" class="brand-logo center">PSHS-BRC Research Database</a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		        <li class="tooltipped" data-tooltip="Home"><a href="portal.php"><i class="material-icons">home</i></a></li>
		        <li class="tooltipped" data-tooltip="Add Topic"><a href="addtopic.php"><i class="material-icons " >add</i></a></li>
		        <li class="tooltipped" data-tooltip="Approve Topic"><a href="approval.php"><i class="material-icons " >check</i></a></li>
			    <li class="tooltipped" data-tooltip="Log Out"><a href="logout.php"><i class="material-icons " >close</i></a></li>
		      </ul>
		    </div>
		  </nav>

			<?php
		}else {
			?>
			
			 <nav>
			    <div class="nav-wrapper grey">
			      <a href="#" class="brand-logo center">PSHS-BRC Research Database</a>
			      <ul id="nav-mobile" class="left hide-on-med-and-down">
			        <li class="tooltipped" data-tooltip="Home"><a href="portal.php"><i class="material-icons">home</i></a></li>
			        <li class="tooltipped" data-tooltip="Add Topic"><a href="addtopic_restart.php"><i class="material-icons " >add</i></a></li>
				    <li class="tooltipped" data-tooltip="Log Out"><a href="logout.php"><i class="material-icons " >close</i></a></li>
			      </ul>
			    </div>
			  </nav>
			<?php
		}
	}else{
		?>
		 <nav>
		    <div class="nav-wrapper grey">
		      <a href="#" class="brand-logo center">PSHS-BRC Research Database</a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		        <li class="tooltipped" data-tooltip="Home"><a href="portal.php"><i class="material-icons">home</i></a></li>
		        <li class="tooltipped" data-tooltip="Log In"><a href="addtopic_restart.php"><i class="material-icons " >supervisor_account</i></a></li>
		      </ul>
		    </div>
		  </nav>
		        
		<?php
	}
?>