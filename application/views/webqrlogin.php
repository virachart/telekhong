<html>
	<head>
		<title>Telekhong QR</title>
		<meta charset="utf-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	    
	<!-- Bootstrap Core CSS -->
	    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

	    <!-- Morris Charts CSS -->
	    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body style="background-image:url('<?=base_url()?>assets/Image/backgroundqr1.jpg');background-size: 100% 100%;">
		<div style="text-align:center">
        	<style>
        		#jumbo {
                /* all other browsers */
                background: none;
                text-align: center;
                margin-top: 15vh;
                -webkit-animation: fadein 3s;
                }
                #jumbo2 {
                /* all other browsers */
                
                -webkit-animation: fadein 5s;
                }
                @-webkit-keyframes fadein {
                   from { opacity: 0; }
                   to   { opacity: 1; }
                }
        	</style>
        	<img src="<?=base_url()?>images/icon/logo.jpg" style="width:150px;height:150px;border-radius:3px;" id= "jumbo"><br>
        	<h2 id="jumbo2" style="color:#8D8D8D;">"<span style="color:#FF6600;"> Telekhong</span> <span style="color:#FFFFFF;">[ QR ]</span> "</h2>
        	<input type="text"   style="width:200px;height:33px;text-align:center;border:0px;color:#197519;margin-top:40px;border-radius:3px" id="jumbo2" value="" placeholder="Enter your code.">
        	&nbsp 
        	<input type="submit" class="btn btn-warning " value="Login" style="width:100px;"/>

    </div>
	</body>
</html>