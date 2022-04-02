<?php 
	include 'header.php';
	ob_start();
	include 'connect.php';

	$stmt = $con->prepare("SELECT * FROM hysys");
	$stmt->execute();

	/* Fetch all of the remaining rows in the result set */
	$result = $stmt->fetchAll();
	?>
		<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>City</th>
				<th>Facebook</th>
				<th>University</th>
				<th>Faculty</th>
				<th>Department</th>
				<th>Academic Year</th>
				<th>Open Area</th>
			</tr>
	<?php
	if(!empty($result)) {
		$i = 1;
		foreach ($result as $value) {
			
			?>
			
					<tr>
						<th><?php echo $i++ ?></th>
						<th><?php echo $value['name'] ?></th>
						<th><?php echo $value['email'] ?></th>
						<th><?php echo $value['phone'] ?></th>
						<th><?php echo $value['city'] ?></th>
						<th><a href="<?php echo $value['facebook']; ?>" >facebook Account</a></th>
						<th><?php echo $value['university'] ?></th>
						<th><?php echo $value['faculty'] ?></th>
						<th><?php echo $value['department'] ?></th>
						<th><?php echo $value['ac_yr'] ?></th>
						<th><?php echo $value['open_area'] ?></th>

					</tr>
				

			<?php
		} 
	}
	
	?>

		</table>
			</div>
		<?php
	

?>
	
<form class="text-center" action="excel.php" method="POST">
	<input type="submit" value="Extract to Excel" class="btn btn-primary"  />
</form>

<?php
	include 'footer.php';
?>
