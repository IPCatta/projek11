<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="simpanDataMhs.php" method="post">
        NIM : <input type="text" name="nim" required><br>
        Nama : <input type="text" name="nama" required><br>
        Tempat Lahir : <input type="text" name="tempat_lahir" required><br>
        Tanggal Lahir : <input type="date" name="tanggalLahir" required><br>
        Jumlah Saudara : <input type="number" name="jumlah_saudara" required><br>
        Alamat :<br>
        <textarea rows="5" cols="50" name="alamat"></textarea><br>
        Kota :
        <select name="kota">
            <option >Semarang</option>
            <option >Solo</option>
            <option >Brebes</option>
            <option >Kudus</option>
            <option >Demak</option>
            <option >Salatiga</option>
        </select>
        <input type="radio" name="jk"  value="L">Laki-laki
        <input type="radio" name="jk"  value="P">Perempuan<br>
        <br><br>
        Status :
        <input type="radio" name="statusKeluarga"  value="K" required>kawin
        <input type="radio" name="statusKeluarga"  value="B" required>belum kawin
        <br><br>
        Hobi :
        <input type="checkbox" name="hobi[]" value="Membaca">Membaca <br>
        <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga <br>
        <input type="checkbox" name="hobi[]" value="Musik">Musik <br>
        <input type="checkbox" name="hobi[]" value="Traveling">Traveling
        <br><br>
        Email : <input type="email" name="email" required><br><br>
        <input type="Password" name="Password" required>
        <input type="submit" value="Simpan"> 
    </form>
</body>
</html>