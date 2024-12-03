<!DOCTYPE html>
<htswa>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h3>Tambah Data Buku</h3>
    <form action="proses-tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>JUDUL BUKU</td>
                <td><input type="text" name="judulBUKU" required></td>
            </tr>
            <tr>
                <td>PENULIS</td>
                <td><input type="text" name="penulis" required></td>
            </tr>
            <tr>
                <td>TAHUN PUBLIKASI</td>
                <td><input type="text" name="tahun_publikasi"></td>
            </tr>
                
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> 
    </form>
</body>
</htswa>