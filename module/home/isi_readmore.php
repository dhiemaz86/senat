 <div class="col-md-3">
  
  <div class="col-md-12 ">  
        
                <ul class="media-list"  style="background-color: #fff;">
  <h4 class="list-group-item-heading">

        <div class="section-title panel">Top Artikel</div>
    </h4>
        
        <ul>

<?php  
    include "koneksi.php";  
   
$batas=4;
if(empty($paging))
    {
    $posisi=0;
    $paging=1;
    }

else{
    $posisi=($paging-1) * $batas;
    }
$query=mysql_query("select * from berita 
order by id_berita desc  limit $posisi,$batas");

    while($r=mysql_fetch_array($query))



{

    $idberita   =  "".$r['id_berita']." ";
    $md5id = md5($idberita);
    $token = md5(md5($idberita).md5('kata acak'));

 echo"                  <li class='media'>
                            <div class='media-left'>
                                                    
    <a href='home.php?module=berita&id=$idberita&token=$token'>
    <img class='media-object'  src='mimin/gambar_berita/$r[gambar]' width='64px' height='64px'></a>
                            </div>
                       <div class='media-body'> <h6>    
 ".substr($r['isi_berita'],0,100)." <a href='home.php?module=berita&id=$idberita&token=$token'>[Read More]</a> </p></h6>
                       </div>"; 
                        
      
      
     

      
    } 

?>   
</div>

  </div>
  <!-- Bagian TENGAH-->     
  <!-- Bagian TENGAH-->     
  <div class="col-md-8">


<div style="background-color: #fff;">

<?php

    require_once('lib/DBClass.php');
    require_once('models/m_berita.php');

    $id = abs((int)$_GET['id']);
    $id_berita=$_GET['id'];
    $token=$_GET['token'];
    $cek=md5(md5($id_berita).md5('kata acak'));
    //$id=$_GET['id'];
    $berita = new Berita();
    $data=$berita->readBerita($id);
    $r = $data[0];
if($token==$cek){
?>

<article class="posts">
     <h4 class="section-title">Berita</h4>
     <div class="meta-post">
         
        
     </div>
            <div style="padding-left: 85%">     <span><h6><em class="glyphicon glyphicon-time"></em> <?php echo"$r[tgl_input]"; ?></h6></span></div>
     <div class="content">

 <center><h3><?php echo"$r[judul_berita]"; ?></h3></center>
     
        <?php  echo"<div><center> <img border=4 style='height:250px;' src='mimin/gambar_berita/$r[gambar]'></center> </div>" ?>
        <br><br>
 
<div style="padding-left: 5%;"><p><h5><?php echo"<p> $r[isi_berita]</p>"; ?></h5>
    <br class="clear" /></p></div>

     </div>

 
 </article>
 </div>

 <?php
    }
else{
echo "SQL Injection detected! Jangan nakal ya :* ";
}
?>
</div>

</ul></ul></div>