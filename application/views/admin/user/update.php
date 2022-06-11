<form method="post" action="<?php echo site_url('admin/update_submit/'.$data_admin_single_data['id']);?>">
	<table class="table table-striped">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo $data_admin_single_data['username'];?>" required="" class="form-control"><?php echo form_error('username', '<small class="text-danger">', '</small>') ;?></td>
		</tr>
        <tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $data_admin_single_data['nama'];?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>   