<?php include 'base.php';
    require_once 'Paginator.class.php';
	$limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query = "SELECT * FROM databasetable_restart";

    $filterbutton = "<a href='filter_restart.php' class='waves-effect waves-light btn'>FILTER</a>";

	if(!empty($_SESSION['filter']) && !empty($_SESSION['filter_val']))
	{
		$filterbutton = "<a href='clear_restart.php' class='waves-effect waves-light btn'>CLEAR FILTER</a>";
	    $query = "SELECT * FROM databasetable_restart WHERE ".$_SESSION['filter']." LIKE '%".$_SESSION['filter_val']."%'";
	}
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $page, $limit );
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSHS-BRC Research Database</title>
</head>
<body>
	<?php include 'header.php';?>
	<div class="container center">
		<div class="left-align">
			<br><br><br><br>
			<h3>THE <span class="light-green-text text-accent-4">RE</span><span class="red-text">START<span></span></h3>
			<p>The RESTART lets you view the important information about ongoing studies of student researchers in PSHS-BRC. This is also where you can help the students financially by donating in the funding section.</p>
		</div>
		<br><br><br>
		<div class="row">
			<p class="left-align">
				<b>Click the Filter Button to filter data</b>
			</p>
			<nav class="grey lighten-2">
				<div class="nav-wrapper">
					<ul class="right hide-on-med-and-down">
						<li>
							<?php echo $filterbutton ?>
						</li>
					</ul>
				</div>
			</nav>
			<table class="centered bordered">
				<thead>
					<tr>
          				<th data-field="proponents">Proponents</th>
        			  	<th data-field="topic">Topic</th>
          				<th data-field="radviser">Research Adviser/s</th>
          				<th data-field="rteacher">Research Teacher</th>
          				<th data-field="year">Year Level</th>
          				<th data-field="fund">Fund Completion</th>
          				<th data-field="competing">Competitor</th>
          				<th data-field="competing">More Info</th>
					</tr>
				</thead>
				<tbody>
					<?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
			        <tr>
		                <td><?php echo $results->data[$i]['proponent1'];?></td>
		                <td><?php echo $results->data[$i]['topic']; ?></td>
		                <td><?php echo $results->data[$i]['radviser']; ?></td>
		                <td><?php echo $results->data[$i]['rteach1']; ?></td>
		                <td><?php echo $results->data[$i]['yearLevel']; ?></td>
		                <td><?php echo $results->data[$i]['fundObt'] / $results->data[$i]['fundReq'] * 100 ."%" ; ?></td>
		                <td><?php 
		                if($results->data[$i]['competition'] == TRUE){
		                	echo '<i class="material-icons yellow">star</i>';
		                }else{
		                	echo '<i class="material-icons">star_border</i>';
		                }
		                ?></td>
		                <td>
		              		<form method="post" action="viewtopic_restart.php">
		              			<input type="text" name="val" style="display: none;" value="<?php echo $results->data[$i]['id'];?>">
		              			<button type="submit" name="action" class="btn-floating btn waves-effect waves-light red"><i class="material-icons">add</i></div>
		              		</form>
		                </td>
			        </tr>
			    <?php endfor; ?>
				</tbody>
			</table>
			<?php echo $Paginator->createLinks( $links, 'pagination' ); ?> 
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>