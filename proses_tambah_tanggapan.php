<?php
include 'koneksi/koneksi.php';


if(isset($_POST['simpan']))
    $id_tanggapan = $_POST['id_tanggapan'];
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_tanggapan = $_POST['tgl_tanggapan'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];
    
    
    //query
        $hasil = "INSERT INTO tanggapan (id_tanggapan,id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES ('$id_tanggapan','$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')";

        $query = mysqli_query($koneksi, $hasil);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: data_tanggapan.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index_tanggapan.php?status=gagal');

        }
 

?>