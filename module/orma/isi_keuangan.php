<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_keuangan.php');
	$keuangan = new keuangan();
	$data=$keuangan->ReadKeuangan();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>
<div class="col-md-9">
<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>Orma</th>
		<th>Dana</th>
		<th>Pengeluaran</th>
		<th>Sisa</th>
	

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $a):
	$mboh = $a['dana'] - $a['pengeluaran'];  ?>
	<tr>
		<td><?php echo $a['user']?></td>
		<td><?php echo number_format($a['dana'],0,',','.')?></td>
		<td><?php echo number_format($a['pengeluaran'],0,',','.')?></td>
		<td><?php echo number_format($mboh,0,',','.') ?></td>
		<!--<td><?php echo $a['sisa']?></td> -->

<!--		<td><a href="view_detail_dokter.php?a=<?php echo $a['id_dokter'] ?>">
		detail
		</a> |
		<a href="view_update_dokter.php?a=<?php echo $a['id_dokter'] ?>">
		Edit
		</a> |
		<a href="view_delete_dokter.php?a=<?php echo $a['id_dokter'] ?>">
		Hapus
		</a>
		</td>
-->	</tr>
	<?php endforeach ?>
</tbody>
</table>
</div>