<!DOCTYPE html>
<html>
<head>
	<title>testdate</title>

	<!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url()?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/morris/morris.min.js"></script>
    <!-- <script src="<?=base_url()?>assets/js/plugins/morris/morris-data.js"></script>-->

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <!--<script src="<?=base_url()?>assets/js/plugins/flot/flot-data.js"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>

<?php echo form_open("testdate/test")?>
	<div class="input-group date form_datetime1" >
        <input  style="width:150px" onchange="this.form.action=this.form.submit()" type="text" value="" id="monthtext" name="datepick" readonly class="form-control" placeholder="Month / Year">
            <span class="input-group-addon" id="button1">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
    </div>
     
    <script type="text/javascript">
        $(".form_datetime1").datetimepicker({
            format: "yyyy-mm",
            autoclose: true,
            startView:4,
            maxView:4,
            minView:3,
            pickerPosition: "bottom-left"
            
        });
        function enablefield(){
            if($("#radio_1").prop("checked", true)){
                $("#monthtext").prop('disabled', false);
                $("#button1").css("visibility", "visible");
                $("#yeartext").prop('disabled', true);
                $("#button2").css("visibility", "hidden");
            }

            
        }
        
    </script>
    <input type="submit">

    <?php echo form_close(); ?>
</body>
</html>