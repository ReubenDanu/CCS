<?php

include"koneksi/koneksi.php";
$dta =mysqli_query ($koneksi,"SELECT * FROM petugas WHERE id_petugas = '$_GET[id_petugas]'");
$dt =mysqli_fetch_assoc($dta);

?>
<?php
	include "header.php";
?>
<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Update Petugas</h4>
				<form action="proses_edit_petugas.php" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="id_petugas">id_petugas</label>
						<input type="number" name="id_petugas" value="<?= $dt['id_petugas']?>" id="id_petugas" class="form-control" readonly>


					</div>
					
					<div class="form-group">
						<label for="nama_petugas">nama_petugas</label>
						<input type="text" name="nama_petugas" value="<?= $dt['nama_petugas']?>" id="nama_petugas" class="form-control">
					</div>
					<div class="form-group">
						<label for="username">username</label>
						<input type="text" name="username" value="<?= $dt['username']?>" id="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">password</label>
						<input type="text" name="password" id="password" value="<?= $dt['password']?>"class="form-control">
					</div>
					<div class="form-group">
						<label for="telp">telp</label>
						<input type="text" name="telp" value="<?= $dt['telp']?>"id="telp" class="form-control">
					</div>
                    <div class="form-group">
						<label for="level">level</label>
						<input type="text" name="level" id="level" value="<?= $dt['level']?>"class="form-control">
					</div>
					<input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary">
					<a href="data_petugas.php" class="btn btn-sm btn-danger">Lihat Data</a>
				</form>

			</div>
		</div>