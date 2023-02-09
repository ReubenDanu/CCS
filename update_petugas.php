<?php
include "koneksi/koneksi.php";

$id = $_GET['id_petugas'];
$sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas=$id");
$file = mysqli_fetch_array($sql);


?>

<?php include "header.php" ?>

<div id="page-wrapper">
	<div class="main-page">
		
		<h4 class="form-weight-bold">Edit Data</h4>
		<form action="proses_tambah_petugas.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="id_petugas">Id_petugas</label>
				<input type="text" name="id_petugas" value="<?= $file['id_petugas']?>" id="id_petugas" class=" form-control">
			</div>
			<div class="form-group">
				<label for="nama_petugas">Nama_petugas</label>
				<input type="text" name="nama_petugas" value="<?= $file['nama_petugas']?>" id="nama_petugas" class="form-control">
			</div>

		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" value="<?= $file['username']?>" id="username" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="text" name="password" value="<?= $file['password']?>" id="password" class="form-control">
		</div>
        <div class="form-group">
			<label for="telp">Telp</label>
			<input type="text" name="telp" value="<?= $file['telp']?>" id="telp" class="form-control">
		</div>
       
		<div class="form-group">
			<label for="level">level</label>
			<input type="text" name="level" value="<?= $file['level']?>" id="level" class="form-control">
		</div>
			<input type="submit" value="update" name="update" class="btn btn-sm btn-primary">
				}
			</div>
			</div>
		</form>
	</div>
</div> 