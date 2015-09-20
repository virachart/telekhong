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

    <script>
    function payment(){
                var month = $("#priod").val();
                var p = <?php echo $storedetail['price']+0;?>;
                var total = p*month ;
                $("#price").attr("value",total);
        }
    function changepackage(){
        var total = $("#p3").val();
        $("#price").attr("value",total);
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
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-desktop"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <?php
                        if ($allstore == null) {
                            echo "<li><center> You must have at least 1 store.</center> </li>";
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
                            <li>
                                <a href="<?=base_url()?>index.php/createstore">+ Create Store</a>
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
                            <a href="<?=base_url()?>index.php/statisticsowner"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        <li class="active">
                            <a href="<?=base_url()?>index.php/payment"><i class="fa fa-fw fa-table"></i> Payment</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/contact"><i class="fa fa-fw fa-edit"></i> Contact</a>
                        </li>
                        
                        <li <?php echo $dismanage; ?>>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqrowner">Manage QRCode</a>
                                </li>
                            </ul>
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
                        <h1 class="page-header">
                            Payment
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-desktop"></i>  <a href="<?=base_url()?>store">store</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Payments
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                <div class="col-lg-3" >

                Your Package is : <span style="font-size: 14px" class="label label-primary label-as-badge"><?php echo $storedetail['package_name']; ?></span><br>
                <br>
                Service Charge : <span style="font-size: 14px" class="label label-warning label-as-badge"><?php echo $storedetail['price']; ?> / Month</span><br>
                <br>
                Service start in : <span style="font-size: 14px" class="label label-success label-as-badge"><?php echo substr($firstday['date'],0,10); ?></span><br>
                <br>
                End of agreement : <span style="font-size: 14px" class="label label-info label-as-badge"><?php $y = substr($firstday['date'],0,4); $y+=1; echo $y.substr($firstday['date'],4,6); ?></span><br>
                </div>
                <div class="col-lg-6">

                <Form method="post" action="https://www.paysbuy.com/paynow.aspx"> 
                    
                    <p class="col-lg-6">You can choose more than 1 period :</p>
                    <select class="form-control col-lg-12" style="width:70px" onchange="payment()" id="priod">
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

                    <div class="col-lg-12" style="height:10px;"></div>
                    <p class="col-lg-4">Click this for payment :</p>
                    <div class="col-lg-6">
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
                    <input Type="Hidden" Name="amt" value="1" id="price"/>
                    
                    <!-- Redirect Web Controller-->
                    <input Type="Hidden" Name="postURL" value="http://www.telekhong.me/index.php/payment/checkpayment"/> 
                    <input type="image" src="https://www.paysbuy.com/imgs/L_click2buy.gif" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!"/> 
                    </div>
                    <button type="button" class="btn btn-warning pull-right " data-toggle="modal" data-target="#myModal3" style="margin-right:10px">Change Package</button>
                    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Change Package</h4>
                </div>
                <div class="modal-body"style="padding:50px 50px;">

                    <div class="col-sm-12">Select your new package :</div><br><hr>

                    <div class="col-sm-12"><center>
                        <label class="radio-inline"><input type="radio" id="p3" name="optradio" value="1200">Package Copper</label>
                        <label class="radio-inline"><input type="radio" id="p3" name="optradio" value="2000">Package Silver</label>
                        <label class="radio-inline"><input type="radio" id="p3" name="optradio" value="3000">Package Gold</label>
                        
                    </center></div><br>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="changepackage();">Change</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>
                </Form >
                
                </div>
            </div>
            <div class="row">
             <div class="col-lg-12 " style=" margin-top: 20px;" >
                <ol class="breadcrumb"><li>You can pay between XX XX XX - XX XX XX </li></ol>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="text-align:center;">Payment Logs</h2>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" style="text-align:center">
                                <thead>
                                    <tr>
                                        <td>Period</td>
                                        <td>Amount</td>
                                        <td>Date</td>
                                        <td>Time</td>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        $i = 1;
                                        foreach ($payment as $r) {
                                        echo "<tr>";
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$r['amount']."</td>";
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
                        <li> facebook : www.facebook.com/promotion2you</li>
                        <li> tel.08X-XXX-XXXX KingMongkutt's University of technology thonburi</li>
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
