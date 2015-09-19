<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1>Profile</h1>
	<?php 
		echo form_open("profile/edit/".$getuser['fb_id']." ");
	?>
	<table>
		<tr>
			<td> Name : </td>
			<td><input type="text" name="name" id="name" value="<?php echo $getuser['fb_name']; ?>"> </td>
		</tr>
		<tr>
			<td> Birth Day : </td>
			<td><input type="date" name="birth" id="birth" class="form-control" value="<?php echo $getuser['birth']; ?>"> </td>
		</tr>
		<tr>
			<td> Gender : </td>
			<td>
			<?php
				$ma;
				$fe;
				$ot;
				if ($getuser['sex'] == "male") {
					$ma = "selected";
				}elseif ($getuser['sex'] == "female") {
					$fe = "selected";
				}else{
					$ot = "selected";	
				}
			?>
				<select name="sex" id="sex">
					<option value="male" <?php echo $ma; ?> > Male </option>
					<option value="female" <?php echo $fe; ?> > Female </option>
					<option value="other" <?php echo $ot; ?> > Other </option>
				</select>
			</td>
		</tr>
		<tr>
			<td> Telephone Number : </td>
			<td><input type="text" name="tel" id="tel" value="<?php echo $getuser['owner_tel']; ?>"> </td>
		</tr>
		<tr>
			<td> E-Mail : </td>
			<td><input type="text" name="tel" id="tel" value="<?php echo $getuser['owner_email']; ?>"> </td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="btsave" value="Save"> &nbsp <?php echo anchor("store","Cancle"); ?></td>
		</tr>
	</table>
	<?php 
		echo form_close();
	?>
</body>
</html>