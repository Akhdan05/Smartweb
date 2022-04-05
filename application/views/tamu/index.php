<br /><br />
<table class="table table-striped" id="datatables">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email pengunjung</th>
			<th>No. Telepon</th>
		</tr>
	</thead> 
	<tbody>
		<?php foreach($data_pengunjung as $pengunjung):?>

		<tr> 
			<td><?php echo $pengunjung['id'];?></td>
			<td><?php echo $pengunjung['nama'];?></td>
			<td><?php echo $pengunjung['email_pengunjung'];?></td>
			<td><?php echo $pengunjung['no_telp'];?></td>
		</tr> 
		<?php endforeach?>		
	</tbody>
</table>

<br /><br />