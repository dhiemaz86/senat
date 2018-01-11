
<body class="senatbaru">

			


    <div id="background">





<?php //include('ndasfoto.php'); ?>
			
        <div id="content" >
			
     
						</div>  
				
                    <!-- end slider -->
		
<div class="panel panel-default">			
	<!-- Bagian KIRI-->				
	<div class="container">
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

 echo"					<li class='media'>
                            <div class='media-left'>
													
    <a href='readmore.php?id=$idberita&token=$token'>
	<img class='media-object'  src='ngadimin/berita/foto/$r[gambar]' width='64px' height='64px'></a>
							</div>
					   <div class='media-body'>		
<h6> ".substr($r['isi_berita'],0,100)." <a href='readmore.php?id=$idberita&token=$token'>[Read More]</a></h5> </p>
					   </div>"; 
						
      
	  
	 

      
    } 

?>   
</div>

  </div>
  <!-- Bagian TENGAH-->		
    <!-- Bagian KANAN-->    
  <div class="col-md-8" class="punel panel-default">
  <a class="section-title i-text col-md-12 panel">Agenda</a>   
<div style="height: 60px; background-color: #fff;"></div>


 <?php 
   

echo '

<table  rules="rows" border="0" style="background-color: #fff;" class="col-md-12">
<tr>
<th col-md-6> <div id="gbl"> Waktu </div> </th>
<th col-md-6>Acara</th>
</tr>
<tr>';
 

   
$batas=10;

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
 <td style= padding:10px;>".$r['tgl_agenda']." <br></td>
 <td style= height:30px;><a href='readmore.php?id=$idberita&token=$token'>".$r['judul_berita']." <br></a><br> </td>
 </tr>";
 }
echo '</table>
</div> ';

?>

  
  <!-- AKHIR AGENDA -->


		</div> <!-- end of panel -->

	

			
			
			
			
			
			
			
			
			
			
                    </div>
                </div>
            </div>
			

</body>
</html>