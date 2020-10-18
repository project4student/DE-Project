<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- data table css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

	<title>Blood Donation Camp</title>
</head>

<body>
	<?php require 'nav.php'; ?>
	<div class="container my-3">

		<h2>Future Blood Camp</h2>
		<table id="myTable">
			<thead>
				<tr>
					<th>S.no.</th>
					<th>Date</th>
					<th>Time</th>
					<th>Camp Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Organized by</th>
				</tr>
			</thead>
			<tbody>
				<!-- aa badho data database mathi retrive karvano -->
				<tr>
					<td>1</td>
					<td>20 Oct. 2020</td>
					<td>10:00 AM to 02:00 PM</td>
					<td>Gurukul Ayojit Blood Camp</td>
					<td>opposite Sardarnagar circle, Bhavnagar</td>
					<td>111111111</td>
					<td>K.P.Swami</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php include "footer.php" ?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<!-- data table script -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>