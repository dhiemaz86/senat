<div class="col-md-12" style="background-color: #c5c8cc;">
<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_kontak.php');
	$data_kontak = new kontak();
	$data=$data_kontak->readAllkontak();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>


<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0" style="background-color: #c5c8cc;">
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
	</tr>
	<?php endforeach ?>
</tbody>
</table>
</div></div>