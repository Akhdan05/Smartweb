<form method="post" action="<?php echo site_url('admin/insert_submit/');?>">
	<table class="table table-striped">
		<tr> 
			<td>Username</td>
			<td><input type="text" name="username" value="" required="" class="form-control"><?php echo form_error('username', '<small class="text-danger">', '</small>') ;?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="" required="" class="form-control"><?php echo form_error('password', '<small class="text-danger">', '</small>') ;?></td>
		</tr>
		<tr>
			<td>Nama</td> 
			<td><input type="text" name="nama" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table> 
</form>