<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Owner</title>
</head>
<body>
	<h1>Edit Owner</h1>

	<?php 
		echo form_open('manageowner/edit/'.$this->uri->segment(3));
	?>
	<table>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $rs['owner_id']; ?>" ></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><input type="text" name="email" value="<?php echo $rs['owner_email']; ?>" ></td>
		</tr>
		<tr>
			<td>Telephone Number : </td>
			<td><input type="text" name="tel" value="<?php echo $rs['owner_tel']; ?>"></td>
		</tr>
		<tr>
			<td>Status : </td>
			<td><input type="text" name="status" value="<?php echo $rs['status_owner']; ?>"></td>
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