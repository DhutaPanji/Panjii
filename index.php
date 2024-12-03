<?php
include("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tentang Buku</title>
    <style>
        
        table,th,tb{
            border: 2px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Buku</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset ($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>JUDUL BUKU</th>
                    <th>PENULIS</th>
                    <th>TAHUN PUBLIKASI</th>
                    <th><a href="tambah_buku.php">Tambah Data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; 
                $query = $db->query("SELECT * FROM tb_buku");
                while($buku = $query->fetch_assoc()){
                    ?>
         <tr>        
        <td><?php echo $no++ ?></td>
       
        <td><?php echo $buku['judulBUKU'] ?></td>
        <td><?php echo $buku['penulis'] ?></td>
        <td><?php echo $buku['tahun_publikasi'] ?></td>
        </td>
        <td align="center">
<a href="edit_buku.php?id=<?php echo $buku ['buku_id'] ?>">Edit</a>
 <a onclick="return confirm('Anda yakin ingin menghapus data?')"
 href="hapus.php?id=<?php echo $buku['buku_id'] ?>">Hapus</a>
 </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
        </table>
         <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>