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
			if(session_status() == 0 || session_status() == 1){
				session_start();
			}
			$idUser = $_SESSION['user'];
			$sql = "SELECT * FROM report where report.nik = '$idUser'";
			$result = $mysqli->query($sql);
			$rows = $result->num_rows;
			if($rows > 0){
				?>

				<div class="container">
					<div class="header">
						<span class="index">no</span>
						<span class="title">title</span>
						<span class="description">description</span>
						<span class="status">status</span>
						<span class="action">action</span>
						<span class="date">date</span>
					</div>
				<?php
				$index = 1;
				while ($data = $result->fetch_assoc()) {
				?>
				<div class="row">
				<span class="index"><?php echo $index?></span>
				<div class="main-content">
					<p class="title"><?php echo $data['title'] ?></p>
								<p class="desc">
									<?php echo $data['content'] ?>
								</p>
				</div>
				<div class="sub-info"><div class="status">
									<?php echo $data['status'] ?>
								</div>
								<div class="action">
									<a href="./getReport.php?id=<?php echo $data['id'] ?>" class="more"><i class="fa-solid fa-eye"></i></a>
								</div>
								<span class="date"><?php echo $data['date']?>
								</span></div>
			</div>
				<?php
				$index++;
				}
				?>
			</div>
			<?php
			}else{
				?>php
				<div class="container empty">
					You are 0 left behind report
				</div>
				<?php
			}
		?>
	</main>
	<?php
		require_once('./COMPONENT/footer.php.html');
	?>
</body>
</html>