<?php
include("koneksi.php");
$id = $_GET['id'];  
$query = $db->query("SELECT * FROM tb_buku WHERE buku_id = '$id'");
$buku = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku</title>
</head>
<body>
    <h3>Edit Data Buku</h3>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="buku_id" value="<?php echo $buku['buku_id']; ?>">
        <table border="0">
            <tr>
                <td>Judul Buku</td>
                <td>
                    <input type="text" name="judulBuku"
                     value="<?php echo $buku['judulBUKU']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>
                    <input type="text" name="penulis"
                     value="<?php echo $buku['penulis']; ?>" required>
                </td>
            </tr>
             
            <tr>
                <td>Tahun Publikasi</td>
                <td>
                <input type="text" name="tahun_publikasi"
                value="<?php echo $buku['tahun_publikasi']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>