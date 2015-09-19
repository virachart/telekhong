<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Telekhong</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.cropit.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body onload="showtab1()">

    

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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope"></i> <b class="caret"></b></a>
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
                            <li class="active">
                                <a href="<?=base_url()?>index.php/statistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/payment"><i class="fa fa-fw fa-table"></i> Payment</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/contact"><i class="fa fa-fw fa-edit"></i> Contact</a>
                            </li>

                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
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
                                </ul>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/package"><i class="fa fa-fw fa-arrows-v"></i> Package</a>
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
                                Statistics
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-desktop"></i>  <a href="<?=base_url()?>store">store</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-bar-chart-o"></i> Statistics
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <style>
      .cropit-image-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 400px;
        height: 400px;
        cursor: move;
      }
      .cropit-image-background {
        opacity: .2;
        cursor: auto;
      }
      .image-size-label {
        margin-top: 10px;
      }
      input {
        display: block;
      }
      
    </style>
  </head>
  <body>
    <script>
    function enablebt(){
        document.getElementById("bt1").disabled = false;

    }
    </script>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal" >Image Upload</button>
    <div class="modal fade" id="modal" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Image Upload</h4>
                </div>
                <div class="modal-body"style="padding:20px 50px 20px 50px;">
                    <p style="text-align:center;color:red">You can upload image.jpg/.png/.gif/.jpeg only ! </p>
                    <div class="image-editor" style="margin-left:50px">
                        <input type="file" class="cropit-image-input" onchange="enablebt();" >
                        <div class="cropit-image-preview" ></div>
                          <div class="image-size-label">
                            Resize image
                          </div>
                        <input type="range" class="cropit-image-zoom-input" style="width:400px">
                        <input type="hidden" name="image-data" class="hidden-image-data" />
                        
          
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="export btn btn-primary" disabled id="bt1" data-dismiss="modal">Upload</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    
<div class="cropped" style="height:400px;width:400px;">

</div>
    <script>
      $(function() {
        $('.image-editor').cropit();
        $('.export').click(function() {
          var imageData = $('.image-editor').cropit('export');
          $('.cropped').empty();
          $('.cropped').append('<img src="'+imageData+'" height="100" width="100">');
        });
      });
    </script>



</body>

</html>