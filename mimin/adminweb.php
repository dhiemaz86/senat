<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />

<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'Y-F-d',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
            $('#tanggala').Zebra_DatePicker({
            format: 'Y-F-d',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
<?php
include "lib/config.php";     			
include "lib/koneksi.php";
ob_start();
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
} else { 
	$user = $_SESSION['username'];
    $sqlUser = "select * from admin where user='".$_SESSION['username']."'";

 	$kuerisqluser= mysqli_query($koneksi,"select * from admin where user='".$_SESSION['username']."'");
 
 	$user = $_SESSION['username'];

 	  


	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Administrator Senat Mahasiswa</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- jvectormap -->
		<link rel="stylesheet" href="asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">

			<header class="main-header">

				<!-- Logo -->
				<a href="index2.html" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels --> <span class="logo-mini"><b>A</b>LT</span> <!-- logo for regular state and mobile devices --> <span class="logo-lg"><b>Senat</b> Mahasiswa</span> </a>

				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- Messages: style can be found in dropdown.less-->

							<!-- Notifications: style can be found in dropdown.less -->

							<!-- Tasks: style can be found in dropdown.less -->
							<li>
							<a href="#"><i class="fa fa-globe"></i></a>

							</li>
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="asset/dist/img/amikom.png" class="user-image" alt="User Image"> <span class="hidden-xs"><?php 	  echo "<text class='text-uppercase'> $user </text>"; ?></span> </a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="asset/dist/img/amikom.png" class="img-circle" alt="User Image">
										<p>
											Alexander Pierce - Web Developer
											<small>Member since Nov. 2012</small>
										</p>
									</li>
									<!-- Menu Body -->
									<li class="user-body">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="admin/logout.php" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->

						</ul>
					</div>

				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="asset/dist/img/amikom.png" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p>
								<?php 	  echo "<text class='text-uppercase'> $user </text>"; ?>
							</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat">
									<i class="fa fa-search"></i>
								</button> </span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">
							MAIN NAVIGATION
						</li>

						<li>
							<a href="adminweb.php?module=home"> <i class="fa fa-home"></i> <span>Home</span> </a>
						</li>
					
						<li>
							<a href="adminweb.php?module=berita"> <i class="fa fa-male"></i> <span>Berita</span> </a>
						</li>


						<li>
							<a href="adminweb.php?module=proposal_masuk"> <i class="fa fa-th"></i> <span>Proposal Masuk</span> </a>
						</li>

						<li>
							<a href="adminweb.php?module=lpj_masuk"> <i class="fa fa-th"></i> <span>LPJ Masuk</span> </a>
						</li>
						<li>
							<a href="adminweb.php?module=keuangan"> <i class="fa fa-shopping-cart"></i> <span>Keuangan</span> </a>
						</li>

						<li>
							<a href="adminweb.php?module=keadministrasian"> <i class="fa fa-th"></i> <span>Keadministrasian</span> </a>
						</li>

						
           				 <li>
            				<a href="adminweb.php?module=data_proposal"> <i class="fa fa-th"></i> <span>Data Proposal</span> </a>
         	 			</li>
						<li>
							<a href="adminweb.php?module=data_lpj"> <i class="fa fa-th"></i> <span>Data LPJ</span> </a>
						</li>
						
						<li>
							<a href="adminweb.php?module=kontak"> <i class="fa fa-male"></i> <span>Kontak</span> </a>
						</li>

						<li>
							<a href="logout.php"> <i class="fa fa-power-off"></i> <span>Logout</span> </a>
						</li>



					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			<?php

            if ($_GET['module'] == 'home') {
                include "module/home/index.php";

			} elseif ($_GET['module'] == 'proposal_masuk') {
                include "module/proposal_masuk/isi_proposal_masuk.php";
            } elseif ($_GET['module'] == 'edit_proposal') {
                include "module/proposal_masuk/edit_proposal.php";

            } elseif ($_GET['module'] == 'lpj_masuk') {
                include "module/lpj_masuk/isi_lpj_masuk.php";
            } elseif ($_GET['module'] == 'edit_lpj') {
                include "module/lpj_masuk/edit_lpj.php";
            } elseif ($_GET['module'] == 'keuangan') {
                include "module/keuangan/isi_keuangan.php";
            } elseif ($_GET['module'] == 'edit_keuangan') {
                include "module/keuangan/edit_keuangan.php";
            } elseif ($_GET['module'] == 'berita') {
                include "module/berita/isi_berita.php";
            } elseif ($_GET['module'] == 'tambah_berita') {
                include "module/berita/tambah_berita.php";   
            } elseif ($_GET['module'] == 'proses_berita') {
                include "module/berita/proses_berita.php";       
             } elseif ($_GET['module'] == 'hapus_berita') {
                include "module/berita/hapus_berita.php";       
            } elseif ($_GET['module'] == 'edit_berita') {
                include "module/berita/edit_berita.php";       
            } elseif ($_GET['module'] == 'data_proposal') {
                include "module/data_proposal/isi_data_proposal.php";
            

            } elseif ($_GET['module'] == 'data_lpj') {
                include "module/data_lpj/isi_data_lpj.php";       
            } elseif ($_GET['module'] == 'keadministrasian') {
                include "module/keadministrasian/isi_keadministrasian.php";  
            } elseif ($_GET['module'] == 'resetchat') {
                include "../module/home/chat/reset.php";

            } elseif ($_GET['module'] == 'kontak') {
                include "module/kontak/isi_kontak.php";     
            } elseif ($_GET['module'] == 'tambah_kontak') {
                include "module/kontak/tambah_kontak.php";     

            } elseif ($_GET['module'] == 'hapus_user') {
                include "module/marketing_sales/aksi_hapus.php";
            }

            else {
            	 include "module/home/index.php";
            }
			?>

			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> 2.3.0
				</div>
				<strong>Copyright &copy; 2017 <a href="ceraproduction.com">Cera Production</a>.</strong> All rights reserved.
			</footer>

			<!-- Control Sidebar -->

			<!-- Add the sidebar's background. This div must be placed
			immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>

		</div><!-- ./wrapper -->

		<!-- jQuery 2.1.4 -->
		<script src="asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="asset/plugins/fastclick/fastclick.min.js"></script>
		<!-- AdminLTE App -->
		<script src="asset/dist/js/app.min.js"></script>
		<!-- Sparkline -->
		<script src="asset/plugins/sparkline/jquery.sparkline.min.js"></script>
		<!-- jvectormap -->
		<script src="asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<!-- SlimScroll 1.3.0 -->
		<script src="asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- ChartJS 1.0.1 -->
		<script src="asset/plugins/chartjs/Chart.min.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="asset/dist/js/pages/dashboard2.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="asset/dist/js/demo.js"></script>

		<script type="text/javascript">
			
			function editPrice(a,b,c) {
				console.log({ a,b,c });
			}

		</script>

		<script type="text/javascript">

		  $('#newquotation').modal({
		  	backdrop:'static',
		    keyboard: false
		  });
		  $('#newquotation').modal('hide')
		  <?php
		    if(isset($_SESSION['formData'])){
		    	if(array_key_exists('quotationNo', $_SESSION['formData']) || (trim($_SESSION['formData']['quotationNo']) !== '') ){
		      ?>
		      
		      	$('#newquotation').modal('show');

		      <?php
		  		}
		    }
		  ?>

		  /* get price and wty from select */
		  function setPriceQtyQuotation(el,a){
		  	console.log(a);

		  	$.ajax({
		  		url : 'module/sales/aksi_sales.php',
		  		type : 'post',
		  		data : { aksi_getPriceQty : 'adajah', pp_id : a },
		  		success : function(data){
		  			console.log(data);
		  			// set value qty
		  			var td = el.parent();
		  			var tr = td.parent();

		  			tr.find('.qty').val(data.pp_qty);
		  			tr.find('.price').val(data.pp_price);
		  		}

		  	});
		  }
		</script>

	      <script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	      <script type="text/javascript">
	      

	        tinymce.init({
	          selector: '#artikel',
	          height: 500,
	          theme: 'modern',
	          plugins: [
	            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
	            'searchreplace wordcount visualblocks visualchars code fullscreen',
	            'insertdatetime media nonbreaking save table contextmenu directionality',
	            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
	          ],
	          toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	          toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
	          image_advtab: true
	         });


	      </script>

	</body>
</html>
<?php } ?>
