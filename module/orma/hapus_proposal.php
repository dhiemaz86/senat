<div class="col-md-9">
<?php
    require_once('lib/DBClass.php');
    require_once('lib/koneksi.php');
    require_once('models/m_kirim_proposal.php');

$user = $_SESSION['usernameku'];
$id = abs((int)$_GET['a']);
$hapus_proposal = new kirim_proposal();

$data=$hapus_proposal->readKirim_proposal($id);

$id_berita=$_GET['a'];
$token=$_GET['token'];
$cek=md5(md5($id_berita).md5('kata acak'));
if($token==$cek){

$dt = $data[0];
$proposal= $dt['proposal']; 

    $target="mimin/ARSIP/PROPOSAL/proposal_masuk/$user/$proposal";
    if (file_exists($target)){
        unlink($target); //Delete now
    }
    if (file_exists($target)) {
        echo "Proposal $proposal gagal di hapus" ;
    } else {
        echo "Proposal $proposal berhasil di hapus";
    }
        



    $hapus = $hapus_proposal->deleteKirim_proposal($id);
   
             echo "<script> alert('Proposal Berhasil Dihapus!'); window.location = 'orma.php?module=orma';</script>";
  


}
else{
echo "SQL Injection detected! Jangan nakal ya :* ";
}
?>