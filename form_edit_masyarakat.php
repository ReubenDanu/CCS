<?php

include"koneksi/koneksi.php";
$dta =mysqli_query ($koneksi,"SELECT * FROM masyarakat WHERE nik = '$_GET[nik]'");
$dt =mysqli_fetch_assoc($dta);

?>
<?php
	include "header.php";
?>
<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Update Masyarakat</h4>
				<form action="proses_edit_masyarakat.php" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="nik">nik</label>
						<input type="number" name="nik" value="<?= $dt['nik']?>" id="nik" class="form-control" readonly>
					</div>					
					<div class="form-group">
						<label for="nama">nama</label>
						<input type="text" name="nama" value="<?= $dt['nama']?>" id="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="username">username</label>
						<input type="text" name="username" id="username" value="<?= $dt['username']?>"class="form-control">
					</div>
					<div class="form-group">
						<label for="password">password</label>
						<input type="text" name="password" id="password" value="<?= $dt['password']?>"class="form-control">
					</div>
					<div class="form-group">
						<label for="telp">telp</label>
						<input type="text" name="telp" value="<?= $dt['telp']?>"id="telp" class="form-control">
					</div>
					<input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary">
					<a href="data_masyarakat.php" class="btn btn-sm btn-danger">Lihat Data</a>
				</form>

			</div>
		</div>