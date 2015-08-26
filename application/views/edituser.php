<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User</title>
</head>
<body>
	<h1>Edit User</h1>

	<?php 
		echo form_open('manageuser/edit/'.$this->uri->segment(3));
	?>
	<table>
		<tr>
			<td>Facebook ID : </td>
			<td><p><?php echo $rs['fb_id']; ?></p> <input type="hidden" name="fbid" value="<?php echo $rs['fb_id']; ?>" ></td>
		</tr>
		<tr>
			<td>Facebook Name</td>
			<td><input type="text" name="fbname" value="<?php echo $rs['fb_name']; ?>"></td>
		</tr>
		<tr>
			<td>Tel</td>
			<td><input type="text" name="sex" value="<?php echo $rs['sex']; ?>"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="btsave" value="Save"> &nbsp <?php echo anchor("manageuser","Cancle"); ?></td>
		</tr>
	</table>

	<?php 
		echo form_close();
	?>


</body>
</html>