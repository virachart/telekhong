<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Store</title>
</head>
<body>
	<h1>Edit Store</h1>

	<?php 
		echo form_open('managestore/edit/'.$this->uri->segment(3));
	?>
	<table>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $rs['store_id']; ?>" ></td>
		</tr>
		<tr>
			<td>Store Name : </td>
			<td><input type="text" name="name" value="<?php echo $rs['store_name']; ?>" ></td>
		</tr>
		<tr>
			<td>Store Detail : </td>
			<td><textarea name="detail"><?php echo $rs['detail']; ?></textarea></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><textarea name="address"><?php echo $rs['address']; ?></textarea></td>
		</tr>
		<tr>
			<td>Telephone : </td>
			<td><input type="text" name="tel" value="<?php echo $rs['tel']; ?>" ></td>
		</tr>
		<tr>
			<td>Open Time : </td>
			<td><input type="text" name="open" value="<?php echo $rs['open_time']; ?>"></td>
		</tr>
		<tr>
			<td>Status : </td>
			<td><input type="text" name="status" value="<?php echo $rs['status_store_id']; ?>"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="btsave" value="Save"> &nbsp <?php echo anchor("managestore","Cancle"); ?></td>
		</tr>
	</table>

	<?php 
		echo form_close();
	?>


</body>
</html>