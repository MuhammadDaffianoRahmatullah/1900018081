<!DOCTYPE html>
<html>
<head>
	<title>Validasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="validasi">
<?php 
$fp = fopen("formktp.txt", "a+");
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$gender = $_POST['jk'];
$alamat = $_POST['alamat'];
$rtw = $_POST['rtw'];
$keldes = $_POST['keldes'];
$kec = $_POST['kec'];
$agama = $_POST['agama'];
$kawin = $_POST['sp'];
$job = $_POST['job'];
$warga = $_POST['warga'];
$laku = $_POST['laku'];
fputs($fp,"$nik|$nama|$ttl|$gender|$alamat|$rtw|$keldes|$kec|$agama|$kawin|$job|$warga|$laku\n");
fclose($fp);
echo "<center>";
echo "Terima Kasih telah mengisi form ini<br>";
echo "KTP Anda akan jadi 7x24jam setelah Anda mengisi form ini<br>";
echo "Klik dibawah untuk melihat hasil";
echo "</center>";
   ?>
   <center><button><a href="tabel.php">Lihat Hasil</a></button></center>
</body>
</html>
