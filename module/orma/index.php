<?php if (!empty($_SESSION['usernameku']) && !empty($_SESSION['passwordku'])) { ?>



<?php
include('koneksi.php');

?>



<?php //include('ndasfoto.php'); ?>
            
    
            
    <!--         <div class="hero-unit-table" style="background-color:red;">
 -->    
                  <!--   image slider        -->        


         
                          
                    
                           

                              <div class="col-md-9" style="background-color: none">
                  <div>
  <!-- AWAL MENU DASHBOARD ORMA -->     


<head>
	<link rel="stylesheet" type="text/css" href="data/icon/home.css">
</head>

<table align="center" width="100%" border="0px" valign="middle">
	<tr height="50px">
		<th colspan="3"> Dashboard </th>	</tr>
	<tr>
		
	</tr>
	<tr height="130px">
		<td><a href="orma.php?module=profil_orma"><img src="data/icon/dokter.png" height="100px"></a></td>
		<td><a href="orma.php?module=kirim_proposal"><img src="data/icon/rinap.png" height="100px"></a></td>
		<td><a href="orma.php?module=kirim_lpj"><img src="data/icon/rjalan.png" height="100px"></a></td>
	</tr>
	<tr height="20px">
		<td><a href="orma.php?module=profil_orma">PROFIL</a></td>
		<td><a href="orma.php?module=kirim_proposal">KIRIM PROPOSAL</a></td>
		<td><a href="orma.php?module=kirim_lpj">KIRIM LPJ</a></td>
	</tr>
	<th height="40px" style="background-color: #ececec;" colspan=3></th>

	<tr height="130px">
		<td><a href="orma.php?module=data_proposal"><img src="data/icon/pelayanan.png" height="100px"></a></td>
		<td><a href="orma.php?module=keuangan"><img src="data/icon/kontak.png" height="100px"></a></td>
		<td><a href="orma.php?module=data_lpj"><img src="data/icon/about.png" height="100px"></a></td>
	</tr>
	<tr height="20px">
		<td><a href="orma.php?module=data_proposal">DATA PROPOSAL</a></td>
		<td><a href="orma.php?module=keuangan">KEUANGAN ORMA</a></td>
		<td><a href="orma.php?module=data_lpj">DATA LPJ</a></td>
	</tr>

	<th height="40px" style="background-color: #ececec;" colspan=3></th>

	<tr height="130px">
		<td><a href="orma.php?module=keadministrasian"><img src="data/icon/pelayanan.png" height="100px"></a></td>
		<td><a href="orma.php?module=kontak"><img src="data/icon/kontak.png" height="100px"></a></td>
		<td><a href="orma.php?module=logout"><img src="data/icon/about.png" height="100px"></a></td>
	</tr>
	<tr height="20px">
		<td><a href="orma.php?module=keadministrasian">ADMINISTRASI</a></td>
		<td><a href="orma.php?module=kontak">KONTAK SEMA</a></td>
		<td><a href="orma.php?module=logout">KELUAR</a></td>
	</tr>



	<th height="40px" style="background-color: #ececec;" colspan=3></th>
	<tr height="50px" style="background-color: #ececec;">
		
		
	<th height="100px" style="background-color: #ececec;" colspan=3></th>
	</tr>
</table>
                  
  <!-- AKHIR MENU DASHBOARD ORMA -->     

                  </div>
                              </div>
  <!-- Bagian KANAN-->     

             
                

    
          
            


<?php

}else{
  echo "<script language='javascript'>alert('Silakan Login Terlebih Dahulu')</script>";
 echo"<script language='javascript'>window.location = 'home.php?module=home'</script>";
}
?>