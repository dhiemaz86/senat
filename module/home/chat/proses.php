<html>
<head>
<title>Kolom Aspirasi</title>
</head>
<body bgcolor="#45B5FF">
<?php 

$hr=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari_ini=date("w");
$hari_ini=$hr[$hari_ini];
$jam = date ("H:i:s");

$tgl=date("d/m/Y");
$aktif="1";
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];


$fp = fopen("module/home/chat/guestbook.txt","a+");
fputs($fp,"$hari_ini|$tgl|$jam|$nama|$email|$komentar\n");
fclose($fp);
echo("<script>alert('Aspirasi anda telah berhasil ditambahkan!'); window.location = 'home.php?module=home'</script>");


?>
</body>
</html>