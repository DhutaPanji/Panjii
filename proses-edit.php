<?php
session_start();
include("koneksi.php");

if (isset($_POST['simpan'])) {
    $id= $_POST['buku_id'];
    $judulBuku = $_POST['judulBuku'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun_publikasi'];

    $sql = "UPDATE tb_buku SET
            judulBuku='$judulBuku',
            penulis='$penulis',
            tahun_publikasi='$tahun'
            WHERE buku_id=$id";

    $query=mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data buku berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data buku gagal diperbarui!";
    }

   
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>