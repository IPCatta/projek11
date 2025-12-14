<?php
include 'koneksi.php';

function bersih($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$xnim            = bersih($_POST['nim']?? '');
$xnama           = bersih($_POST['nama']?? '');
$xtempatlahir    = bersih($_POST['tempat_lahir']?? '');
$xtanggalLahir   = bersih($_post['tanggal_Lahir']??'');
$xtanggalLahir   = date("Y-m-d", strtotime($xtanggalLahir));
$xjmlsaudara     = bersih($_POST['jmlsaudara']?? '');
$xalamat         = bersih($_POST['alamat']?? '');
$xkota           = bersih($_POST['kota']?? '');
$xjk             = bersih($_POST['jk']?? '');
$xstatusKeluarga = bersih($_POST['statusKeluarga']?? '');
$xhobi           = bersih($_POST['hobi']?? '');
$xemail          = bersih($_POST['email']?? '');
$xPassword    = bersih($_POST['Password']?? '');

if(empty($xraw_password) || strlen($xraw_password) <10) {
    die("Password minimal 10 karakter");
}

$hashed_password = password_hash($xraw_password, PASSWORD_BCRYPT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Simpan Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        $sql1 = "INSERT INTO data_mhs (nim, nama, tempat_lahir, tanggalLahir, jmlsaudara, alamat, kota, jenisKelamin
                         , statusKeluarga, hobi, email, pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt1 = $koneksi->prepare($sql1);
        $stmt1->bind_param("ssssssssssss", $xnim, $xnama, $xtempatlahir, $xtanggalLahir, $xjmlsaudara, $xalamat, $xkota, $xjk 
                                ,$xstatusKeluarga, $xhobi, $xemail, $hashed_password);
        if($stmt1->execute()) {
            echo '<div class="success">';
            echo "<strong>✓ Berhasil!</strong> Data berhasil disimpan!";
            echo '</div>';
            echo "<a href='tampilDataMhs.php'>Lihat Data</a>";
        } else {
            echo '<div class="error">';
            echo "<strong>✗ Error:</strong> " . mysqli_error($koneksi);
            echo '</div>';
            echo "<a href='tambahDataMhs.php'>Kembali</a>";
        }
        $koneksi->close();
        $stmt1->close();
        ?>
    </div>
</body>
</html>