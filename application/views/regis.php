<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Register Owner</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.cropit.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.css" rel="stylesheet">


</head>
<body>
		<script type="text/javascript">

		function check(form_id,email,tel,birthdate) {
			
			
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var address = document.forms[form_id].elements[email].value;
			var tele = document.forms[form_id].elements[tel].value;
			var bd = document.forms[form_id].elements[birthdate].value;    
		      
				if(bd.length<1){
					alert('Please input your birth date');
					document.forms[form_id].elements[birthdate].focus();
					return false;

				}else if(tele.length<1){
					alert('Please input your Telephone number');
					document.forms[form_id].elements[tel].focus();
					return false;
				}else if(address.length<1){
					alert('Please input your email address');
					document.forms[form_id].elements[email].focus();
					return false;
				}
				else if(filter.test(address)==false){
					alert('Invalid Email Address');
					document.forms[form_id].elements[email].focus();

					return false;
				}
				alert('This Email is ok');

			}

		function numCheck(form_id,tel) {
			var tele = document.forms[form_id].elements[tel].value; 
			e_k=event.keyCode
			//if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
			if (e_k != 13 && (e_k < 48) || (e_k > 57))  {
					event.returnValue = false;
					alert("Input Number Only");
				}
				else if(tele.length>9){
					event.returnValue = false;
					alert("Your telephone number must not be over 10 digits");
				}
		}	
		</script>
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
                

                <ul class="nav navbar-right top-nav">
                
                <?php
                    $dissta = "";
                    $dismanage = "";
                    $disdelete = "";
                    $disupload = "";
                    $stastore = $this->session->userdata('statuspack');
                    if ($stastore == 1) {
                        $dissta = "style = 'display : none' ";
                        $dismanage = "style = 'display : none'";
                    }elseif ($stastore == 5) {
                        $dissta = "class = 'disabled'";
                        $dismanage = "class = 'disabled'";
                        $disdelete = "disabled";
                        $disupload = "disabled";
                    }

                ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('first_name');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="<?php echo site_url("auth/logout");?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                <h1>Create Owner Info</h1><br>
	<form name="info" action="<?php echo site_url("regis/add");?>" method="post" onsubmit="javascript:return check('info','email','tel','birthdate');">
		<table>
            <tr>
            <td>Name : </td>
            <td><input class="form-control" type="text" name="name" value="<?php echo $this->session->userdata('name'); ?>"></td>
            </tr>
            <tr><td>&nbsp</td></tr>
            <tr>
            <td>Gender : </td>
            <td>
                <select name="sex" class="form-control">
                    <option value="male"> Male </option>
                    <option value="female"> Female </option>
                </select>
            </td>
            </tr>
            <tr><td>&nbsp</td></tr>
			<tr>
				<td>Birth Date : </td>
				<td>
					<div class="input-group date form_datetime1" >
                        <input  style="width:150px" type="text"  value="" name="birthdate" id="monthtext" readonly class="form-control" placeholder="Month / Year">
                            <span class="input-group-addon" id="button1">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                    </div>
                                             
                        <script type="text/javascript">
                            $(".form_datetime1").datetimepicker({
                                format: "yyyy-mm-dd",
                                autoclose: true,
                                startView:4,
                                maxView:4,
                                minView:2,
                                pickerPosition: "bottom-left"
                                                    
                                });
                                                
                        </script>
                </td>
			</tr>
            <tr><td>&nbsp</td></tr>
			
                
			<tr>
				<td>Telephone Number : &nbsp</td>
				<td><input class="form-control" type="text" name="tel" value="" onkeypress= numCheck('info','tel');></td>
			</tr>
			<tr><td>&nbsp</td></tr>
			<tr>
				<td>Email : </td>
				<td><input class="form-control" type="text" name="email" value="" id="email"></td>
			</tr>
			<tr><td>&nbsp</td></tr>

		</table>
				
				<div class="col-lg-12" style="text-align:center;margin-top:30px; margin-down: 30px">
				<input class="form-control btn btn-success" type="submit" name="bttsave" value="Register" style="width: 80px;margin-left:20px"> 
				
				
				
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