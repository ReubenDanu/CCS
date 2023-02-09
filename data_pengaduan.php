<?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Data Pengaduan</h4>
				<a class="btn btn-primary" href="index_pengaduan.php">Tambah Pengaduan</a>
				<table class="table table-hover table-bordered" style="margin-top: 10x">
					<tr class= "success">
						<th width="50px">NO</th>
						<th>Id_pengaduan</th>
						<th>Tgl_pengaduan</th>
						<th>Nik</th>
						<th>Isi_laporan</th>
                        <th>Status</th>
						<th>Foto</th>
						<th style="text-align: center;">Actions</th>
						</tr>

						<?php
						$data=mysqli_query($koneksi, "SELECT * FROM pengaduan");
							$a=1;
							while ($obj=mysqli_fetch_object($data)) {
						?> 
							<tr>
								<td><?= $a ?></td>
								<td><?= $obj->id_pengaduan ?></td>
								<td><?= $obj->tgl_pengaduan ?></td>
								<td><?= $obj->nik ?></td>
								<td><?= $obj->isi_laporan ?></td>
                                <td><?= $obj->status ?></td>
								<td><img src="assets/images/<?= $obj->foto ?>" class="img img-thumbnail img-fluid" width="80"></td>
                                
								<td style="text-align: center;">
									<a onclick="return confrim('Apakah yakin data akan di hapus')" href="proses_hapus_pengaduan.php?id_pengaduan=<?php echo $obj->id_pengaduan ?>"
									class="btn btn-danger btn-sm"><spam class="glyphicon glyphicon-trash"></span></a>
									<a href="form_edit_pengaduan.php?id_pengaduan=<?php echo $obj->id_pengaduan ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
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