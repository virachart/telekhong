<!DOCTYPE html>
<html>
<head>
	<title>Create Sensoro</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Telekhong</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-color : white">
	
		<h1>Create Sensoro</h1>

		<?php echo form_open_multipart("managesensoro/add"); ?>
                <!-- sensoro uuid -->
                <div class="col-lg-6" style="text-align:right;" >UUID :</div>
                <div class="col-lg-6"><textarea class="form-control" name="uuid" rows="3" style="width:400px" placeholder="UUID"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- sensoro major -->
                <div class="col-lg-6" style="text-align:right;" >Major :</div>
                <div class="col-lg-6"><input type="text" name="major" class="form-control" placeholder="Major" style="width:200px"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- sensoro minor -->
                <div class="col-lg-6" style="text-align:right;" >Minor : </div>
                <div class="col-lg-6"><input type="text" name="minor" class="form-control" placeholder="Minor" style="width:200px"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                
                <!-- sensoro Type -->
                <div class="col-lg-6" style="text-align:right;" >Type of work :</div>
                <div class="col-lg-6">
                   	<select class="form-control" name="type" style="width:300px ;">  
                    	<option value="1">Type 1 : Use for send information</option>
                    	<option value="2">Type 2 : Use for check customer</option>
                   </select>
               </div>
               <div class="col-lg-12" style="text-align:center;margin-top:40px; margin-down: 30px" >

                <?php echo anchor("managesensoro", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                <input class="btn btn-success" type="submit" name="btsave" value="Create" style="margin-left: 30px">


            </div>	

            <?php echo form_close();?>




<!-- jQuery -->
<script src="<?=base_url()?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>