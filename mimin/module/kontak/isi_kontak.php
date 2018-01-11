<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_kontak.php');
	$data_kontak = new kontak();
	$data=$data_kontak->readAllkontak();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Kontak
            <small>Senat</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Kontak Senat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kontak</h3>

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

           <div class="box-header">
       <a href="adminweb.php?module=tambah_kontak"><button class="btn btn-primary">Tambah Kontak</button></a>
       <a href="adminweb.php?module=print_kontak"><button class="btn btn-primary">Print Kontak</button></a>
                 </div><!-- /.box-footer -->

<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Jabatan</th>
		<th>Kontak</th>
	

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $a): ?>
	<tr>
		<td><?php echo $a['nama']?></td>
		<td><?php echo $a['nim']?></td>
		<td><?php echo $a['jabatan']?></td>
		<td><?php echo $a['kontak']?></td>
		<td>
			<div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="adminweb.php?module=edit_kontak">Edit</a></li>              
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Delete</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                
                
                
            </div>

		<!-- <a href="ARSIP/PROPOSAL/proposal_masuk/<?php echo $a['user'] ?>/<?php echo $a['proposal'] ?>">
		Download
		</a> |
		<a href="view_edit_kirimproposal.php?a=<?php echo $id?>&token=<?php echo $token; ?>">
		Edit
		</a> |
		<a href="view_delete_dokter.php?a=<?php echo $a['id_dokter'] ?>">
		Hapus
		</a>
		-->
		</td>
	</tr>
	<?php endforeach ?>
</tbody>
</table> 
</div><!-- /.box-body-->

                <div class="box-footer">
                       </div><!-- /.box-footer -->
              </div><!-- /.box -->

            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->