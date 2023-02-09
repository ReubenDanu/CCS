<?php
include 'koneksi/koneksi.php';


if(isset($_POST['simpan']))
    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];
    
    
    //query
        $hasil = "INSERT INTO petugas (id_petugas,nama_petugas,username,password,telp,level) VALUES ('$id_petugas','$nama_petugas','$username','$password','$telp','level')";

        $query = mysqli_query($koneksi, $hasil);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: data_petugas.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index_petugas.php?status=gagal');

        }
 

?>