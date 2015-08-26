<!DOCTYPE html>
<html>
<head>
	<title>Register Owner</title>
</head>
<body>
	
	<form action="<?php echo site_url("regis/add");?>" method="post">
		<table>
			<tr>
				<td>Telephone Number : </td>
				<td><input type="text" name="tel" value=""></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email" value=""></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="bttsave" value="Save"> &nbsp <?php echo anchor("regis","Cancle"); ?></td>
			</tr>
		</table>
	</form>
	
</body>
</html>