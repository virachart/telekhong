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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-desktop"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Store 1 <span class="label label-success "style="margin-left :50px">Avaliable</span></a>
                        </li>
                        <li>
                            <a href="#">Store 2 <span class="label label-success"style="margin-left :50px">Avaliable</span></a>
                        </li>
                        <li>
                            <a href="#">Store 3 <span class="label label-success"style="margin-left :50px">Avaliable</span></a>
                        </li>
                        <li>
                            <a href="#">Store 4 <span class="label label-warning"style="margin-left :50px">Blocked</span></a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
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
                    <li>
                            <a href="<?=base_url()?>index.php/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li >
                            <a href="<?=base_url()?>index.php/store"><i class="fa fa-fw fa-desktop"></i> Store</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/statistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/payment"><i class="fa fa-fw fa-table"></i> Payment</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/contact"><i class="fa fa-fw fa-edit"></i> Contact</a>
                        </li>
                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="active"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="<?=base_url()?>index.php/manageuser">Manage User</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/manageowner">Manage Owner</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqr">Manage QRCode</a>
                                </li>
                                <li class="active">
                                    <a href="<?=base_url()?>index.php/managestore">Manage Store</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/package"><i class="fa fa-fw fa-arrows-v"></i> Package</a>
                        </li>

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
                            Manage Store
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Manage Store                         
                             </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                <div class="col-lg-3" >

                Total of Store is : <span class="badge"><?php echo $num1->num_rows(); ?></span> <br>
                Avaliable Store is :<span class="badge"><?php echo $num2->num_rows(); ?></span><br>
                Blocked Store is : <span class="badge"><?php echo $num3->num_rows(); ?></span><br>
                Ban Store is : <span class="badge"><?php echo $num4->num_rows(); ?></span><br>
                
                </div>
                
            </div>
            <div class="row">
             <div class="col-lg-12 " style=" margin-top: 20px;" >
                <ol class="breadcrumb"><li>-------------------------------</li></ol>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>All Store</h2></center>
                        <br>
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <div class="input-group">
                                    <button type="button" class="btn btn-primary col-lg-2">Create Store +
                                    </button>
                                    <form action="<?php echo site_url('managestore/search');?>" method = "post">
                                    <div class="col-lg-10 pull-right" >
                                        <div class="input-group-btn">
                                        
                                            <input class="btn btn-default pull-right" type="submit" name="btsave" value="Search">
                                          <input type="text" name="searchst" class="form-control input-sm pull-right" style="width: 200px; margin-top : 2px" placeholder="Search Input">
                                         </div>
                                       
                                        
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
                                            $.ajax({
                                                url:"<?php echo site_url("managestore/edit");?>",
                                                type: "POST",
                                                cache: false,
                                                data: "id="+$("#storeid"+id).val()+"&name="+$("#storename"+id).val()+"&detail="+$("#detail"+id).val()+"&address="+$("#address"+id).val()+"&tel="+$("#storetel"+id).val()+"&open="+$("#open"+id).val()+"&status="+$("#status"+id).val(),
                                                
                                            });
                                            location.reload("managestore");
                                        };

                                    </script>

                                </div>
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Store Name</td>
                                        <td>Owner Name</td>
                                        <td>Telephone</td>
                                        <td>Expire Date</td>
                                        <td>Register Date</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(count($rs)==0)
                                        {
                                            echo "<tr><td align='center'>---no data----</td></tr>";
                                        }else {
                                            $no = $this->uri->segment(3)+1;
                                            // echo var_dump($rs);
                                            foreach ($rs as $r) {
                                                echo "<tr>";
                                                echo "<td>".$no."</td>";
                                                echo "<td>".$r['store_name']."</td>";
                                                echo "<td>".$r['fb_name']."</td>";
                                                echo "<td>".$r['tel']."</td>";
                                                echo "<td>".$r['expire_date']."</td>";
                                                echo "<td>".$r['store_date']."</td>";
                                                echo "<td align= center>";
                                                // echo anchor("managestore/edit/".$r["store_id"], "<button type='button' class='btn btn-warning'>Edit</button>");
                                                echo "<button type='button' class='btn btn-warning'  data-toggle='modal' data-target='#myModal".$r['store_id']."'  >";
                                                echo "Edit";
                                                echo "</button>";
                                                echo "&nbsp";
                                                echo anchor("managestore/del/".$r["store_id"], "<button type='button' class='btn btn-danger'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                                                echo "</td>";
                                                echo "<td>";
                                                echo "<div class='modal fade' id='myModal".$r['store_id']."' role='dialog'>
                                                    <div class='modal-dialog'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='close' data-dismiss='modal'></button>
                                                                <h4 class='modal-title' >Edit Store</h4>
                                                            </div>
                                                            <div class='modal-body'style='padding:50px 50px;'>

                                                                <table>
                                                                    <tr >
                                                                        <td align='center'>Store ID : &nbsp</td>
                                                                        <td align='center'><input type='text' name='storeid' id='storeid".$r['store_id']."' class='form-control' style='width:200px' value='".$r['store_id']."' disabled></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Store Name : </td>
                                                                        <td align='center'><input type='text' name='storename' id='storename".$r['store_id']."' class='form-control' style='width:200px' value='".$r['store_name']."' ></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='center'>Store Detail : </td>
                                                                        <td align='center'><textarea name='detail' id='detail".$r['store_id']."'>".$r['detail']."</textarea></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='center'>Address : </td>
                                                                        <td align='center'><textarea name='address' id='address".$r['store_id']."'>".$r['address']."</textarea></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Telephone : </td>
                                                                        <td align='center'><input type='text' name='ownertel' id='storetel".$r['store_id']."' class='form-control' style='width:200px' value='".$r['tel']."'></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Open Time : </td>
                                                                        <td align='center'><input type='text' name='open' id='open".$r['store_id']."' class='form-control' style='width:200px' value='".$r['open_time']."'></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Status : </td>
                                                                        <td align='center'><input type='text' name='ownerstatus' id='status".$r['store_id']."' class='form-control' style='width:200px' value='".$r['status_store_id']."'></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' onclick='edit(".$r['store_id'].")' data-dismiss='modal'>Edit</button>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
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


                                    <!-- <tr>
                                        <td>1</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-warning">Blocked</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-warning">Blocked</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-warning">Blocked</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <?php
                                echo $this->pagination->create_links();
                            ?>
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
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>

</html>
