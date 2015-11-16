<!DOCTYPE html>
<html>
<head>
	<title>runfor</title>
</head>
<body>

	<!-- <table border="1">
		<tr>
			<th>No</th>
			<th>FB ID</th>
			<th>FB Name</th>
			<th>Sex</th>
		</tr> -->
		<?php 
			// $no = 1;
			// foreach ($user as $r) {
			// 	echo "<tr>";
			// 	echo "<td>".$no."</td>";
			// 	echo "<td>".$r['fb_id']."</td>";
			// 	echo "<td>".$r['fb_name']."</td>";
			// 	echo "<td>".$r['sex']."</td>";
			// 	echo "</tr>";
			// 	$no++;
			// }
		?>
	<!-- </table> -->

	<table>
		<?php echo form_open("testcon/addpack"); ?>
		<tr>
			<td>Package Name : </td>
			<td><input type="text" name="name"> </td>
		</tr>
		<tr>
			<td>Upload Limit : </td>
			<td><input type="text" name="limit"> </td>
		</tr>
		<tr>
			<td>Package Description : </td>
			<td><input type="text" name="des"> </td>
		</tr>
		<tr>
			<td>Package Price : </td>
			<td><input type="text" name="price"> </td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit"></td>
		</tr>

		<?php echo form_close(); ?>
	</table>



	<!-- <input type="text" value="<?php //echo $userrow['fb_name'];?>"> -->

</body>
</html>