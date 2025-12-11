<?php
include 'koneksi.php';

function bersih($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$xnim            = bersih($_POST['nim']?? '');
$xnama           = bersih($_POST['nama']?? '');
$xtempatlahir    = bersih($_POST['tempat_lahir']?? '');
$xtgllahir       = date("Y-m-d", strtotime($xtgllahir));
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
$sql1 = "INSERT INTO data_mhs (nim, nama, tempat_lahir, tgllahir, jmlsaudara, alamat, kota, jenisKelamin
                     , statusKeluarga, hobi, email, pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt1 = $koneksi->prepare($sql1);
$stmt1->bind_param("ssssssssssss", $xnim, $xnama, $xtempatlahir, $xtgllahir, $xjmlsaudara, $xalamat, $xkota, $xjk 
                            ,$xstatusKeluarga, $xhobi, $xemail, $hashed_password);
if($stmt1->execute()) {
    echo "Data berhasil disimpan! <br>";
    echo "<a href=tampilDataMhs.php>Lihat Data</a>";
} else {
    echo "error: " . mysqli_error($koneksi);
}
$koneksi->close();
$stmt1->close();
?>