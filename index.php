<?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Data Masyarakat</h4>
				<a class="btn btn-primary" href="index_masyarakat.php">Tambah Masyarakat</a>
				<table class="table table-hover table-bordered" style="margin-top: 10x">
					<tr class= "success">
						<th width="50px">NO</th>
						<th>Nik</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Password</th>
						<th>Telp</th>
						<th style="text-align: center;">Actions</th>
						</tr>

						<?php
						$data=mysqli_query($koneksi, "SELECT * FROM masyarakat");
							$a=1;
							while ($obj=mysqli_fetch_object($data)) {
						?> 
							<tr>
								<td><?= $a ?></td>
								<td><?= $obj->nik ?></td>
								<td><?= $obj->nama ?></td>
								<td><?= $obj->username ?></td>
								<td><?= $obj->password ?></td>
								<td><?= $obj->telp ?></td>
								<td style="text-align: center;">
									<a onclick="return confrim('Apakah yakin data akan di hapus')" href="proses_hapus_masyarakat.php?nik=<?php echo $obj->nik ?>"
									class="btn btn-danger btn-sm"><spam class="glyphicon glyphicon-trash"></span></a>
									<a href="form_edit_masyarakat.php?nik=<?php echo $obj->nik ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
									</td>
								</tr>
							<?php
							$a++;

							}

					?>		
</table>
			</div>
		</div>


<?php
include 'footer.php';
?>