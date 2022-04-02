<?php
include 'header_excel.php';
	ob_start();
	include 'connect.php';

	$output =	"<div class='table-responsive'>
		<table class='table table-striped'>
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
			</tr>";

	$stmt = $con->prepare("SELECT * FROM hazop");
	$stmt->execute();

	/* Fetch all of the remaining rows in the result set */
	$result = $stmt->fetchAll();
	
	if(!empty($result)) {
		$i=1;
		foreach ($result as $value) {
			
			$output .= "
					<tr>
						<th>" . $i++ . "</th>
						<th>". $value['name']  ."</th>
						<th>". $value['email']  ."</th>
						<th>".  $value['phone']  ."</th>
						<th>".  $value['city']  ."</th>
						<th>". $value['facebook'] ."</th>
						<th>".  $value['university']  ."</th>
						<th>".  $value['faculty'] ."</th>
						<th>".  $value['department']  ."</th>
						<th>".  $value['ac_yr']  ."</th>
						<th>".  $value['open_area']  ."</th>

					</tr>";
				

		} 
	}



	
		$output .= '</table>
			</div>';
		header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=hazop.xls");
	echo $output;

	include 'footer.php';
	?>