
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
		
                <ul class="media-list" style="background-color: #fff;">
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
  <div class="col-md-8">
  
<!-- coba -->

<div style="background-color: #fff;" class="panel">
<div class="section-title panel"><center>Profile</center></div>

	<center><img src="data/logo/logoweb.png"></center>
<h3>Profil SEMA</h3><p></p>
<div align="justify">
Senat Mahasiswa yang selanjutnya disingkat SEMA, merupakan organisasi tertinggi di dalam struktur organisasi Lembaga Mahasiswa (LM) STMIK Amikom Yogyakarta. 
<p>
Senat Mahasiswa STMIK Amikom Yogyakarta didirikan pada tanggal 19 Desember 1998. SEMA adalah Lembaga Legislatif yang anggotanya terdiri dari  Senator Kelas (2 orang perwakilan kelas yang masih aktif) ataupun perwakilan dari Organisasi Mahasiswa STMIK Amikom Yogyakarta. 
</p>
<p>
Sema sendiri di ketuai oleh ketua umum dengan didampingi sekretaris umum dan di bantu oleh 5 komisi yaitu kesekretariatan, keuangan, aspirasi, pemberdaya organisasi (PBO), dan advokasi. 
</p>
<p>
Fungsi utama dari SEMA sendiri adalah Controling, Legalitas, dan Bageting. Yang dimaksud dengan controling adalah SEMA berfungsi untuk mengontrol seluruh kegiatan yang dilaksanakan oleh organisasi mahasiswa yang berada di STMIK Amikom Yogyakarta. Sedangkan Legalitas, SEMA bertindak sebagai badan legislatif yang melegalkan seluruh kegiatan organisasi mahasiswa yang akan diadakan oleh organisasi tersebut sebelum disetujui oleh Pembantu Ketua III STMIK Amikom Yogyakarta. Yang terakhir adalah Bageting, SEMA mempunyai fungsi untuk mengatur keuangan dari setiap organisasi mahasiswa yang ada di STMIK Amikom Yogyakarta.
</p>
<p>
Selain itu, SEMA juga mempunyai fungsi sebagai penampung aspirasi seluruh mahasiswa STMIK Amikom Yogyakarta yang mana semua aspirasi yang masuk akan dipilah dan di musyawarahkan untuk diajukan ke pihak Lembaga

</p>
</div>
		
</div>
  </div> <!-- end of col-md-12 -->



		</div> <!-- end of panel -->

	

			
			
			
			
			
			
			
			
			
			
                    </div>
                </div>
            </div>
			

</body>
</html>