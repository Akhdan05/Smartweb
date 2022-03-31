<form method="post" action="<?php echo site_url('pengunjung/insert_submit/');?>">
	<table class="table table-striped">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="" required="" class="form-control"></td>
		</tr>
		<!-- <tr>
			<td>Instansi</td>
			<td><input type="text" name="instansi" value="" required="" class="form-control"><?php echo ('<small class="text-info">Jika tidak memiliki instansi maka di tulis (-)</small>') ;?></td>
		</tr> -->
		<tr>
			<td>Email pengunjung</td>
			<td><input type="email" name="email_pengunjung" value="" required="" class="form-control"></td>
		</tr>
		<!-- <tr>
			<td>Gender</td>
    		<td><input type="radio" name="gender" value="pria"> Pria
    			<input type="radio" name="gender" value="wanita"> Wanita</td>
		</tr> -->
		<tr>
			<td>No. Telepon</td>
			<td><input type="text" name="no_telp" value="" required="" class="form-control"></td>
		</tr>
		<tr> 
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table> 
</form> 
