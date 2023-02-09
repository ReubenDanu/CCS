<?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Tambah Tanggapan</h4>
				<form action="proses_tambah_tanggapan.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id_tanggapan">id_tanggapan</label>
						<input type="number" name="id_tanggapan" id="id_tanggapan" class="form-control">
						</div>

					<div class="form-group">
						<label for="id_pengaduan">id_pengaduan</label>
						<input type=number name="id_pengaduan" id="id_pengaduan" class="form-control">
					</div>

					<div class="form-group">
						<label for="tgl_tanggapan">tgl_tanggapan</label>
						<input type="date" name="tgl_tanggapan" id="tgl_tanggapan" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="tanggapan">tanggapan</label>
						<input type="text" name="tanggapan" id="tanggapan" class="form-control">
					</div>

					<div class="form-group">
						<label for="id_petugas">id_petugas</label>
						<input type="number" name="id_petugas" id="id_petugas" class="form-control">
					</div>
					<input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary">
					<a href="data_tanggapan.php" class="btn btn-sm btn-danger">Lihat Data</a>
				</form>

			</div>
		</div>


<?php
include 'footer.php';
?>