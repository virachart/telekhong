
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

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

    <!-- jQuery -->
<script src="<?=base_url()?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    <form method="post" action="https://www.paysbuy.com/paynow.aspx" id="form2"> 
                    <input type="Hidden" Name="psb" value="psb"/> 
                    <input Type="Hidden" Name="biz" value="sleepyjob.oneside@gmail.com"/> 
                    
                    <?php
                        $store = $storedetail['store_id'];
                        if ($store <10) {
                            $store = "00".$store;
                        }elseif ($store < 100) {
                            $store = "0".$store;
                        }
                    ?>

                    <!-- inv is Some String text from paysbuy-->
                    <input Type="Hidden" Name="inv" value="<?php echo "pack".$store."".$storedetail['price']."";?>"/> 
                    <input Type="Hidden" Name="itm" value="Service Charge"/> 
                    
                    <!-- amt is Store Package Charge--> 
                    <input Type="Hidden" Name="amt" value="1"/>
                    
                    <!-- Redirect Web Controller-->
                    <input Type="Hidden" Name="postURL" value="http://www.telekhong.me/index.php/payment/checkpayment"/> 
                    <input type="image" src="https://www.paysbuy.com/imgs/L_click2buy.gif" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!" style="display : none" /> 
                </form >

                    <script type="text/javascript">
                        window.onload=function(){
                            document.forms["form2"].submit();
                        }
                    </script>
            

            







</body>

</html>
