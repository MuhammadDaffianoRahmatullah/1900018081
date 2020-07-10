<!DOCTYPE html>
<html>
<head>
	<title>Hasil pengisian KTP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
	alert("Silahkan koreksi data Anda secara teliti")
</script>
<body class="tabel">
	<div>
		halo
	</div>
	<div>
<?php  
$myfile = fopen("formktp.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("formktp.txt"));
fclose($myfile);
?>
	</div>
<h3>Apabila ada kesalahan data silahkan lakukan perbaikan di kolom di bawah</h3><br> 
<textarea></textarea>
</body>
</html>