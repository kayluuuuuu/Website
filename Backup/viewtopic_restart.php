<?php include 'base.php';
	if (!empty($_POST['val'])) {
		$id = $_POST['val'];
		$_SESSION['topicid'] = $id;
	}
	$val = $_SESSION['topicid'];
	if (empty($_POST['captcha'])){
		$num = mysqli_query($conn, "SELECT fundObt FROM databasetable_restart WHERE id = $val");
		while ($row = mysqli_fetch_array($num)) { 
			
			//may error daw to so tinangal ko  muna yung POST[amount]
			$var = $row['fundObt'];// + $_POST['amount'];
			//

			$query = "UPDATE databasetable_restart SET fundObt = $var WHERE id = $val";
			$conn->query($query);
		}
	}

	$query = "SELECT topic, abstract, competition, proponent1, radviser, rteach1, fundObt, fundReq FROM databasetable_restart WHERE id = $val";
	$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSHS-BRC Research Database</title>
</head>
<body class="center">
	<?php include 'header.php';?>
	<div class="row">
		<?php 
			$pdfname = "";

			if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$pdfname = $row['proponent1']." ".$row['topic'];
		?>
		<div class="col s8">
			<div class="container">
				<br>
				<h3><?php echo $row['topic']; ?></h3>
				<hr>
				<h5>Abstract</h5>
				<p class="flow-text">
					<?php echo $row['abstract']; ?>
				</p>
				<hr>
				<object style="width: 100%; height: 50vh" data="papers/<?php echo $pdfname ?>.pdf"></object>
				<h5>Competitions Joined</h5>
				<p class="flow-text">
					<?php 
					if ($row['competition'] != null)
						echo $row['competition']; 
					else
						echo "No Competitions Joined"?>
				</p>
			</div>
		</div>
		<div class="col s4">
			<div>
				<br>
				<h4>Proponents</h4>
				<p class="flow-text"><?php echo $row['proponent1']; ?></p>
				<h5>Research Adviser/s</h5>
				<p class="flow-text">
					<?php echo $row['radviser']; ?>
				</p>
				<h5>Research Teacher</h5>
				<p class="flow-text">
					<?php echo $row['rteach1']; ?>
				</p>
				<h5>Funds</h5>
				<p class="flow-text">
					<?php if($row['fundObt'] == null){echo "0";}else{echo $row['fundObt'];} ?>/<?php echo $row['fundReq']; ?>
					<?php 
						$var = $row['fundObt'] / $row['fundReq'];
						$var = $var * 100;
						echo "<h4>".$var."% Complete!</h4>";
					?>
				</p>
				<?php 
					if ($var <= 100) {
						echo '<a href="fund.php" class="btn waves-effect waves-light">Fund Me!</a>';
					}else{
						echo '<a href="fund.php" class="btn waves-effect waves-light" disabled>Fund Me!</a>';
					}
				?>
			</div>
		</div>
		<?php 
			}
		}else
			404
		?>
	</div>
	<?php include 'footer.php';?>
</body>
</html>