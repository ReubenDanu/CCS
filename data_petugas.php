<?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Data Petugas</h4>
				<a class="btn btn-primary" href="index_petugas.php">Tambah Petugas</a>
				<table class="table table-hover table-bordered" style="margin-top: 10x">
					<tr class= "success">
						<th width="50px">NO</th>
						<th>Id_petugas</th>
						<th>Nama_petugas</th>
						<th>Username</th>
						<th>Password</th>
						<th>Telp</th>
                        <th>Level</th>
						<th style="text-align: center;">Actions</th>
						</tr>

						<?php
						$data=mysqli_query($koneksi, "SELECT * FROM petugas");
							$a=1;
							while ($obj=mysqli_fetch_object($data)) {
						?> 
							<tr>
								<td><?= $a ?></td>
								<td><?= $obj->id_petugas ?></td>
								<td><?= $obj->nama_petugas ?></td>
								<td><?= $obj->username ?></td>
								<td><?= $obj->password ?></td>
                                <td><?= $obj->telp ?></td>
                                <td><?= $obj->level ?></td>
                                
								<td style="text-align: center;">
									<a onclick="return confrim('Apakah yakin data akan di hapus')" href="proses_hapus_petugas.php?id_petugas=<?php echo $obj->id_petugas ?>"
									class="btn btn-danger btn-sm"><spam class="glyphicon glyphicon-trash"></span></a>
									<a href="form_edit_petugas.php?id_petugas=<?php echo $obj->id_petugas ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
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