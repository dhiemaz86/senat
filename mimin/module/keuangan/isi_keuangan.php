<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_keuangan.php');
	$keuangan = new keuangan();
	$data=$keuangan->ReadAllkeuangan();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
         <h1>Data
           <small>Keuangan</small>
         </h1>
         <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li class="active">Keuangan</li>
         </ol>
       </section>


       <!-- Main content -->
       <section class="content">
         <!-- Info boxes -->
           <div class="row">
           <div class="col-xs-12">

           

             <div class="box">
           <div class="box-header">
       <a href="adminweb.php?module=tambah_kwitansi"><button class="btn btn-primary">Tambah Keuangan</button></a>
       <a href="adminweb.php?module=print_kwitansi"><button class="btn btn-primary">Print Keuangan</button></a>
                 </div><!-- /.box-footer -->

                 
               <div class="box-header">

                 <h3 class="box-title">Data Keuangan Orma</h3>

         <div class="box-tools">

                   <div class="input-group" style="width: 150px;">
                     <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                     <div class="input-group-btn">
                       <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                     </div>

                   </div>
                 </div>
               </div><!-- /.box-header -->
               <div class="box-body no-padding">
<table id="table" class="table table-striped  table-bordered" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>Orma</th>
		<th>Dana</th>
		<th>Pengeluaran</th>
		<th>Sisa</th>
		<th>Action</th>
	

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $a):
  $id = $a['id_keuangan'];
  $md5id = md5($id);
  $token = md5(md5($id).md5('kata acak'));

	$mboh = $a['dana'] - $a['pengeluaran'];  
	$format = number_format($mboh,0,',','.');

	?>
	<tr>
		<td><?php echo $a['user']?></td>
		<td><?php echo number_format($a['dana'],0,',','.')?></td>
		<td><?php echo number_format($a['pengeluaran'],0,',','.')?></td>
		<td><?php echo $format ?></td>		
		<!--<td><?php echo $a['sisa']?></td> -->

		<td>
    <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="adminweb.php?module=edit_keuangan&a=<?php echo $id?>&token=<?php echo $token; ?>">Edit</a></li>    
                    <li role="separator" class="divider"></li>
                    <li><a href="module/sales/aksi_hapus.php?sales_id=<?php echo $pro['sales_id'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                
                
                
            </div>
		</td>
	</tr>
	<?php endforeach ?>
</tbody>
</table>
</div><!-- /.box-body -->

            
             </div><!-- /.box -->

           </div>
         </div>
       </section><!-- /.content -->
     </div><!-- /.content-wrapper -->