<?php
include "lib/config.php";
include "lib/koneksi.php";

// session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else { ?>
	 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>




        


      <section class="content">
          <!-- Info boxes -->
     <center> <h3 class="box-title">Proposal</h3> </center>
               
          <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Belum Dibuka</span>
                  <?php
                  $kueriUNREAD= mysqli_query($koneksi, "select count(status) as jumlah FROM kirim_proposal WHERE status=0");
                  while($kat=mysqli_fetch_array($kueriUNREAD)){
                  ?>
                  <span class="info-box-number"><?php echo $kat['jumlah']; ?></span>
                  <?php } ?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->


             <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Revisi</span>
                  <?php
                  $kueriUNREAD= mysqli_query($koneksi, "select count(status) as jumlah FROM kirim_proposal WHERE status=2");
                  while($kat=mysqli_fetch_array($kueriUNREAD)){
                  ?>
                  <span class="info-box-number"><?php echo $kat['jumlah']; ?></span>
                  <?php } ?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
             <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Benar</span>
                  <?php
                  $kueriUNREAD= mysqli_query($koneksi, "select count(status) as jumlah FROM kirim_proposal WHERE status=3");
                  while($kat=mysqli_fetch_array($kueriUNREAD)){
                  ?>
                  <span class="info-box-number"><?php echo $kat['jumlah']; ?></span>
                  <?php } ?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

        </div>
     
        <center> <h3 class="box-title">LPJ</h3> </center>
               
          <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Belum Dibuka</span>
                  <?php
                  $kueriUNREAD= mysqli_query($koneksi, "select count(status) as jumlah FROM kirim_lpj WHERE status=0");
                  while($kat=mysqli_fetch_array($kueriUNREAD)){
                  ?>
                  <span class="info-box-number"><?php echo $kat['jumlah']; ?></span>
                  <?php } ?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->


             <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Revisi</span>
                  <?php
                  $kueriUNREAD= mysqli_query($koneksi, "select count(status) as jumlah FROM kirim_lpj WHERE status=2");
                  while($kat=mysqli_fetch_array($kueriUNREAD)){
                  ?>
                  <span class="info-box-number"><?php echo $kat['jumlah']; ?></span>
                  <?php } ?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
             <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Benar</span>
                  <?php
                  $kueriUNREAD= mysqli_query($koneksi, "select count(status) as jumlah FROM kirim_lpj WHERE status=3");
                  while($kat=mysqli_fetch_array($kueriUNREAD)){
                  ?>
                  <span class="info-box-number"><?php echo $kat['jumlah']; ?></span>
                  <?php } ?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

        </div>
      </section>


          <div class="row">
            <div class="col-md-12">
              <div class="box">       
              <center> <h3 class="box-title">Suara Aspirasi</h3> </center>
                <div class="box-header with-border">
          
                  <div class="panel center">
                    
                    <a  href="adminweb.php?module=resetchat"><button class="btn btn-danger pull-right">Reset</button></a>
                    
                    <?php include("../module/home/chat/layar.php"); ?>

                        </div>
                        </div>


                

    
            <div class="col-md-12">
                 <div class="panel">   

  <center>
 <div class="col-md-4"><a href="orma.php?module=profil_orma"><img src="../data/icon/dokter.png" height="100px"></a><br>
 <a href="orma.php?module=profil_orma">USER ORMA</a></div>
 <div class="col-md-4"><a href="orma.php?module=kirim_proposal"><img src="../data/icon/rinap.png" height="100px"></a><br>
 <a href="orma.php?module=profil_orma">ADMIN</a></div>
 <div class="col-md-4"><a href="orma.php?module=kirim_lpj"><img src="../data/icon/rjalan.png" height="100px"></a><br>
 <a href="orma.php?module=profil_orma">SENAT MAHASISWA</a></div>
  </center>           


    <!--          
<center>
     <table class="center">
    <tr height="130px">
    <td><a href="orma.php?module=profil_orma"><img src="../data/icon/dokter.png" height="100px"></a></td>
    <td><a href="orma.php?module=kirim_proposal"><img src="../data/icon/rinap.png" height="100px"></a></td>
    <td><a href="orma.php?module=kirim_lpj"><img src="../data/icon/rjalan.png" height="100px"></a></td>
  </tr>
  <tr height="20px">
    <td><a href="orma.php?module=profil_orma">PROFIL</a></td>
    <td><a href="orma.php?module=kirim_proposal">KIRIM PROPOSAL</a></td>
    <td><a href="orma.php?module=kirim_lpj">KIRIM LPJ</a></td>
  </tr>
  </table> 
</center>

--> 
  </div>              
  </div>              
  </div>              
  </div>              
          

            
             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  <?php } ?>
