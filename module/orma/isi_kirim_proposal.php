<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_kirim_proposal.php');

	$kirim_proposal = new kirim_proposal();
	$data=$kirim_proposal->baca();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>
<!--<a href="view_add_kirimproposal.php">Kirim Proposal</a><br> -->
 <div class="col-md-9">

                <div class="box-footer">
                  <a href="orma.php?module=tambah_proposal"><button class="btn btn-primary">Tambah Proposal</button></a>
                 </div>

                <div class="box-body table-responsive no-padding">

<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>Orma</th>
		<th>No Surat</th>
		<th>Judul</th>
		<th>proposal</th>
		<th>Deskripsi</th>
		<th>Masuk</th>
		<th>Status</th>
	

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $a): 
	$id   =  "".$a['id_proposal']." ";
	$md5id = md5($id);
	$token = md5(md5($id).md5('kata acak'));
	

	

		?>

	<tr>
		<td><?php echo $a['user']?></td>
		<td><?php echo $a['no_surat']?></td>
		<td><?php echo $a['judul']?></td>
		<td><?php echo $a['proposal']?></td>
		<td><?php echo $a['deskripsi']?></td>
		<td><?php echo $a['tgl_input']?></td>
		<td><?php echo $a['status']?></td>
		<td>
			<!-- Example single danger button -->
  <div class="btn-group dropleft">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Opsi
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
<left>
    <a class="dropdown-item" href="mimin/ARSIP/PROPOSAL/proposal_masuk/<?php echo $a['user'] ?>/<?php echo $a['proposal'] ?>">Download</a><br>
    <a class="dropdown-item" href="orma.php?module=edit_kirim_proposal&a=<?php echo $id?>&token=<?php echo $token; ?>">Edit</a><br>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="orma.php?module=hapus_proposal&a=<?php echo $id?>&token=<?php echo $token; ?>">Hapus</a>
</left>  
  </div>
</div>
		</td>
	</tr>
	<?php endforeach ?>
</tbody>
</table>
</div>
 </div><!-- /.box-body-->

                <div class="box-footer">
                       </div><!-- /.box-footer -->
      