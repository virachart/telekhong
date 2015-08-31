<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>login facebook</title>
</head>
<body>
<!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">	

<style>
a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
</style>		
	<div style="text-align:center;margin-top:250px;">
		<img src="<?=base_url()?>assets/Image/ipsb_05.png" alt="" style="width:128px;height:128px;">
	</div>
	<div style="text-align:center;margin-top:80px">
		<button type="button" class="btn btn-primary" ><a href="<?php echo site_url("auth/login");?>">Sign up or Sign in</a></button>
	</div>


</body>
</html>