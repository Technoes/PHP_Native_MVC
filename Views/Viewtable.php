<table border="2">
					<tr> <!-- tr adalah Table Row -->
						<th>NO</th> <!-- Th adalah Table Header -->
						<th>User ID</th>
						<th>Password</th>
						<th>Status</th>
						<th>Date Update</th>
						<th>OPSI</th>
					</tr>
			<?php
			include"../Controllers/TampilDataUser.php";
			$data = new Tampildata();
			
			$no = 1;
			foreach($data->tampil() as $field){	
			?>
			<tr>
							<td><?php echo $no++; ?></td> <!-- td tabel detail -->
							<td><?php echo $field['f_user_ID']; ?></td>
							<td><?php echo $field['f_password']; ?></td>
							<td><?php if ($field['f_isActive'] == '0')
							{echo "Active"; } 
							else { echo "Not Active" ;} ?></td>
							<td><?php echo $field['f_date_update']; ?></td>
							<td> 
							<!--<a href="EditDataUser.php?id=<?php //echo //$field['f_id']; ?>"> edit </a>-->
							<form action="../views/index.php?method=EditDataUser" method="POST" name = "editform"> 
								<input type = "hidden" name="id" value="<?php echo $field['f_id']; ?>">
								<input type = "submit" value="Edit" onClick = "submitCreated('editform')" name="edit">
							</form>
							<form action="../Controllers/Hapus.php" onsubmit = "return submitHapus();" method="POST">
								<input type = "hidden" name="id" value="<?php echo $field['f_id']; ?>">
								<input type = "submit" value="Hapus" name="hapus">
							</form>
							</td>
						</tr>
			<?php }?>
</table>