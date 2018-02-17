<?php include 'base.php';
	$id = $_POST['val'];
	$query = "SELECT topic, abstract, competition, proponent1, radviser, rteach1 FROM databasetable WHERE id=$id";
	$result = $conn->query($query)
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSHS-BRC Research Database</title>
</head>
<body class="center">
	<?php include 'header.php';?>
	<div class="container">
	<div class="row">
		<?php if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		?>
		<div class="col s8">
			<div>
				<br>
				<h3><?php echo $row['topic']; ?></h3>
				<hr>
				<h5>Abstract</h5>
				<p class="flow-text">
					<?php echo $row['abstract']; ?>
				</p>
				<hr>
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
			</div>
		</div>
		<?php 
			}
		}else
			404
		?>
	</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>