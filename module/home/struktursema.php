
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
  <!-- Bagian TENGAH-->		
  <div class="col-md-8">
  
<!-- coba -->

<div style="background-color: #fff;">
<div class="section-title"><center>PENGURUS SENAT MAHASISWA 2015/2016</center></div>

<div class="entry-content center">
						<p style="text-align: center;"><strong></strong></p>
<table class="table table-striped table-bordered col-md-12" style="height: 1024px;" width="603">
<tbody>
<tr>
<center>
<th>Nama</th>
<th> </th>
<th>Nim</th>
<th>Jabatan</th>
</center>
</tr>
<tr>
<td width="202"><strong>Galih Anggriawan</strong></td>
<td width="32"><strong>:</strong></td>
<td width="132"><strong>13.11.7294</strong></td>
<td width="161"><strong>KETUA UMUM</strong></td>
</tr>
<tr>
<td width="202"><strong>Lasarus Bangun</strong></td>
<td width="32"><strong>:</strong></td>
<td width="132"><strong>13.11.7279</strong></td>
<td width="161"><strong>SEKRETARIS UMUM</strong></td>
</tr>
<tr>
<td width="399"><strong><center>KOMISI SEKRETARIS</center></strong></td>
</tr>
<tr>
<tr>
<td width="202"><strong>Indah Setiana Dewi</strong></td>
<td width="32"><strong>:</strong></td>
<td width="132"><strong>13.11.7510</strong></td>
<td width="161"><strong>SEKRETARIS I</strong></td>
</tr>
<tr>
<td width="202">Dekap</td>
<td width="32">:</td>
<td width="132">13.11.6988</td>
<td width="161">SEKRETARIS II</td>
</tr>
<tr>
<td width="202">Liza Kamaliyah</td>
<td width="32">:</td>
<td width="132">13.11.7176</td>
<td width="161">SEKRETARIS III</td>
</tr>
<tr>
<td width="202"></td>
<td width="32"></td>
<td width="132"></td>
<td width="161"></td>
</tr>
<tr>
<td width="202">Dewi Agustina</td>
<td width="32">:</td>
<td width="132">14.02.6428</td>
<td width="161">SEKRETARIS IV</td>
</tr>
<tr>
<td width="399"><strong><center>KOMISI BENDAHARA</center></strong></td>
</tr>
<tr>
<tr>
<td width="202"><strong>Eby Fauziana</strong></td>
<td width="32"><strong>:</strong></td>
<td width="132"><strong>13.11.7017</strong></td>
<td width="161"><strong>BENDAHARA I</strong></td>
</tr>
<tr>
<td width="202">Hibahtul Khasanah</td>
<td width="32">:</td>
<td width="132">13.11.7141</td>
<td width="161">BENDAHARA II</td>
</tr>
<tr>
<td width="202">Devi Sri Susanti</td>
<td width="32">:</td>
<td width="132">14.01.7218</td>
<td width="161">BENDAHARA III</td>
</tr>
<tr>
<td width="202">Bela</td>
<td width="32">:</td>
<td width="132">14.11.7366</td>
<td width="161">BENDAHARA IV</td>
</tr>

<tr>
<td width="202"></td>
<td width="32"></td>
<td width="132"></td>
<td width="161"></td>
</tr>
<tr>
<td width="399"><strong><center>KOMISI ADVOKASI</center></strong></td>
</tr>
<tr>
<td width="202"><strong>Agung Wijayanto</strong></td>
<td width="32"><strong>:</strong></td>
<td width="132"><strong>14.11.6956</strong></td>
<td width="161"><strong>KOORDINATOR</strong></td>
</tr>
<tr>
<td width="202">Damarta Putra</td>
<td width="32">:</td>
<td width="132">14.11.7287</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Nanda Putra Pratama</td>
<td width="32">:</td>
<td width="132">14.11.7582</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Hendra Wardana</td>
<td width="32">:</td>
<td width="132">14.11.3211</td>
<td width="161">Anggota</td>
</tr>

<tr>
<td width="399"><strong><center>KOMISI ASPIRASI</center></strong></td>
</tr>

<tr>
<td width="202" ><strong>Widya Alimi</strong></td>
<td width="32"><strong>:</strong></td>
<td width="132"><strong>14.11.6961</strong></td>
<td width="161"><strong>KOORDINATOR</strong></td>
</tr>
<tr>
<td width="202">Arif Rahman</td>
<td width="32">:</td>
<td width="132">14.11.7233</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Adji PURBOJATI</td>
<td width="32">:</td>
<td width="132">14.11.5977</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Firman Galih Pratama</td>
<td width="32">:</td>
<td width="132">14.11.6968</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Luthfi Apriliasni</td>
<td width="32">:</td>
<td width="132">14.11.8160</td>
<td width="161">Anggota</td>
</tr>

<tr>
<td width="399"><strong><center>KOMISI PBO</center></strong></td>
</tr>

<tr>
<td width="202"><strong>Anjar Wilujeng</strong></td>
<td width="32"><strong>:</strong></td>
<td width="132"><strong>14.11.8152</strong></td>
<td width="161"><strong>KOORDINATOR</strong></td>
</tr>
<tr>
<td width="202">Dimas Dwi Nugroho</td>
<td width="32">:</td>
<td width="132">14.11.7857</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Eka Arisman</td>
<td width="32">:</td>
<td width="132">14.11.8065</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Rina Purwanti</td>
<td width="32">:</td>
<td width="132">14.11.8458</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202">Fadhila</td>
<td width="32">:</td>
<td width="132">14.11.7739</td>
<td width="161">Anggota</td>
</tr>
<tr>
<td width="202"></td>
<td width="32"></td>
<td width="132"></td>
<td width="161"></td>
</tr>		
		
		</table>
	
		</div>
	</div>
	</div>
  
  <!-- AKHIR AGENDA -->


		</div> <!-- end of panel -->

	

			
			
			
			
			
			
			
			
			
			
                    </div>
                </div>
            </div>
			

</body>
</html>