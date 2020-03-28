
<?php 
include"../Controllers/EditUserData.php"; ?>
<form action="../Controllers/EditProcess.php" method="POST" name="editFormProcess">
<table>
<tr> 
<td> User ID</td>
<td> <input type="text" name="userid" value="<?php echo $field[1]; ?>" >
<input type="hidden" name="id" value="<?php echo $field[0]; ?>" ></td>
</tr>
<tr> 
<td> Password</td>
<td> <input type="password" name="password" value="<?php echo $field[2]; ?>" ></td>
</tr>
<tr> 
<td> </td>
<td> <input type="submit" name="simpan" onClick = "submitCreated('editFormProcess')" value="Simpan"></td>
</tr>
</table>
</form>