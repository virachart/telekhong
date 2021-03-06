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
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    
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
    <script>
        function numCheck(storetel,id) {
            var telnum = document.getElementById("storetel"+id).value; 
            e_k=event.keyCode
            //if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
            if (e_k != 13 && (e_k < 48) || (e_k > 57))  {
                event.returnValue = false;
                alert("Input Number Only");
            }
            else if(telnum.length>9){
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
                <a class="navbar-brand" href="<?=base_url()?>index.php/dashboard">Telekhong</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
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
                            <a href="<?=base_url()?>index.php/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        
                        <li >
                            <a href="<?=base_url()?>index.php/statistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="<?=base_url()?>index.php/manageuser">Manage User</a>
                                </li>
                                <li >
                                    <a href="<?=base_url()?>index.php/manageowner">Manage Owner</a>
                                </li>
                                <li class="active">
                                    <a href="<?=base_url()?>index.php/managestore">Manage Store</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqr">Manage QRCode</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/managesensoro">Manage Khong</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/managepackage">Manage Package</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">

                        <center><h1>Manage Store</h1></center>
                        <br>
                        <div class="table table-responsive">
                            <table class="table  table-hover">
                                <!--<div class="pull-left">
                                    <button type="button" style="width: 120px" class="btn btn-primary" >+ Create Store</button>
                                </div>-->
                                
                                <div class=" col-lg-7" style="margin-top:7px;">

                                Total of Store is : <span class="badge"><?php echo $num1->num_rows(); ?></span>&nbsp
                                Available Store is :<span class="badge"><?php echo $num2->num_rows(); ?></span>&nbsp
                                Blocked Store is : <span class="badge"><?php echo $num3->num_rows(); ?></span>&nbsp
                                Ban Store is : <span class="badge"><?php echo $num4->num_rows(); ?></span>&nbsp
                                
                                </div>
                                    <form action="<?php echo site_url('managestore/search');?>" method = "post">
                                    
                                        <div class="pull-right">
                                            <input class="btn btn-default pull-right" type="submit" name="btsave" value="Search">
                                          <input type="text" name="searchst" class="form-control pull-right" style="width: 200px;" placeholder="Search Input">
                                         </div>

                                     <div class="col-lg-12">
                                        <label class="pull-right">
                                            <input type="radio" name="selectsearch" id="cat1" value="store_name"> Store Name
                                        </label>
                                        <label class="pull-right">
                                            <input type="radio" name="selectsearch" id="cat1" value="owner_name" checked="checked"> Owner Name &nbsp
                                        </label>
                                        
                                    </div>
                                     </form>

                                     <script type="text/javascript">
                                        
                                         // show edit detail
                                        function edit(id){
                                            // alert($("#ownerid"+id).val()+"-"+$("#owneremail"+id).val()+"-"+$("#ownertel"+id).val()+"-"+$("#ownerstatus"+id).val());
                                            var stn = document.getElementById("storename"+id).value;
                                            var des = document.getElementById("detail"+id).value;
                                            var address = document.getElementById("address"+id).value;
                                            var telnum = document.getElementById("storetel"+id).value;
                                            var time = document.getElementById("open"+id).value;
                                            if (stn.length<1) {
                                                alert("Please input store name.");
                                                document.getElementById("stn").focus();
                                                return false;
                                            }else if (des.length<1) {
                                                alert("Please input store detail.");
                                                document.getElementById("detail").focus();
                                                return false;
                                            }else if (address.length<1) {
                                                alert("Please input store address.");
                                                document.getElementById("address").focus();
                                                return false;
                                            }else if (telnum.length<1) {
                                                alert("Please input store telephone number.");
                                                document.getElementById("storetel").focus();
                                                return false;
                                            }else if (time.length<1) {
                                                alert("Please input store open time.");
                                                document.getElementById("open").focus();
                                                return false;
                                            
                                            }
                                            $.ajax({
                                                url:"<?php echo site_url("managestore/edit");?>",
                                                type: "POST",
                                                cache: false,
                                                data: "id="+$("#storeid"+id).val()+"&name="+$("#storename"+id).val()+"&detail="+$("#detail"+id).val()+"&address="+$("#address"+id).val()+"&tel="+$("#storetel"+id).val()+"&open="+$("#open"+id).val()+"&status="+$("#status"+id).val(),
                                                
                                            });
                                            location.reload("managestore");
                                        };

                                        // function activeset(){
                                        //     var target = event.target || event.srcElement;
                                        //     document.getElementById("targetshow").innerHTML=event.target.innerHTML;
                                        //     }
                                        
                                        
                                    </script>

                                
                                <style>
                                .table th{
                                    background-color: #2B68A5;
                                    color: #ffffff;
                                    text-align: center;
                                }
                                
                                </style>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Store Name</th>
                                        <th>Owner Name</th>
                                        <th>Telephone</th>
                                        <th>Package</th>
                                        <th>Status</th>
                                        <!-- <th style="color:black" cl>
                                        <?php echo form_open()?>
                                            <select id="sortval" onchange="this.form.action='<?php echo site_url('managestore')?>/'+this.value;this.form.submit()";>
                                                <option hidden><?php echo $expire; ?></option>
                                                <option value="index">Expire Date</option>
                                                <option value="nopay">No Payment</option>
                                                <option value="outdate">OutDated</option>
                                            </select>
                                        <?php echo form_close(); ?>
                                        </th> -->
                                        <th class="dropdown">
                                           <a href="#" data-toggle="dropdown" class="dropdown-toggle" id="targetshow" style="color:#ffffff;">Expire Date <b class="caret"></b></a>
                                           <ul class="dropdown-menu" >
                                              <li value="nopay"><a href="<?=base_url()?>index.php/managestore/nopay">No Payment</a></li>
                                              <li value="outdate"><a href="<?=base_url()?>index.php/managestore/outdate">OutDated</a></li>
                                              <li value="index"><a href="<?=base_url()?>index.php/managestore/index">Show All</a></li>                     
                                           </ul>
                                        </th>
                                        <th>Register Date</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(count($rs)==0)
                                        {
                                            echo "<tr><td colspan='9' align='center'>---Don't Have Store. Please Search Again!!!----</td></tr>";
                                        }else {
                                            if ($no1 == "1") {
                                                $no = 1;
                                            }else{
                                                $no = $this->uri->segment(3)+1;
                                            }
                                            
                                            // echo var_dump($rs);
                                            foreach ($rs as $r) {
                                                $staown = "";
                                                if ($r['status_store_id'] == 1) {
                                                    $staown = "<span class='label label-success'>Available</span>";
                                                }elseif ($r['status_store_id'] == 2) {
                                                    $staown = "<span class='label label-warning'>Blocked</span>";
                                                }elseif ($r['status_store_id'] == 3) {
                                                    $staown = "<span class='label label-danger'>Baned</span>";
                                                }
                                                $day = date("d");
                                                $day += 1;
                                                if ($day < 10 ) {
                                                    $day = "0".$day;
                                                }
                                                $date = date("Y-m-");
                                                $date = $date.$day;

                                                 $stcolor = "";
                                                if ($r['expire_date'] == null) {
                                                    $stcolor = "class='warning'";
                                                }elseif ($r['expire_date'] < $date) {
                                                    $stcolor = "class='danger'";
                                                }
                                                echo "<tr ".$stcolor.">";
                                                echo "<td style='text-align:center;'>".$no."</td>";
                                                echo "<td>".$r['store_name']."</td>";
                                                echo "<td>".$r['fb_name']."</td>";
                                                echo "<td style='text-align:center;'>".$r['tel']."</td>";
                                                echo "<td style='text-align:center;'>".$r['package_name']."</td>";
                                                echo "<td style='text-align:center;'>".$staown."</td>";
                                                echo "<td style='text-align:center;'>".$r['expire_date']."</td>";
                                                echo "<td style='text-align:center;'>".substr($r['store_date'], 0,10)."</td>";
                                                echo "<td align= center>";
                                                // echo anchor("managestore/edit/".$r["store_id"], "<button type='button' class='btn btn-warning'>Edit</button>");
                                                echo "<button type='button' class='btn btn-info'  data-toggle='modal' data-target='#myModaldetail".$r['store_id']."'  >";
                                                echo "Detail";
                                                echo "</button>";
                                                echo "&nbsp";
                                                echo "<button type='button' class='btn btn-warning'  data-toggle='modal' data-target='#myModal".$r['store_id']."'  >";
                                                echo "Edit";
                                                echo "</button>";
                                                echo "&nbsp";
                                                
                                                echo "</td>";
                                                echo "<td>";
                                                echo "<div class='modal fade' id='myModaldetail".$r['store_id']."' role='dialog'>
                                                        <div class='modal-dialog'>
                                                          <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='close' data-dismiss='modal'></button>
                                                                <h4 class='modal-title' >Store Detail</h4>
                                                            </div>
                                                            <div class='modal-body'style='padding:50px 50px;'>

                                                                <table style='margin : 0 auto;'>
                                                                    <tr >
                                                                        <td align='right'>Store ID : &nbsp</td>
                                                                        <td>".$r['store_id']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Store Name : &nbsp</td>
                                                                        <td >".$r['store_name']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Owner Store : &nbsp</td>
                                                                        <td>".$r['fb_name']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Telephone : &nbsp</td>
                                                                        <td>".$r['tel']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Package : &nbsp</td>
                                                                        <td>".$r['package_name']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Status : &nbsp</td>
                                                                        <td>".$staown."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Expire Date : &nbsp</td>
                                                                        <td>".$r['expire_date']."</td>
                                                                    </tr>";
                                                                    $dispayment = "";
                                                                    if ($r['expire_date'] == null) {
                                                                        $dispayment = "disabled";
                                                                    }
                                                                    echo "<tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Payment Log : &nbsp</td>
                                                                        <td>".anchor("managestore/showpayment/".$r["store_id"], "<button type='button' class='btn btn-warning' ".$dispayment." >Display Payment</button>")."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >";
                                                                    $disaallkh = "";
                                                                    if ($r['sennum'] == 0) {
                                                                        $disaallkh = "disabled";
                                                                    }
                                                                    echo  "<td align='right'>Number of Khong : &nbsp</td>
                                                                        <td>".anchor("managesensoro/searchsen/".$r["store_id"], "<button type='button' class='btn btn-info' ".$disaallkh." ><span class='badge'>".$r['sennum']."</span>  Show all Khong</button>")." </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>";
                                                echo "<div class='modal fade' id='myModal".$r['store_id']."' role='dialog'>
                                                    <div class='modal-dialog'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='close' data-dismiss='modal'></button>
                                                                <h4 class='modal-title' >Edit Store</h4>
                                                            </div>
                                                            <div class='modal-body'style='padding:30px 50px;'>

                                                                <table style='margin : 0 auto;'>
                                                                    <tr >
                                                                        <td align='center'>Store ID : &nbsp</td>
                                                                        <td align='center'><input type='text' name='storeid' id='storeid".$r['store_id']."' class='form-control' style='width:200px' value='".$r['store_id']."' disabled></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Store Name : &nbsp</td>
                                                                        <td align='center'><input type='text' name='storename' id='storename".$r['store_id']."' class='form-control' style='width:200px' value='".$r['store_name']."' ></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='center'>Store Detail : &nbsp</td>
                                                                        <td align='center'><textarea name='detail' style='resize:none;height:100px'class='form-control' id='detail".$r['store_id']."'>".$r['detail']."</textarea></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='center'>Address : &nbsp</td>
                                                                        <td align='center'><textarea name='address' style='resize:none;height:100px'class='form-control' id='address".$r['store_id']."'>".$r['address']."</textarea></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Telephone : &nbsp</td>
                                                                        <td align='center'><input type='text' name='storetel' id='storetel".$r['store_id']."' onkeypress='numCheck(storetel,".$r['store_id'].")'; class='form-control' style='width:200px' value='".$r['tel']."'></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Open Time : &nbsp</td>
                                                                        <td align='center'><input type='text' name='open' id='open".$r['store_id']."' class='form-control' style='width:200px' value='".$r['open_time']."'></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Status : &nbsp</td>
                                                                        <td align='center'><input type='number' min='0' name='status' id='status".$r['store_id']."' class='form-control' style='width:200px' value='".$r['status_store_id']."'></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class='modal-footer' style='text-align:center'>
                                                                ";
                                                                echo anchor("managestore/del/".$r["store_id"], "<button type='button' class='btn btn-danger '>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                                                            echo "
                                                                &nbsp&nbsp&nbsp
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                                 &nbsp&nbsp
                                                                <button type='button' class='btn btn-primary' onclick='edit(".$r['store_id'].")' >Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                                                echo "</td>";


                                                echo "</tr>";
                                                $no++;
                                            }
                                        }
                                     ?>


                                    
                                </tbody>
                            </table>
                            <?php
                                if ($pagi == 1) {
                                    echo $this->pagination->create_links();
                                }
                            ?>
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
