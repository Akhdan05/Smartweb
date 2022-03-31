<form method="post" action="<?php echo site_url('admin/reset_submit/'.$data_admin_single_data['id']);?>">
	<table class="table table-striped">
        <tr>
			<td>Password Baru</td>
			<td><input type="text" name="password" value="" required="" class="form-control"><?php echo form_error('password', '<small class="text-danger">', '</small>') ;?></td>
		</tr>
        <tr>
			<td>Ulangi Password Baru</td>
			<td><input type="text" name="confirm_password" value="" required="" class="form-control"><?php echo form_error('confirm_password', '<small class="text-danger">', '</small>') ;?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr> 
	</table> 
</form> 