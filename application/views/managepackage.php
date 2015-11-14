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
                                <li>
                                    <a href="<?=base_url()?>index.php/managestore">Manage Store</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqr">Manage QRCode</a>
                                </li>
                                <li >
                                    <a href="<?=base_url()?>index.php/managesensoro">Manage Khong</a>
                                </li>
                                <li class="active">
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
                <!-- /.row --> 
                <div class="col-lg-12">
                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal1" style="width:140px;margin-top:20px">+ New Package</button>
                    
                    <!-- modal add package -->
                    <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title" >Package Detail</h4>
                                </div>
                                <div class="modal-body" >
                                    <table width="80%" align="center" style="margin-top:20px">
                                        <!-- <form name="apppack" id="appback" action="<?php //echo site_url("managepackage/addpack");?>" method="post"> -->
                                            <tr >
                                                <td>Package Name :<td>
                                                <td><input type="text" name="cpname" id="cpname" class="form-control" style="width:120px"/></td>
                                                <td width="10%"></td>
                                                <td>Upload Limit :</td>
                                                <td><input type="number" name="cplimit" id="cplimit" class="form-control" min="1" style="width:100px"/></td>
                                            </tr>
                                            <tr><td>&nbsp</td></tr>
                                            <tr>
                                                <td>Package Description :<td>
                                                <td><textarea name="cpdes" id="cpdes" class="form-control" style="width:180px;height:80px;resize:none"></textarea></td>
                                                <td width="10%"></td>
                                                <td>Package Price :</td>
                                                <td><input type="number" name="cpprice" id="cpprice" class="form-control" min="0" style="width:100px"/></td>
                                            </tr>
                                            <tr><td>&nbsp</td></tr>
                                        </table>

                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $("#subaddpack").click(function() {
                                            $.ajax({
                                                url:"<?php echo site_url("managepackage/addpack");?>",
                                                type: "POST",
                                                cache: false,
                                                data: "cpname="+$("#cpname").val()+"&limit="+$("#cplimit").val()+"&des="+$("#cpdes").val()+"&price="+$("#cpprice").val(),
                                                dataType:"JSON",
                                                success:function(res){
                                                    // console.log(JSON.stringify(res));
                                                    // $("#pid").attr("value",res.pid);
                                                    // $("#pname").attr("value",res.pname);
                                                    // $("#pdes").text(res.pdes);
                                                    // $("#pprice").attr("value",res.pprice);
                                                    // $("#plimit").attr("value",res.pup);
                                                    // $("#adelinfo").attr("href","<?=base_url();?>index.php/managepackage/delpack/"+res.pid);
                                                    // $("#delpack").attr("style","width:80px;margin-right:20px;");
                                                },
                                                error:function(err){
                                                    console.log("error : "+err);
                                                },
                                            });
                                            location.reload("managepackage");
                                        });
                                    });
                                </script>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" id="subaddpack" data-dismiss="modal">Create Package</button>
                                    &nbsp&nbsp
                                    <!-- </form> -->
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end modal add package -->


                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#packk").change(function(){
                            $.ajax({
                                url:"<?php echo site_url("managepackage/getpack");?>",
                                type: "POST",
                                cache: false,
                                data: "id="+$("#packk").val(),
                                dataType:"JSON",
                                success:function(res){
                                    console.log(JSON.stringify(res));
                                    $("#pid").attr("value",res.pid);
                                    $("#pname").attr("value",res.pname);
                                    $("#pdes").text(res.pdes);
                                    $("#pprice").attr("value",res.pprice);
                                    $("#plimit").attr("value",res.pup);
                                    $("#adelinfo").attr("href","<?=base_url();?>index.php/managepackage/delpack/"+res.pid);
                                    $("#delpack").attr("style","width:80px;margin-right:20px;");
                                },
                                error:function(err){
                                    console.log("error : "+err);
                                },
                            });
                        });
                    });
                </script>

                <div style="text-align:center"><h3>Choose Package</h3></div>
                <div class="col-lg-12" style="text-align:center;margin-top:20px">
                <table align="center">
                    <tr>
                        <td>
                            <select class="form-control col-lg-12" id="packk" name="pack" style="width:300px ;">
                                <option>Please Select Package</option>
                                <?php
                                    foreach ($pack as $r) {
                                        echo "<option value='".$r['package_id']."'>Package : ".$r['package_name']."</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8" style="text-align:center;margin-top:40px">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-fw fa-wrench"></i> Package Setting </h3>
                        </div>
                        <div class="panel-body">
                            <table width="100%">
                                <form name="info" action="<?php echo site_url("managepackage/editpack");?>" method="post">
                                    <input type="hidden" name="pid" id="pid" value="">
                                    <tr>
                                        <td>Package Name :<td>
                                        <td><input type="text" name="pname" id="pname" class="form-control" style="width:120px"/></td>
                                        <td width="10%"></td>
                                        <td>Upload Limit :</td>
                                        <td><input type="number" name="plimit" id="plimit" class="form-control" min="1" style="width:100px"/></td>
                                    </tr>
                                    <tr><td>&nbsp</td></tr>
                                    <tr>
                                        <td>Package Description :<td>
                                        <td><textarea name="pdes" id="pdes" class="form-control" style="width:180px;height:80px;resize:none"></textarea></td>
                                        <td width="10%"></td>
                                        <td>Package Price :</td>
                                        <td><input type="number" name="pprice" id="pprice" class="form-control" min="0" style="width:100px"/></td>
                                    </tr>
                                    <tr><td>&nbsp</td></tr>
                            </table>
                                <div style="margin-top:20px">
                                    <a href="" onclick="javascript:return confirm('Do you want to delete?');" id="adelinfo">
                                        <button class="btn btn-danger" id="delpack" style="width:80px;margin-right:20px;display: none;">Delete</button>
                                    </a>
                                    <button class="btn btn-primary" type="submit" style="width:80px;margin-left:20px">Save</button>
                            </form>
                            </div>
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
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>