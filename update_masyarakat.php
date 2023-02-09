<?php
include "koneksi/koneksi.php";

$id = $_GET['nik'];
$sql = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE nik=$id");
$file = mysqli_fetch_array($sql);


?>

<?php include "header.php" ?>

<div id="page-wrapper">
	<div class="main-page">
		
		<h4 class="form-weight-bold">Edit Data</h4>
		<form action="proses_tambah_masyarakat.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="nik">nik</label>
				<input type="text" name="nik" value="<?= $file['nik']?>" id="nik" class=" form-control">
			</div>
			<div class="form-group">
				<label for="nama">nama</label>
				<input type="text" name="nama" value="<?= $file['nama']?>" id="nama" class="form-control">
			</div>

		<div class="form-group">
			<label for="username">username</label>
			<input type="text" name="username" value="<?= $file['username']?>" id="username" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">password</label>
			<input type="text" name="password" value="<?= $file['password']?>" id="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="telp">telp</label>
			<input type="text" name="telp" value="<?= $file['telp']?>" id="telp" class="form-control">
		</div>
			<input type="submit" value="update" name="update" class="btn btn-sm btn-primary">
				}
			</div>
			</div>
		</form>
	</div>
</div>