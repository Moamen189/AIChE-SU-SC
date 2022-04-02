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
				<th>University Email</th>
				<th>Were you in AIChE before?</th>
				<th>First Committee</th>
				<th>Secondary Committee</th>
				<th>Why do you want to join AIChE?</th>
				<th>Open Area</th>
			</tr>";

	$stmt = $con->prepare("SELECT * FROM recruitment");
	$stmt->execute();

	/* Fetch all of the remaining rows in the result set */
	$result = $stmt->fetchAll();
	
	if(!empty($result)) {
		$i = 0;
		foreach ($result as $value) {
			if(!empty($value['name'])) {
				$i++;
			$output .= "
					<tr>
						<th>" . $i . "</th>
						<th>". $value['name']  ."</th>
						<th>". $value['email']  ."</th>
						<th>".  $value['phone']  ."</th>
						<th>".  $value['city']  ."</th>
						<th>". $value['facebook'] ."</th>
						<th>".  $value['university']  ."</th>
						<th>".  $value['faculty'] ."</th>
						<th>".  $value['department']  ."</th>
						<th>".  $value['ac_yr']  ."</th>
						<th>".  $value['university_email']  ."</th>
						<th>".  $value['aiche_before']  ."</th>
						<th>".  $value['first_committee']  ."</th>
						<th>".  $value['second_committee']  ."</th>
						<th>".  $value['why_join']  ."</th>
						<th>".  $value['open_area']  ."</th>

					</tr>";
			}

		} 
	}

	
	
		$output .= '</table>
			</div>';
		header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=Recuitment.xls");
	echo $output;

	include 'footer.php';
	?>