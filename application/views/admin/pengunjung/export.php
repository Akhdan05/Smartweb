<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=export_data_pengunjung.xls" );
?>

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<!-- <td>Instansi</td> -->
			<td>Email pengunjung</td>
			<td>No. Telepon</td>
		</tr>
	</thead> 
	<tbody>
		<!--looping data pengunjung-->
		<?php foreach($data_pengunjung as $pengunjung):?>

		<!--cetak data per baris-->
		<tr>
			<td><?php echo $pengunjung['id'];?></td>
			<td><?php echo $pengunjung['nama'];?></td>
			<!-- <td><?php echo $pengunjung['instansi'];?></td> -->
			<td><?php echo $pengunjung['email_pengunjung'];?></td>
			<td><?php echo $pengunjung['no_telp'];?></td>
		</tr>
		<?php endforeach?>	 	
	</tbody>
</table> 