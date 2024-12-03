<?php
session_start(); 
include("koneksi.php");

if (isset($_POST['simpan'])) {
    $judul_buku= $_POST['judulBUKU'];
    $penulis = $_POST['penulis'];
    $tahunPublikasi = $_POST['tahun_publikasi'];
    
  
    $sql = "INSERT INTO tb_buku 
            ( judulBUKU, penulis, tahun_publikasi)
            VALUES ('$judul_buku', '$penulis', '$tahunPublikasi')";

$query=mysqli_query($db, $sql);
    if ($query) {
        $_SESSION['notifikasi'] = "Data Buku berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data Buku gagal ditambahkan!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>