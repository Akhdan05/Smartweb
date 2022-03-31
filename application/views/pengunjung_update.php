<!--$data_pengunjung_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('pengunjung/update_submit/'.$data_pengunjung_single['id']);?>">
	<table class="table table-striped">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $data_pengunjung_single['nama'];?>" required="" class="form-control"></td>
		</tr> 
		<!-- <tr>
			<td>Instansi</td>
			<td><input type="text" name="instansi" value="<?php echo $data_pengunjung_single['instansi'];?>" required="" class="form-control"></td>
		</tr> -->
		<tr>
			<td>Email pengunjung</td>
			<td><input type="email" name="email_pengunjung" value="<?php echo $data_pengunjung_single['email_pengunjung'];?>" required="" class="form-control"></td>
		</tr>
		<!-- <tr>
			<td>Gender</td>
			<?php 
				$checked1 = $data_pengunjung_single['gender'] == "pria" ? "checked=\"\"" : "";
				$checked2 = $data_pengunjung_single['gender'] == "wanita" ? "checked=\"\"" : "";
			?>
    		<td><input type="radio" name="gender" value="pria" <?= $checked1; ?>> Pria
    			<input type="radio" name="gender" value="wanita" <?= $checked2; ?>> Wanita</td>
		</tr>  -->
		<tr>
			<td>No. Telepon</td>
			<td><input type="text" name="no_telp" value="<?php echo $data_pengunjung_single['no_telp'];?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table> 
</form> 
