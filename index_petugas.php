<?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Tambah Petugas</h4>
				<form action="proses_tambah_petugas.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id_petugas">Id_petugas</label>
						<input type="number" name="id_petugas" id="id_petugas" class="form-control">
						</div>

					<div class="form-group">
						<label for="nama_petugas">Nama_petugas</label>
						<input type=text name="nama_petugas" id="nama_petugas" class="form-control">
					</div>

					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" id="password" class="form-control">
					</div>

					<div class="form-group">
						<label for="telp">Telp</label>
						<input type="text" name="telp" id="telp" class="form-control">
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<input type="text" name="level" id="level" class="form-control">
					</div>
					<input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary">
					<a href="data_petugas.php" class="btn btn-sm btn-danger">Lihat Data</a>
				</form>

			</div>
		</div>


<?php
include 'footer.php';
?>