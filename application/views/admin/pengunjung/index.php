<br /><br />

<table class="table table-striped" id="datatables">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<!-- <th>Instansi</th> -->
			<th>Email pengunjung</th>
			<th>No. Telepon</th>
			<th>Action</th>
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
			<td>
				<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('pengunjung/update/'.$pengunjung['id']);?>" class="btn btn-warning">
				Ubah
				</a>

				<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('pengunjung/delete/'.$pengunjung['id']);?>" onClick="return confirm('Apakah anda yakin?')" class="btn btn-danger">
				Hapus
				</a>
				
			</td>
		</tr> 
		<?php endforeach?>		
	</tbody>
</table>

<br /><br />
<a href="<?php echo site_url('pengunjung/data_export');?>" class="btn btn-info">Export Excel</a>
