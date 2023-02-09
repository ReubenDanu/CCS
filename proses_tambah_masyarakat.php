<?php
include 'koneksi/koneksi.php';


if(isset($_POST['simpan']))
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    
    
    //query
        $hasil = "INSERT INTO masyarakat (nik,nama,username,password,telp) VALUES ('$nik','$nama','$username','$password','$telp')";

        $query = mysqli_query($koneksi, $hasil);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: index.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index_masyarakat.php?status=gagal');

        }
 

?>