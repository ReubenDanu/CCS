<?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Data Tanggapan</h4>
				<a class="btn btn-primary" href="index_tanggapan.php">Tambah Tanggapan</a>
				<table class="table table-hover table-bordered" style="margin-top: 10x">
					<tr class= "success">
						<th width="50px">NO</th>
						<th>Id_tanggapan</th>
						<th>Id_pengaduan</th>
						<th>Tgl_tanggapan</th>
						<th>Tanggapan</th>
						<th>Id_petugas</th>
						<th style="text-align: center;">Actions</th>
						</tr>

						<?php
						$data=mysqli_query($koneksi, "SELECT * FROM tanggapan");
							$a=1;
							while ($obj=mysqli_fetch_object($data)) {
						?> 
							<tr>
								<td><?= $a ?></td>
								<td><?= $obj->id_tanggapan ?></td>
								<td><?= $obj->id_pengaduan ?></td>
								<td><?= $obj->tgl_tanggapan ?></td>
								<td><?= $obj->tanggapan ?></td>
                                <td><?= $obj->id_petugas ?></td>
                                
								<td style="text-align: center;">
									<a onclick="return confrim('Apakah yakin data akan di hapus')" href="proses_hapus_tanggapan.php?id_tanggapan=<?php echo $obj->id_tanggapan ?>"
									class="btn btn-danger btn-sm"><spam class="glyphicon glyphicon-trash"></span></a>
									<a href="form_edit_tanggapan.php?id_tanggapan=<?php echo $obj->id_tanggapan ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
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