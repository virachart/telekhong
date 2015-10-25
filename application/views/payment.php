<!DOCTYPE html>
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

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php
        $store = $storedetail['store_id'];
        if ($store <10) {
            $store = "00".$store;
        }elseif ($store < 100) {
            $store = "0".$store;
        }
    ?>
    <script>
    function payment(){
                var month = $("#priod").val();
                var p = <?php echo $storedetail['price']+0;?>;
                var total = p*month ;
                var stoid = '<?php echo $store ?>';
                if (month < 10) {
                    month = '0'+month;
                };
                var setval = 'pack'+stoid+''+month;
                $("#inv").attr("value",setval);
                $("#price").attr("value",total);
        }
        function changepackage(){
            var packprice = $("#package").val();
            $("#price").attr("value",packprice);
        }
        function showbutton(){
            var pack = '<?php echo $storedetail['price'] ?>';
            var stoidch = '<?php echo $store ?>';
            if ($("#package").val() != pack) {
                $("#pricebutton").css("display","block");
                $("#pricebutton2").css("display","block");
                if ($("#package").val() == 1200) {
                    $("#inv2").attr("value",stoidch+""+1);
                }else if ($("#package").val() == 2000) {
                    $("#inv2").attr("value",stoidch+""+2);
                }else if ($("#package").val() == 3000) {
                    $("#inv2").attr("value",stoidch+""+3);
                }
            }else{
                $("#pricebutton").css("display","none");
                $("#pricebutton2").css("display","none");
            };
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
                <a class="navbar-brand" href="<?=base_url()?>index.php/store">Telekhong</a>
            </div>
            <!-- Top Menu Items -->
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



                <style type="text/css">
                    .not-active {
                       pointer-events: none;
                       cursor: default;
                    }

                </style>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> &nbsp<?php $storename = $this->session->userdata('storename'); echo substr($storename, 0,15) ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <?php
                        if ($allstore == null) {
                            echo "<li><center>You must have at least 1 store.</center> </li>";
                        }else{
                            foreach ($allstore as $r) {
                                $sta = "";
                                if ($r['status_store_id']=="1" && $r['expire_date'] != null) {

                                }else{
                                    $sta = "class='not-active'";
                                }
                                echo "<li ".$sta.">
                                <a href='";
                                echo site_url("store/selectst/".$r['store_id']);
                                echo "'> ".substr($r['store_name'],0,13); 
                                    if ($r['status_store_id']=="1" ) {
                                        echo "<span class='label label-success' style='float : right;'>Avaliable</span></a>
                                    </li>";
                                }elseif ($r['status_store_id']=="2" ) {
                                    echo "<span class='label label-warning' style='float : right;'>Blocked</span></a>
                                </li>";    
                            }elseif ($r['status_store_id']=="3" ) {
                                echo "<span class='label label-danger' style='float : right;'>Ban</span></a>
                            </li>";    
                            }
                            }
                        }

                ?>
                        <li class="divider"></li>
                            <li style="text-align:center;">
                                <a href="<?=base_url()?>index.php/createstore"> <i class="fa fa-plus-circle"></i> Create Store</a>
                            </li>
                        
                    </ul>
                </li>
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
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                        <li >
                            <a href="<?=base_url()?>index.php/store"><i class="fa fa-fw fa-desktop"></i> Store</a>
                        </li>
                        <li <?php echo $dissta;?>>
                            <a href="<?=base_url()?>index.php/allstatistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        <li  class="active"> 
                            <a href="<?=base_url()?>index.php/payment"><i class="fa fa-fw fa-table"></i> Payment</a>
                        </li>
                        <li <?php echo $dismanage; ?>>
                            <a href="<?=base_url()?>index.php/manageqrowner"><i class="glyphicon glyphicon-qrcode"></i> QRCode</a> 
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/contact"><i class="fa fa-fw fa-edit"></i> Contact</a>
                        </li>
                    </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 >
                            Payment
                        </h1>
                        <hr>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                
                    <style>
                        table.table1 tr{
                            
                            padding: 5px;
                            text-align: center; 
                        }
                        table.table1 td{
                            
                            padding: 5px;
                            text-align: center; 
                        }

                    </style>

                <div class="col-lg-12" style="text-align:center;background-color:#ffffff;border-color:#59AC59;border-style:solid;">

                <Form method="post" action="https://www.paysbuy.com/paynow.aspx">
                    <h3>Payment Here</h3>
                        <div class="col-lg-12" style="margin-top:10px;">
                            <input type="Hidden" Name="psb" value="psb"/> 
                            <input Type="Hidden" Name="biz" value="sleepyjob.oneside@gmail.com"/> 
                            
                            
                            <script type="text/javascript">
                                window.onload=function(){
                                    var stoid = '<?php echo $store ?>';
                                    var setval = 'pack'+stoid+'01';
                                    $("#inv").attr("value",setval);
                                }
                            </script>

                            <!-- inv is Some String text from paysbuy-->
                            <input Type="Hidden" Name="inv" id="inv" value=""/> 
                            <input Type="Hidden" Name="itm" value="Service Charge"/> 
                            
                            <!-- amt is Store Package Charge--> 
                            <input Type="Hidden" Name="amt" value="1" id="price"/>
                            
                            <!-- Redirect Web Controller-->
                            <input Type="Hidden" Name="postURL" value="http://www.telekhong.me/index.php/payment/checkpayment"/> 
                            <input type="image" src="https://www.paysbuy.com/imgs/L_click2buy.gif" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!"/> 
                        </div>
                        
                        <div class="col-lg-12" style="margin-top:10px;">
                        <div class="col-lg-7" style="text-align:right;"><h5>You can choose more than 1 period :</h5></div>
                        <div >
                            <select class="form-control " style="width:70px" onchange="payment()" id="priod">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                        
                            </select>
                        </div>
                        
                     </div>

                        <div class="col-lg-12" style="margin-top:10px;">
                            <button type="button" style="width:140px;" class="btn btn-warning " data-toggle="modal" data-target="#myModal3" >Change Package</button>
                            <div class="modal fade" id="myModal3" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"></button>
                                            <h4 class="modal-title" >Change Package</h4>
                                        </div>
                                        <div class="modal-body"style="padding:50px 50px;">
                                            <style>
                                        table.table3 th {
                                        border: 1px solid black;
                                        border-collapse: collapse;
                                        padding: 5px;
                                        text-align: center; 
                                    }
                                    table.table3 td {
                                        border: 1px solid black;
                                        border-collapse: collapse;
                                        padding: 5px;
                                        text-align: center; 
                                    }
                                    </style>
                                            <table class="table3" style="width:100%;color:#000000">
                                        <tr>
                    <th colspan="2" style="width:10%">Package</th>
                    <td>Bronze</td>
                    <td>Silver</td>
                    <td>Gold</td>
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Upload Limit</th>
                    <td>12</td>
                    <td>20</td>
                    <td>30</td>       
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Khong Use</th>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th rowspan="9" style="width:10%">Statistics</th>

                </tr>
                <tr>
                    <td >Follow Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Favorite Ranking</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Message Receive</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >General Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Message Receive Chart</td>      
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Come to Store Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >QR Buy Chart</td>      
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >QR Buy Again Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Service Charge</th>
                    <td>1,200 x 12 Month</td>
                    <td>2,000 x 12 Month</td>
                    <td>3,500 x 12 Month</td>
                </tr>
                                    </table>

                                            
                                            <hr>
                                            <div class="col-sm-3">Select your new package :</div>
                                            
                                            <?php 
                                                $pachop1 = "";
                                                $pachop2 = "";
                                                $pachop3 = "";
                                                $stpackid = $storedetail['package_id'];
                                                if ($stpackid == 1) {
                                                    $pachop1 = "selected";
                                                }elseif ($stpackid == 2) {
                                                    $pachop2 = "selected";
                                                }elseif ($stpackid == 3) {
                                                    $pachop3 = "selected";
                                                }

                                            ?>

                                            


                                            <div class="col-sm-1">
                                                <select class="form-control " style="width:100px" onchange="showbutton()" id="package">
                                                <option value="1200" <?php echo $pachop1;?> >Bronze</option>
                                                <option value="2000" <?php echo $pachop2;?> >Silver</option>
                                                <option value="3500" <?php echo $pachop3;?> >Gold</option>
                                                
                                            </select>
                                            </div>
                                            
                                            <div class="col-sm-5" id="pricebutton2" style="display:none;"><p>Change package payment &nbsp&nbsp<span class="glyphicon glyphicon-arrow-right"></span></p></div>
                                            <div class="col-sm-3">
                                            <input Type="Hidden" Name="inv" id="inv2" value=""/> 
                                            <input Type="Hidden" Name="itm" value="Service Charge"/> 
                                            
                                            <!-- amt is Store Package Charge--> 
                                            <input Type="Hidden" Name="amt" value="" id="price"/>
                                            
                                            <!-- Redirect Web Controller-->
                                            <input Type="Hidden" Name="postURL" value="http://www.telekhong.me/index.php/payment/checkpayment"/> 
                                            <input type="image" style="display:none;" id="pricebutton" onclick="changepackage();" src="https://www.paysbuy.com/imgs/L_click2buy.gif" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!"/> 
                                            </div>
                                                
                                            


                                        </div>
                                        <div class="modal-footer" style="margin-top:40px;">
                                            
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        
                </Form >
                <div class"col-lg-12">&nbsp</div>
                </div>
            </div>
            <div class="row">
             <div class="col-lg-12 " style=" margin-top: 20px;" >
                <ol class="breadcrumb"></ol>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="text-align:center;">Payment Logs</h2>
                        <br>
                        <table class="table1" width="100%";>
                        <tr>
                            <td>Your Package is :</td>
                            <td><span style="font-size: 14px" class="label label-primary label-as-badge"><?php echo $storedetail['package_name']; ?></span></td>
                            <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                            <td>Service Charge : </td>
                            <td><span style="font-size: 14px" class="label label-warning label-as-badge"><?php echo $storedetail['price']; ?> / Month</span></td>
                            <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                            <td>Service start in : </td>
                            <td><span style="font-size: 14px" class="label label-success label-as-badge"><?php echo substr($firstday['date'],0,10); ?></span></td>
                            <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                            <td>End of agreement : </td>
                            <td><span style="font-size: 14px" class="label label-info label-as-badge"><?php echo $storedetail['contract_date']; ?></span></td>
                        </tr>
                    </table>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" style="text-align:center;margin-top:10px">
                                <style>
                                .table th {
                                    background-color: #47A347;
                                    color: #ffffff;
                                    text-align: center;
                                }
                                </style>
                                <thead >
                                    <tr>
                                        <th>Period</th>
                                        <th>Amount</th>
                                        <th>Package</th>
                                        <th>Date</th>
                                        <th>Time</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        $i = 1;
                                        foreach ($payment as $r) {
                                        echo "<tr>";
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$r['amount']."</td>";
                                        echo "<td>".$r['detail']."</td>";
                                        echo "<td>".substr($r['date'],0,10)."</td>";
                                        echo "<td>".substr($r['date'],11,8)."</td>";
                                        echo "</tr>";
                                        $i++;
                                        }
                                    ?>
                                    <!-- <tr>
                                        <td>7</td>
                                        <td>2000</td>
                                        <td>12/7/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>2000</td>
                                        <td>12/6/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>2000</td>
                                        <td>12/5/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2000</td>
                                        <td>12/4/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2000</td>
                                        <td>12/3/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2000</td>
                                        <td>12/2/58</td>
                                        <td>13:30</td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2500</td>
                                        <td>12/1/58</td>
                                        <td>13:50</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                   
                    
                </div>
                <div><br></div>
                <center><div class="row">
                    <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li>You can contact us in this page </li>
                        <li> facebook : www.facebook.com/Telekhong</li>
                        <li> KingMongkutt's University of technology thonburi</li>
                    </ol>
                </div>
                </div></center>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

</body>

</html>
