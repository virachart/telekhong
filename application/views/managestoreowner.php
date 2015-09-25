<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Store</title>
    <link type="text/css" href="css/bootstrap.min.css" />
        
        <script src="<?=base_url()?>assets/js/jquery.js"></script>
       
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.cropit.js"></script>
    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <script type="text/javascript">
                    function delstore(id){
                        $.ajax({
                            url:"<?php echo site_url("store/del");?>",
                            type: "POST",
                            cache: false,
                            data: "id="+id,
                            
                        });
                        $(location).attr('href','<?php echo site_url("store");?>')
                    };



    </script>
    <div id="page-wrapper">
    <center><h1>Edit Store</h1></center>
    <?php 
        echo form_open_multipart("managestoreowner/edit/");
    ?>
    <div style="margin-top:40px">
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
    <table align="center">
        <tr>
            <td>Strore Name : &nbsp</td>
            <td><input type="text" name="name" class="form-control" style="width:200px" value="<?php echo $store['store_name']; ?>"></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Address : </td>
            <td><textarea class="form-control" name="address" rows="3" style="width:250px"><?php echo $store['address']; ?></textarea></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Telepphone : </td>
            <td><input type="text" name="tel" class="form-control" style="width:200px" value="<?php echo $store['tel']; ?>"></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Detail : </td>
            <td><textarea class="form-control" name="detail" rows="3" style="width:250px"><?php echo $store['detail']; ?></textarea></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Opentime : </td>
            <td class="input-group ">
               <input id="time1" type="time" class="form-control input-small" name="opti"  value="<?php $hhop=substr($store['open_time'], 0,2); $mmop=substr($store['open_time'], 3,2); echo $hhop.":".$mmop; ?>"> 
                </td>
        </tr>
        <tr>
            <td>&nbsp</td> 
                
        </tr>
        <tr>
            <td>Closetime : </td> 
                <td class="input-group">
                <input id="time2" type="time" class="form-control input-small" name="clti" value="<?php $hhcl=substr($store['open_time'], 8,2); $mmcl=substr($store['open_time'], 11,2); echo $hhcl.":".$mmcl; ?>">
                </td> 
                
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Store Picture : </td>
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal" >Image Upload</button>
                <label>(Picture size less than 1024x1024 pixel is best size)</label><br>
                <p>&nbsp</p>
                <img src="<?php echo base_url("images/store/".$store['picture_store']);?>" id="showstoreimage" style="width:120px; height:120px;">
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
                                            <input type="hidden" name="image-data" id="hidden-image-data" class="hidden-image-data" />


                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="export btn btn-primary" disabled id="bt1" data-dismiss="modal" onclick="hiddenpic()">Upload</button>
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
                        <script>
                            function hiddenpic(){
                                $("#showstoreimage").attr("style","display:none;");

                            }
                        </script>
            </td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr><td></td><td class="cropped"></td></tr>
        <tr><td>&nbsp</td></tr> 
        </table>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="text-align:center" >
            <button type='button' class='btn btn-danger ' style="margin-right:30px" data-toggle='modal1' data-target='#myModal'>Delete Store</button>
            <?php echo anchor("store","<button type='button' style='width:70px' class='btn btn-default'>Cancle</button>"); ?>
           &nbsp&nbsp &nbsp&nbsp
           <input class="btn btn-primary" style="width:70px" type="submit" name="btsave" value="Save"> 
        
        <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirm</h4>
                    </div>
                    <div class="modal-body">
                    <p>This store was deleted , Are you sure ?</p>
                    </div>
                    <div class="modal-footer">
                    
                    <button type='button' class='btn btn-default' data-dismiss='modal' onclick="delstore(<?php echo $this->session->userdata('storeid'); ?>)" >Yes</button>
                    
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>
      
                </div>
            </div>
        </div>
    
    <?php 
        echo form_close();
    ?>

<center>
            <div class="row">
                <div class="col-lg-12" style="margin-top: 40px">
                   <ol class="breadcrumb">
                    <li>You can contact us in this page </li>
                    <li> facebook : www.facebook.com/Telekhong</li>
                    <li> KingMongkutt's University of technology thonburi</li>
                 </ol>
             </div>
         </div>
     </center>
 </div>
</body>
</html>