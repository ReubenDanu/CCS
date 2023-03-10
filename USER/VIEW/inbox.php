<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inbox - Report</title>
	<link rel="stylesheet" href="./ASSETS/CSS/inbox.css">
	<link rel="stylesheet" href="./ASSETS/CSS/reset.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<?php
	require_once('./COMPONENT/navbar.php.html');
	require_once('../../BASE/auth.php');
	require_once('../../BASE/connection.php');

	?>
	<main id="main">
		<div class="title">
			Your Recent Report
		</div>
		<?php
		if (session_status() == 0 || session_status() == 1) {
			session_start();
		}
		$idUser = $_SESSION['user'];
		$sql = "SELECT * FROM report where report.nik = '$idUser'";
		$result = $mysqli->query($sql);
		$rows = $result->num_rows;
		if ($rows > 0) {
			?>
			<table class="styled-table">
				<thead>
					<tr>
						<th>no</th>
						<th>title</th>
						<th>description</th>
						<th>status</th>
						<th>action</th>
						<th>date</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$index = 1;
					while ($data = $result->fetch_assoc()) {
						?>
						<?php if ($index % 2 == 0) { ?>

							<tr class="active-row">
							<?php } else { ?>

							<tr>
							<?php } ?>
							<td>
								<?php echo $index ?>
							</td>
							<td>
								<?php echo $data['title'] ?>
							</td>
							<td>
								<span class="report"><?php echo $data['report'] ?></span>
							</td>
							<td>
								<?php echo $data['status'] ?>
							</td>
							<td><a href="./getReport.php?id=<?php echo $data['id_report'] ?>" class="more"><i
										class="fa-solid fa-eye"></i></a></td>
							<td>
								<?php echo $data['date'] ?>
							</td>
						</tr>
						<?php
						$index++;
					}
					?>
				</tbody>
			</table>

			<?php
		} else {
			?>
			<div class="container empty">
				You have not sent any report yet
			</div>
		<?php } ?>
	</main>
	<?php
	require_once('./COMPONENT/footer.php.html');
	?>
</body>

</html>