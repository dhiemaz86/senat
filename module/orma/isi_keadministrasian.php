<div class="col-md-9">
<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_administrasi.php');

	$kirim_proposal = new administrasi();
	$data=$kirim_proposal->readAllAdministrasi();

	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>

<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>Judul</th>
		<th>Deskripsi</th>
		<th>File</th>
	

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $a): 
	$id   =  "".$a['id_keadministrasian']." ";
	$md5id = md5($id);
	$token = md5(md5($id).md5('kata acak'));
	

	

		?>

	<tr>
		<td><?php echo $a['judul']?></td>
		<td><?php echo $a['deskripsi']?></td>
		<td><?php echo $a['upload']?></td>
		<td><a href="ARSIP/LPJ/lpj_masuk/<?php echo $a['user'] ?>/<?php echo $a['lpj'] ?>">
		Download
		</a>
		</td>
	</tr>
	<?php endforeach ?>
</tbody>
</table>
</div>