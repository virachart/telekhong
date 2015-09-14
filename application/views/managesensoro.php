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
                            Manage Sensoro
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Manage Sensoro                        
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
                Sensoro Type 1 is : <span class="badge"><?php echo $num5->num_rows(); ?></span><br>
                Sensoro Type 2 is : <span class="badge"><?php echo $num6->num_rows(); ?></span><br>
                
                </div>

                <!-- script create beacon -->
                <script type="text/javascript">
                    // create beacon
                    $('#create').live("click",function(){
                        $.ajax({
                            url:"managesensoro/add",
                            type: "POST",
                            cache: false,
                            data: "uuid="+$("#uuid").val()+"&major="+$("#major").val()+"&minor="+$("#minor").val()+"&type="+$("#type").val(),
                        });
                        location.reload("managesensoro");
                    });
                    // end create beacon

                    // edit beacon
                    $('#edit').live("click",function(){
                        $.ajax({
                            url:"managesensoro/edit",
                            type: "POST",
                            cache: false,
                            data: "senid="+$("#senid").val()+"&storeid="+$("#store").val()+"&type="+$("#typedetail").val()+"&status="+$("#statusdetail").val(),
                        });
                        location.reload("managesensoro");
                    });

                    // change Battery
                    $('#change').live("click",function(){
                        var a = $("#changebatt").val();
                        var year = a.substring(0, 4);
                        var month = a.substring(5, 7);
                        var day = a.substring(8, 10);
                        var forday = year+"-"+month+"-"+day+" 08:00:00";
                        $.ajax({
                            url:"managesensoro/change",
                            type: "POST",
                            cache: false,
                            data: "senid="+$("#senidbatt").val()+"&day="+forday,
                        });
                        location.reload("managesensoro");
                    });

                </script>

                <!-- Modal content-->
      <!-- modal of create beacon -->
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Create Beacon</h4>
                </div>
                <div class="modal-body"style="padding:50px 50px;">

                    <table>
                        <tr style="padding-top : 20px">
                            <td align="center">UUID : </td>
                            <td align="center"><textarea class="form-control" name="uuid" id="uuid" rows="3" style="width:400px" placeholder="UUID"></textarea></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Major : </td>
                            <td align="center"><input type="text" name="major" id="major" class="form-control" placeholder="Major" style="width:200px"></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Minor : </td>
                            <td align="center"><input type="text" name="minor" id="minor" class="form-control" placeholder="Minor" style="width:200px"></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Type of Work : </td>
                            <td align="center">
                                <select class="form-control" name="type" id="type" style="width:300px ;">  
                                    <option value="1">Type 1 : Use for send information</option>
                                    <option value="2">Type 2 : Use for check customer</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id='create' data-dismiss="modal">Create</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal of create beacon -->

    <!-- modal of edit beacon -->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Edit Beacon</h4>
                </div>
                <div class="modal-body"style="padding:50px 50px;">

                    <table>
                        <tr style="padding-top : 20px">
                            <td align="center">Sensoro ID : </td>
                            <td align="center"><input type="text" id="senid" class="form-control" style="width:200px" value="" disabled></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Major : </td>
                            <td align="center"><input type="text" id="majordetail" class="form-control" style="width:200px" value="" disabled></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Minor : </td>
                            <td align="center"><input type="text" id="minordetail" class="form-control" style="width:200px" value="" disabled></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Store ID : </td>
                            <td align="center"><input type="text" id="store" class="form-control" style="width:200px" value=""></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Type of Work : </td>
                            <td align="center">
                                <select class="form-control" name="type" id="typedetail" style="width:300px ;">  
                                    <option id="type1" value="1" selected="">Type 1 : Use for send information</option>
                                    <option id="type2" value="2" selected="">Type 2 : Use for check customer</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Status Sensoro : </td>
                            <td align="center">
                                <select class="form-control" name="type" id="statusdetail" style="width:300px ;">  
                                    <option id="status1" value="1" selected="">Avaliable</option>
                                    <option id="status2" value="2" selected="">Block</option>
                                    <option id="status3" value="3" selected="">Ban</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id='edit' data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal edit beacon   -->

        <!-- modal of change batt beacon -->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Change Battery Beacon</h4>
                </div>
                <div class="modal-body"style="padding:50px 50px;">

                    <table>
                        <tr style="padding-top : 20px">
                            <td align="center">Sensoro ID : </td>
                            <td align="center"><input type="text" id="senidbatt" class="form-control" style="width:200px" value="" disabled></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Major : </td>
                            <td align="center"><input type="text" id="majorbatt" class="form-control" style="width:200px" value="" disabled></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Minor : </td>
                            <td align="center"><input type="text" id="minorbatt" class="form-control" style="width:200px" value="" disabled></td>
                        </tr>
                        <tr style="padding-top : 20px">
                            <td align="center">Changed Date : </td>
                            <td align="center"><input type="date" id="changebatt" class="form-control" placeholder="Text input" style="width:200px"></td>
                        </tr>
                        
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id='change' data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal change batt beacon   -->


                <script type="text/javascript">
                        // show edit detail
                    function showdetail(id){
                        $.ajax({
                            url:"managesensoro/getdetail",
                            type: "POST",
                            cache: false,
                            data: "id="+id,
                            dataType:"JSON",
                            success:function(res){
                                console.log(JSON.stringify(res));
                                $("#senid").attr("value",res.senid);
                                $("#majordetail").attr("value",res.major);
                                $("#minordetail").attr("value",res.minor);
                                $("#store").attr("value",res.store);
                                if (res.type == "1") {
                                    $("#type1").attr("selected","selected");
                                }else{
                                    $("#type2").attr("selected","selected");
                                }
                                if (res.statusid == "1") {
                                    $("#status1").attr("selected","selected");
                                }if (res.statusid == "2") {
                                    $("#status2").attr("selected","selected");
                                }if (res.statusid == "3") {
                                    $("#status3").attr("selected","selected");
                                }
                            },
                            error:function(err){
                                console.log("error : "+err);
                            },
                        });
                    };

                    // show batt detail
                    function showdetailbatt(id){
                        $.ajax({
                            url:"managesensoro/getdetail",
                            type: "POST",
                            cache: false,
                            data: "id="+id,
                            dataType:"JSON",
                            success:function(res){
                                console.log(JSON.stringify(res));
                                $("#senidbatt").attr("value",res.senid);
                                $("#majorbatt").attr("value",res.major);
                                $("#minorbatt").attr("value",res.minor);
                            },
                            error:function(err){
                                console.log("error : "+err);
                            },
                        });
                    };

                    
                </script>


            </div>
            <div class="row">
             <div class="col-lg-12 " style=" margin-top: 20px;" >
                <ol class="breadcrumb"><li>-------------------------------</li></ol>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>All Sensoro</h2></center>
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <div class="input-group">
                                        <button type='button' class='btn btn-primary' data-toggle="modal" data-target="#myModal1">Create Sensoro + </button>
                                   
                                    
                                    <form action="<?php echo site_url('managestore/search');?>" method = "post">
                                    <input type="text" name="searchst" class="form-control input-sm pull-right" style="width: 200px; margin-top : 2px" placeholder="Search By Store Name">
                                    <div class="input-group-btn">
                                        <input class="btn btn-default" type="submit" name="btsave" value="Search">
                                     </div>
                                     </form>

                                </div>
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Store Name</td>
                                        <td>Major</td>
                                        <td>Minor</td>
                                        <td>Sensoro Type</td>
                                        <td>Battery Date</td>
                                        <td>Status</td>
                                        <td style="text-align: center">Action</td>
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
                                                echo "<td>".$r['major']."</td>";
                                                echo "<td>".$r['minor']."</td>";
                                                echo "<td>".$r['sensoro_type']."</td>";
                                                echo "<td>".substr($r['sensoro_date'],0,10)."</td>";
                                                echo "<td>".$r['status_sensoro_id']."</td>";
                                                echo "<td align= center>";
                                                echo "<button type='button' class='btn btn-success' onclick='showdetailbatt(".$r["sensoro_id"].")' data-toggle='modal' data-target='#myModal3' >Change Battery</button>";
                                                echo "&nbsp";
                                                echo "<button type='button' class='btn btn-warning' onclick='showdetail(".$r["sensoro_id"].")' data-toggle='modal' data-target='#myModal2' >Edit</button>";
                                                echo "&nbsp";
                                                echo anchor("managesensoro/del/".$r["sensoro_id"], "<button type='button' class='btn btn-danger'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                                                echo "</td>";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        }
                                     ?>
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
