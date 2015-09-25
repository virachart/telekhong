
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.cropit.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet"/>

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet"/>

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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

            function edateCheck(){
                var beginDate = new Date(document.getElementById("beda").value)
                var expireDate = new Date(document.getElementById("exda").value)
                if (beginDate > expireDate) {
                    alert("Expire Date has invalid");
                    $('#exda').val("0000-00-00");            
                }
            };

            function checkfield() {

                if (mess.value == '') {
                    alert("Please input message topic.");
                    document.getElementById("mess").focus();
                    return false;
                }else if (des.value == '') {
                    alert("Please input message description.");
                    document.getElementById("des").focus();
                    return false;
                }else if (cata.value == '') {
                    alert("Please choose message catagory.");
                    document.getElementById("cata").focus();
                    return false;
                }else if (beda.value == '') {
                    alert("Please input begin date.");
                    document.getElementById("beda").focus();
                    return false;
                }else if (exda.value == '') {
                    alert("Please input expire date.");
                    document.getElementById("exda").focus();
                    return false;
                }else if (document.getElementById("image").value == '') {
                    alert("Please upload store picture.");
                    document.getElementById("image").focus();
                    return false;
                }
                return true;
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
                


                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">

                    <center><h3>Create Message</h3></center><hr>
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

                <form action="<?php echo site_url();?>/createinfo/create" method="post" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="javascript:return checkfield();">
                    <!-- store name -->
                    <div class="col-lg-6" style="text-align:right;" >Topic :</div>
                    <div class="col-lg-6"><input type="text" name="name" class="form-control" placeholder="Message Topic" style="width:300px" id="mess"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- Information Description -->
                    <div class="col-lg-6" style="text-align:right;" >Description :</div>
                    <div class="col-lg-6"><textarea class="form-control" name="desc" rows="3" style="width:250px" placeholder="Description" id="des"></textarea></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- Catagory -->
                    <div class="col-lg-6" style="text-align:right;" >Catagory :</div>
                    <div class="col-lg-6">
                        <select class="form-control" name="cat" style="width:300px ;" id="cata">
                            <option hidden value="">Select Catagory</option>
                            <option value="food">Food</option>
                            <option value="fashion">Fashion</option>
                            <option value="sport">Sport</option>
                            <option value="entertain">Entertainment</option>
                            <option value="book">Book</option>
                            <option value="it">Technology</option>
                            <option value="healty">Healty</option>
                        </select>
                    </div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>


                    <!-- Begin Date -->
                    <div class="col-lg-6" style="text-align:right;" >Begin Date :</div>
                    <div class="col-lg-6">
                        <input type="date" name="beda" id="beda" class="form-control" style="width:280px ; display : inline;" >
                    </div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>


                    <!-- Expire Date -->
                    <div class="col-lg-6" style="text-align:right;" >Expire Date :</div>
                    <div class="col-lg-6">
                        <input type="date" name="exda" id="exda" class="form-control" style="width:280px ; display : inline;" oninput="edateCheck()" value="">
                    </div>

                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- Info picture -->
                    <div class="col-lg-6" style="text-align:right;" >Picture :</div>
                    <div class="col-lg-6">
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
                                            <input type="file" id="image"  name='picture' class="cropit-image-input" onchange="enablebt();" >
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
                                    </div>
                        <script>

                            $('.image-editor').cropit();
                            $('.export').click(function() {
                              var imageData = $('.image-editor').cropit('export');
                              $('.cropped').empty();
                              $('.cropped').append('<img src="'+imageData+'" height="120" width="120">');

                          });
                            $('form').submit(function() {
                                // Move cropped image data to hidden input
                                var imageData = $('.image-editor').cropit('export');
                                $('.hidden-image-data').val(imageData);
                                return true;
                            });

                        </script>
                        <script>
                            function enablebt(){
                                document.getElementById("bt1").disabled = false;

                            }
                        </script>

                    </div>

                    <div class="col-lg-12" style="margin-top:10px;"></div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                    <div class="cropped"></div>
                    </div>
                    <div class="col-lg-12" style="margin-top:20px;"></div>
                    <div class="col-lg-6" style="text-align:right;" >Do you want QR Code? :</div>
                    <div class="col-lg-6">

                        <span class="col-lg-1"><input type="checkbox" name="qr" value="1"></span> QR Code<br>


                    </div>

                    <div class="col-lg-12" style="text-align:center;margin-top:30px; margin-down: 30px" >

                        <?php echo anchor("store", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                        <input class="btn btn-success" type="submit" name="btsave" value="Create" style="margin-left: 30px">

                    </div>		
                </form>

                <div>
                 <br>
             </div>

             <center>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12" style="margin-top: 40px">
                            <ol class="breadcrumb">
                                <li>You can contact us in this page </li>
                                <li> facebook : www.facebook.com/Telekhong</li>
                                <li> KingMongkutt's University of technology thonburi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </center>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    </div>
</div>
<!-- /#wrapper -->



</body>

</html>
