<a href="<?php echo site_url('admin/insert');?>" class="btn btn-primary">Tambah</a>
<br /><br />

<table class="table table-striped" id="datatables">
	<thead class="thead-dark">
		<tr>
			<th>ID</th> 
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>Action</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php foreach($data_admin as $admin):?>
		<tr>
			<td><?php echo $admin['id'];?></td>
			<td><?php echo $admin['username'];?></td>
			<td><?php echo $admin['password'];?></td>
			<td><?php echo $admin['nama'];?></td>			
			<td>
				<a href="<?php echo site_url('admin/update/'.$admin['id']);?>" class="btn btn-warning">
				Ubah
				</a>
				
				<a href="<?php echo site_url('admin/delete/'.$admin['id']);?>" class="btn btn-danger">
				Hapus
				</a>

                <a href="<?php echo site_url('admin/reset/'.$admin['id']);?>" class="btn btn-secondary">
				Reset Password
				</a>
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

<br /><br />
<a href="<?php echo site_url('admin/data_export');?>" class="btn btn-info">Export Excel</a>
