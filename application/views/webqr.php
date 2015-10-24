<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="description" content="HTML5 QR code Reader : A cross platform HTML5 QR code reader.">
    <script src="<?=base_url()?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/html5-qrcode.min.js"></script>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet"/>
    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <title>QR code Reader</title>
</head>

  <body style="background-image:url('<?=base_url()?>assets/Image/backgroundqr1.jpg');background-size: 100% 100%;">
  

  <span class="pull right"><a href="<?php echo site_url("webqr/logout");?>"><button>logout</button></a></span>
      <div id="page-wrapper">
          <div class="container-fluid">           
              <center><h1>QR code Reader</h1></center>
                <div class="col-xs-6 col-lg-4"></div>
                    <div style="text-align:center">
                          <div id="reader" style="width:100%;height:50%;" class="col-xs-6 col-lg-4">

                              <script>
                                    $(document).ready(function(){
                                      $('#reader').html5_qrcode(function(data){
                                          $('#qrcodech').attr("value",data);
                                          $("#qrform").submit();
                                        },
                                        function(error){
                                          $('#read_error').html(error);
                                        }, function(videoError){
                                          $('#vid_error').html(videoError);
                                        }
                                      );
                                    });

                              </script>
                            
                            <canvas id="qr-canvas" width="298px" height="248px" style="display:none;"></canvas>
                          </div>
                        </div>      
                    <div style="text-align:center;margin-top:20px" class="col-lg-12">
                      <!--<h3 >Result</h3> -->
                        <!-- <span id="read"  style="color:#197519;font-size:18px"></span> -->
                        <?php $aratri = array('id' => 'qrform' ); echo form_open("webqr/checkqr",$aratri)?>
                          <input type="text"  style="width:200px;height:30px;text-align:center;border:0px;font-size:18px;color:#197519" id="qrcodech" name="qrcode" value="">
                        <?php echo form_close();?>
                          <br>
                          <br>
                          
                      <!-- <h4 >Read Error (Debug only)</h4>
                        <span >Will constantly show a message, can be ignored</span>
                        <span id="read_error" style="color:#A30000;">Couldn't find enough finder patterns</span>

                          <br>
                      <h6 >Video Error</h6> -->
                        <span id="vid_error" ></span>
                    </div>
                          <br>
                          <br>
                          <br>
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

    <?php
      if ($complete != null) {
        echo "<script type='text/javascript'>
                alert('";
                  echo $complete;
                  echo "');
              </script>";
      }

    ?>


    

</body>
</html>