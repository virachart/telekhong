<!DOCTYPE html>
<html>
<head>
	<title>Register Owner</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.cropit.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</head>
<body>

	<div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>store">Telekhong</a>
                </div>
                


                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                <h1>Create Owner Info</h1><br>
<form action="<?php echo site_url("regis/add");?>" method="post">
		<table>
			<tr>
				<td>Telephone Number : </td>
				<td><input class="form-control" type="text" name="tel" value=""></td>
			</tr>
			<tr><td>&nbsp</td></tr>
			<tr>
				<td>Email : </td>
				<td><input class="form-control" type="text" name="email" value=""></td>
			</tr>
			<tr><td>&nbsp</td></tr>
		</table>
				
				<div class="col-lg-12" style="text-align:center;margin-top:30px; margin-down: 30px">
				<?php echo anchor("regis","<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
				<input class="form-control btn btn-primary" type="submit" name="bttsave" value="Save" style="width: 80px;margin-left:20px"> 
				
				</div>
	</form>
	
                

        <div>
           <br>
       </div>

       <center>
        <div class="row">
            <div class="col-lg-12">
            <div class="col-lg-12" style="margin-top: 40px">
               <ol class="breadcrumb">
                <li>You can contact us in this page </li>
                <li> facebook : www.facebook.com/Telekhong</li>
                <li> KingMongkutt's University of technology thonburi</li>
             </ol>
         </div>
     </div>
 </center>
 <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
    </div>
</div>


	
	
</body>
</html>