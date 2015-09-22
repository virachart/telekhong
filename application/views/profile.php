<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">
<link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="page-wrapper" style="height:100%">
		
	<center><h1>Profile</h1></center>
	<?php 
		echo form_open("profile/edit/".$getuser['fb_id']." ");
	?>
	<div style="margin-top:40px">
	<table align="center">
		<tr>
			<td> Name : </td>
			<td><input style="width:120%;"type="text" name="name" class="form-control" id="name" value="<?php echo $getuser['fb_name']; ?>"> </td>
		</tr>
		<tr><td>&nbsp</td></tr>
		<tr>
			<td> Birth Day : </td>
			<td><input style="width:100%;" type="date" name="birth" id="birth" class="form-control" value="<?php echo $getuser['birth']; ?>"> </td>
		</tr>
		<tr><td>&nbsp</td></tr>
		<tr>
			<td> Gender : </td>
			<td>
			<?php
				$ma ="";
				$fe="";
				$ot="";
				if ($getuser['sex'] == "male") {
					$ma = "selected";
				}elseif ($getuser['sex'] == "female") {
					$fe = "selected";
				}else{
					$ot = "selected";	
				}
			?>
				<select name="sex" id="sex" class="form-control" style="width:60%;">
					<option value="male" <?php echo $ma; ?> > Male </option>
					<option value="female" <?php echo $fe; ?> > Female </option>
					<option value="other" <?php echo $ot; ?> > Other </option>
				</select>
			</td>
		</tr>
		<tr><td>&nbsp</td></tr>
		<tr>
			<td> Telephone Number : &nbsp</td>
			<td><input style="width:70%;" type="text" name="tel" id="tel" class="form-control" value="<?php echo $getuser['owner_tel']; ?>"> </td>
		</tr>
		<tr><td>&nbsp</td></tr>
		<tr>
			<td> E-Mail : </td>
			<td><input style="width:120%;" type="text" name="email" id="email" class="form-control" value="<?php echo $getuser['owner_email']; ?>"> </td>
		</tr>
		<tr><td>&nbsp</td></tr>	
		<tr><td>&nbsp</td></tr>	
	</table>
</div>
	<div class="col-lg-5"> </div>
	<div class="col-lg-1">  
			<?php echo anchor("store","<input style='width:80%;'type='button' name='btsave' class='btn btn-default' value='Cancel'>"); ?>
	</div>
	<div class="col-lg-1">
		<input style="width:80%;"type="submit" name="btsave" class="btn btn-primary" value="Save">
	</div>
	
	<?php 
		echo form_close();
	?>
<center>
            <div class="row">
                <div class="col-lg-12" style="margin-top: 5%">
                   <ol class="breadcrumb">
                     <li>You can contact us in this page </li>
                     <li> facebook : www.facebook.com/promotion2you</li>
                     <li> tel.08X-XXX-XXXX KingMongkutt's University of technology thonburi</li>
                 </ol>
             </div>
         </div>
     </center>
</div>

</body>
</html>