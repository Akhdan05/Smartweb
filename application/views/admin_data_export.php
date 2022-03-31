<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=export_data_admin.xls" );
?>

<table border="1">
	<thead>
		<tr>
			<th>ID</th> 
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_admin as $admin):?>
		<tr>
			<td><?php echo $admin['id'];?></td>
			<td><?php echo $admin['username'];?></td>
			<td><?php echo $admin['password'];?></td>
			<td><?php echo $admin['nama'];?></td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table> 