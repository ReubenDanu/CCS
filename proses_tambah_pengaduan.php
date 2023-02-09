<?php
include 'koneksi/koneksi.php';


if(isset($_POST['simpan'])){
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $nik = $_POST['nik'];
    $isi_laporan = $_POST['isi_laporan'];
   
    $status = $_POST['status'];
    $foto=time(). ".jpg";
    // $cover = $_POST['cover'];
   

$path ="assets/images/";
    
    if (move_uploaded_file($_FILES['foto']['tmp_name'],$path.$foto)){
    //query
        $hasil = "INSERT INTO pengaduan(id_pengaduan,tgl_pengaduan,nik,isi_laporan,foto,status) VALUES ('$id_pengaduan','$tgl_pengaduan','$nik','$isi_laporan','$foto','$status')";

        $query = mysqli_query($koneksi, $hasil);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: data_pengaduan.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index.pengaduan?status=gagal');

        }
    }else{
        die("Upload gambar gagal");
    }

} else {
    die("Akses dilarang...");
}

?>