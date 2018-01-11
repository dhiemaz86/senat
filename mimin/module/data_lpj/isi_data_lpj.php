<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_data_lpj.php');

	$data_lpj = new data_lpj();
	$data=$data_lpj->readAllData_lpj();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>
<!--<a href="view_add_kirimLPJ.php">Kirim LPJ</a><br> -->
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data
            <small>LPJ</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Data LPJ</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">LPJ</h3>

				  <div class="box-tools">

                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>

                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>Orma</th>
		<th>No Surat</th>
		<th>Judul</th>
		<th>LPJ</th>
		<th>Deskripsi</th>
		<th>Masuk</th>
	

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $a): 
	$id   =  "".$a['id_data_lpj']." ";
	$md5id = md5($id);
	$token = md5(md5($id).md5('kata acak'));
	

	

		?>

	<tr>
		<td><?php echo $a['user']?></td>
		<td><?php echo $a['no_surat']?></td>
		<td><?php echo $a['judul']?></td>
		<td><?php echo $a['lpj']?></td>
		<td><?php echo $a['deskripsi']?></td>
		<td><?php echo $a['tgl_input']?></td>
		<td>
		<div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="ARSIP/PROPOSAL/proposal_masuk/<?php echo $a['user'] ?>/<?php echo $a['proposal'] ?>" data-toggle="modal" data-target="#modal<?php echo $pro['sales_id'];?>">Download</a></li>
                    <li><a href="adminweb.php?module=edit_proposal">Edit</a></li>              
                    <li><a href="javascript::void(0)" data-toggle="modal" data-target="#invoice<?php echo $pro['sales_id'];?>">Set As Invoice</a></li>
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
 </div><!-- /.box-body-->

                <div class="box-footer">
                  <a href="adminweb.php?module=tambah_user"><button class="btn btn-primary">Tambah User</button></a>
                  <a href="adminweb.php?module=print_user"><button class="btn btn-primary">Print User</button></a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->

            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->