<html>
<head>
  <meta name="description" content="QR Code scanner" />
  <meta name="language" content="English" />
  <meta name="Revisit-After" content="1 Days"/>
  <meta name="robots" content="index, follow"/>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet"/>
  <!-- Custom Fonts -->
  <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<title>Telekhong QR</title>

<style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
  width: 100%;
}
#header{
    background:white;
    margin-bottom:15px;
}
#mainbody{
    background: white;
    width:100%;
  display:none;
}

#v{
    width:100%;
    height:100%;
}
#qr-canvas{
    display:none;
}
#qrfile{
    width:320px;
    height:240px;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
  margin-left:35px;
  margin-right:35px;
  padding-top:10px;
  padding-bottom:10px;
  border-radius:20px;
}
.selector{
    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv
{
    width:100%;
    height:50%;

}



</style>

<script src="<?=base_url()?>assets/js/webqr.js"></script>
    <script src="<?=base_url()?>assets/js/llqrcode.js"></script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>

<body style="background-image:url('<?=base_url()?>assets/Image/backgroundqr1.jpg');background-size: 100% 100%;">
   <div id="page-wrapper">
          <div class="container-fluid">
  <div id="main">
  <div id="header">
    <p id="mp1">
    QR Code scanner
    </p>
  </div>
<div id="mainbody">
            <div class="selector" id="webcamimg"   align="left" ></div>
            <div class="selector" id="qrimg"  align="right"></div>

            <div id="outdiv">
            </div>
            
      <?php $aratri = array('id' => 'qrform' ); echo form_open("webqr/checkqr",$aratri)?>
        <input type="text"  style="width:400px;height:30px;text-align:center;border:0px;font-size:18px;color:#197519" id="result" name="qrcode" value="">
      <?php echo form_close();?>

      <?php
      if ($complete != null) {
        echo "<script type='text/javascript'>
                alert('";
                  echo $complete;
                  echo "');
              </script>";
      }

    ?>

</div>&nbsp;
</div>
<canvas id="qr-canvas" width="800" height="600"></canvas>
<script type="text/javascript">load();</script>
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
</body>

</html>