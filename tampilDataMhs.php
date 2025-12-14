<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM mhs ORDER BY nim DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Data Mahasiswa</h2>
        <a href="tambahDataMhs.php">Tambah Data Baru</a>
        <table>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>jml sdr</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>JK</th>
            <th>Status</th>
            <th>Hobi</th>
            <th>Email</th>
            <th>Pass</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) : ?>
            <tr>
                <td><?=$row['id'] ?></td>
                <td><?=$row['nim'] ?></td>
                <td><?=$row['nama'] ?></td>
                <td><?=$row['tempatlahir'] ?></td>
                <td><?=$row['tanggalLahir'] ?></td>
                <td><?=$row['jmlSaudara'] ?></td>
                <td><?=$row['alamat'] ?></td>
                <td><?=$row['Kota'] ?></td>
                <td><?=$row['jenisKelamin'] ?></td>
                <td><?=$row['statusKeluarga'] ?></td>
                <td><?=$row['hobi'] ?></td>
                <td><?=$row['email'] ?></td>
                <td><?=$row['pass'] ?></td>
            </tr>
        <?php
        endwhile;
        ?>
        </table>
    </div>
</body>
</html>