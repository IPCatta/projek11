<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Mahasiswa</h2>
        <form action="simpandataMhs.php" method="post">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" required>
            </div>
            
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>
            
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" required>
            </div>
            
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggalLahir" required>
            </div>
            
            <div class="form-group">
                <label>Jumlah Saudara</label>
                <input type="number" name="jumlah_saudara" required>
            </div>
            
            <div class="form-group">
                <label>Alamat</label>
                <textarea rows="5" name="alamat"></textarea>
            </div>
            
            <div class="form-group">
                <label>Kota</label>
                <select name="kota">
                    <option>Semarang</option>
                    <option>Solo</option>
                    <option>Brebes</option>
                    <option>Kudus</option>
                    <option>Demak</option>
                    <option>Salatiga</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" name="jk" value="L" id="jk_l" required>
                        <label for="jk_l">Laki-laki</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" name="jk" value="P" id="jk_p" required>
                        <label for="jk_p">Perempuan</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Status</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" name="statusKeluarga" value="K" id="status_k" required>
                        <label for="status_k">Kawin</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" name="statusKeluarga" value="B" id="status_b" required>
                        <label for="status_b">Belum Kawin</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Hobi</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" name="hobi[]" value="Membaca" id="hobi1">
                        <label for="hobi1">Membaca</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="hobi[]" value="Olahraga" id="hobi2">
                        <label for="hobi2">Olahraga</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="hobi[]" value="Musik" id="hobi3">
                        <label for="hobi3">Musik</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="hobi[]" value="Traveling" id="hobi4">
                        <label for="hobi4">Traveling</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="Password" required>
            </div>
            
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>