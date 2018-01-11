<div class="col-md-9">
<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_data_proposal.php');
	$data_proposal = new data_proposal();
	$data=$data_proposal->baca();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>

  <div class="box-footer">
                  <a href="orma.php?module=tambah_data_proposal"><button class="btn btn-primary">Tambah Data Proposal</button></a>
                 </div>
                 <br>
<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>Orma</th>
		<th>No Surat</th>
		<th>Judul</th>
		<th>proposal</th>
		<th>Deskripsi</th>
		<th>Masuk</th>
	

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $a):
	$id   =  "".$a['id_data_proposal']." ";
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
		<td>
				<div class="btn-group dropleft">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="">
    Opsi
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
<left>
    <a class="dropdown-item" href="mimin/ARSIP/PROPOSAL/data_proposal/<?php echo $a['user'] ?>/<?php echo $a['proposal'] ?>">Download</a><br>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="orma.php?module=hapus_dataproposal&a=<?php echo $id?>&token=<?php echo $token; ?>">Hapus</a>
</left>  
  </div>
</div>


		</td>
	</tr>
	<?php endforeach ?>
</tbody>
</table>

</div>
