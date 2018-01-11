<div class="col-md-9">
<?php
    require_once('lib/DBClass.php');
    require_once('lib/koneksi.php');
    require_once('models/m_data_lpj.php');

$user = $_SESSION['usernameku'];
$id = abs((int)$_GET['a']);
$hapus_lpj = new Data_lpj();

$data=$hapus_lpj->readData_lpj($id);

$id_berita=$_GET['a'];
$token=$_GET['token'];
$cek=md5(md5($id_berita).md5('kata acak'));
if($token==$cek){

$dt = $data[0];
$lpj= $dt['lpj']; 

    $target="mimin/ARSIP/LPJ/data_lpj/$user/$lpj";
    if (file_exists($target)){
        unlink($target); //Delete now
    }
    if (file_exists($target)) {
        echo "Proposal $lpj gagal di hapus" ;
    } else {
        echo "Proposal $lpj berhasil di hapus";
    }
        
  

   $hapus = $hapus_lpj->deleteData_lpj($id);
   
    echo "<script> alert('LPJ Berhasil Dihapus!'); window.location = 'orma.php?module=orma';</script>";
  


}
else{
echo "SQL Injection detected! Jangan nakal ya :* ";
}
?>