 <?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
	<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Tambah Masyarakat</h4>
				<form action="proses_tambah_masyarakat.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nik">Nik</label>
						<input type="number" name="nik" id="nik" class="form-control">


					</div>



					<div class="form-group">
						<label for="nama">nama</label>
						<input type=text name="nama" id="nama" class="form-control">
					</div>

					<div class="form-group">
						<label for="username">username</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="password">password</label>
						<input type="text" name="password" id="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="telp">telp</label>
						<input type="text" name="telp" id="telp" class="form-control">
					</div>
					<input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary">
					<a href="data_masyarakat.php" class="btn btn-sm btn-danger">Lihat Data</a>
				</form>

			</div>
		</div>


<?php
include 'footer.php';
?>





