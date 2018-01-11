<div id="background">
    <div id="content">

<div class="row">
  <div class="col-md-3">
<div style="height: 100%; background-color: grey;">

  <a class="section-title i-text col-md-12 panel">Link Orma</a> 

   <!-- AWAL KALENDER -->
   <?php include("linkorma.php");?>

   <!-- AKHIR KALENDER -->

  </div>
  </div>  


<div class="col-md-6">  

<!-- AWAL BERITA -->


<?php

  require_once('lib/DBClass.php');
  require_once('models/m_berita.php');
?>
<div class=" col-md-12 left">
        <div class="col-md-12 section-title panel" style="color: white;">
        <div class="pull-left"><a class="i-text">
            Berita</a></div>
        </div>
<?php  

if(!isset($_GET['hal'])){
 $no = 1;
} else {
 $no = $_GET['hal'];
}


  $hal=$no;  

 $batas=4;
$from = (($hal * $batas) - $batas);


if(empty($paging))
  {
  $posisi=$from;
  $paging=1;
  }

else{
  $posisi=($paging-1) * $batas;
  }
$query=mysql_query("select * from berita 
order by id_berita desc  limit $posisi,$batas");


  while($r=mysql_fetch_array($query))

  

/*
$query=mysql_query("select * from berita 
order by id_berita desc  limit $posisi,$batas");
*/

{
  
  $idberita   =  "".$r['id_berita']." ";
  $md5id = md5($idberita);
  $token = md5(md5($idberita).md5('kata acak'));


   echo"<div class='punel panel-default' style='border=10px'>
            <div class='panel-body'>
                <div class='raw'>
          <div class='col-md-12'>
            <div class='berita'>
                               <div class='col-md-7'>
                  <div class='caption'>

        <h3><a class='b-text' href='home.php?module=berita&id=$idberita&token=$token'>$r[judul_berita]</a></strong></h3>            
    <p>".substr($r['isi_berita'],0,150)." <br>
    </p>
                  </div> 

                </div>

                
          <div class='col-md-5'     style='text-align=right'>
                        <div id='wrapper' class='image-wrap'>
    <img style='height:160px;' class='img-responsive img-load-lazy' src='mimin/gambar_berita/$r[gambar]'>


            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 ";
      
    } 
?>
      
    <hr>


<!-- AKHIR BERITA -->


  </div>


<style type="text/css">
  a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: grey;
    color: white;
}

.next {
    background-color: grey;
    color: white;
}

.round {
    border-radius: 50%;
}
</style>
<center>
<?php
$prev=$no-1;
$next=$no+1;
?>
<a href="home.php?module=home&hal=<?php echo "$prev";?>" class="previous">&laquo; Kembali</a>
<a href="home.php?module=home&hal=<?php echo "$next";?>" class="next">Selanjutnya &raquo;</a>
</center>  

</div>


  <!-- Bagian KANAN-->    
  <div class="col-md-3" class="punel panel-default">
  <a class="section-title i-text col-md-12 panel">Agenda</a>   
<div style="height: 60px; background-color: #fff;"></div>


 <?php 
   

echo '

<table  rules="rows" border="0" style="background-color: #fff;" class="table table-striped table-bordered  col-md-12">
<tr>
<th class="col-md-6"> <div id="gbl"> Waktu </div> </th>
<th class="col-md-6"><div id="gbl">Acara</div> </th>
</tr>
<tr>';
 

   
$batas=5;

if(empty($paging))
  {
  $posisi=0;
  $paging=1;
  }

else{
  $posisi=($paging-1) * $batas;
  }
$query=mysql_query("select * from kategori,berita 
where berita.id_kategori=2=kategori.id_kategori order by id_berita desc  limit $posisi,$batas");
while($r=mysql_fetch_array($query))
 {
  $idberita   =  "".$r['id_berita']." ";
  $md5id = md5($idberita);
  $token = md5(md5($idberita).md5('kata acak'));

echo "
 <td style= padding:10px;><h6>".$r['tgl_agenda']." </h6><br></td>
 <td style= height:30px;><a href='home.php?module=berita&id=$idberita&token=$token'>".$r['judul_berita']." <br></a><br> </td>
 </tr>"

 ;
 }
echo '</table>
 ';

?>

<br>
<hr>
  <!-- AWAL ASPIRASI -->
<div class="panel" style="background-color: white;">
<div style="padding: 5%">

<a class="section-title i-text col-md-12 panel">Kolom Aspirasi</a>   
<?php include("chat/chat.php") ?>
<hr>
</div>
</div>

  <hr>
  <!-- AKHIR AGENDA -->
<a class="section-title i-text col-md-12 panel">Divisi Sema</a>   
<?php include("divisisema.php") ?>



  </div>
        </div>

   
</div>
    </div>
    </div>