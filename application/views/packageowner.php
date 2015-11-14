<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telekhong.Me</title>
</head>
<body >
    
    <!-- Core bootstrap js -->
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
<!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">  

    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    

<style>
a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}

body {
      position: relative; 
  }
  #topic {padding-top:30px;height:20vh;color:#333; background-color:#fff;background-size: 100% 100%;
    background-repeat: no-repeat;}
  #services {padding-top:30px;padding-bottom:30px;height:50vh;color: #fff; background-color:#3972ac ;background-size: 100% 100%;
    background-repeat: no-repeat;}
  #statistics {padding-top:20px;height:80vh;color: #fff; background-color:#009933 ;background-size: 100% 100%;
    background-repeat: no-repeat;}    
  #package {padding-top:50px;height:100vh;color: #fff; background-image:url("<?=base_url()?>assets/Image/bg4.jpg");background-size: 100% 100%;
    background-repeat: no-repeat;}
  #payment {padding-top:30px;padding-bottom:30px;height:40vh;color: #fff; background-color:#b30047 ;background-size: 100% 100%;
    background-repeat: no-repeat;}
  #khong {padding-top:30px;padding-bottom:30px;height:60vh;color: #fff; background-image:url("<?=base_url()?>assets/Image/bgk.jpg") ;background-size: 100% 100%;
    background-repeat: no-repeat;}
  #ourteam {padding-top:30px;padding-bottom:30px;height:60vh;color: #333; background-color:#fff ;background-size: 100% 100%;
    background-repeat: no-repeat;}
  #green {padding-top:30px;padding-bottom:30px;height:60vh;color: #fff; background-image:url("<?=base_url()?>assets/Image/bg8.jpg") ;background-size: 100% 100%;
    background-repeat: no-repeat;}          
</style>

        

    
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?=base_url()?>index.php/auth">Telekhong.Me</a>
    </div>
    <div>
      <div class="collapse navbar-collapse col-lg-10" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#service">Service</a></li>
          <!-- <li><a href="#about">About Us</a></li> -->
          <li><a href="#policy">Policy</a></li>
        </ul>
        
      </div>
        <ul class="nav navbar-right top-nav" >
            <a href="<?php echo site_url("auth/login");?>"><img src="<?=base_url()?>images/icon/facebook-login.png" alt="HTML5 Icon" style="width:162px;height:35px;margin-top:7px;border-radius:3px"></a>
        </ul>
    </div>
  </div>
</nav>


<section id="topic" class="topic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Telekhong.<span style="color:#FF6600;">Me</span></h2>
                    <p><span style="color:#FF6600;">Join with us join with </span>"Telekhong"</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
</section>
<section id="services" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-upload fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Upload</strong>
                                </h4>
                                <p>Upload your message and broadcast to any people.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-line-chart fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Statistics</strong>
                                </h4>
                                <p>Learning and trends analysis from statistics.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-qrcode fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>QR Code</strong>
                                </h4>
                                <p>Customer analysis from qr code.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Cloud</strong>
                                </h4>
                                <p>Our system was implemented on cloud service.</p>
                                
                            </div>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section id="statistics" class="statistics" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Statistics</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-pie-chart fa-stack-1x text-success"></i>
                            </span>
                                <h4>
                                    <strong>General Chart</strong>
                                </h4>
                                <p>Show ratio of chart who use application .</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-line-chart fa-stack-1x text-success"></i>
                            </span>
                                <h4>
                                    <strong>Store Follow Chart</strong>
                                </h4>
                                <p>Show amount of people who followed your store .</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-star fa-stack-1x text-success"></i>
                            </span>
                                <h4>
                                    <strong>Favorite Ranking</strong>
                                </h4>
                                <p>Show rank of top 5 message group by favorite .</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-envelope fa-stack-1x text-success"></i>
                            </span>
                                <h4>
                                    <strong>Message Received</strong>
                                </h4>
                                <p>Show amount of people who received message.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-bar-chart fa-stack-1x text-success"></i>
                                </span>
                                    <h4>
                                        <strong>Message receive Chart</strong>
                                    </h4>
                                    <p>Show chart of people who received message per day.</p>
                                    
                                </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-repeat fa-stack-1x text-success"></i>
                            </span>
                                <h4>
                                    <strong>Come to store Chart</strong>
                                </h4>
                                <p>Show chart of people who received message and came to store.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-qrcode fa-stack-1x text-success"></i>
                            </span>
                                <h4>
                                    <strong>First QR Chart</strong>
                                </h4>
                                <p>Show chart of people who first time for use qr code from message.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-retweet fa-stack-1x text-success"></i>
                            </span>
                                <h4>
                                    <strong>Second or More QR Chart</strong>
                                </h4>
                                <p>Show chart of people who came to use qr code second or more times.</p>
                                
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section id="package" class="package" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1" style="background-color:rgba(0,0,0,0.5);border-radius:5px">
                    <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-certificate fa-stack-1x text-warning"></i>
                    </span><h2>Package</h2>
                    <hr class="small">
                    <table style="width:100%;color:#000000;background-color:#fff;border-style:hidden;border-radius:5px">
                <tr>
                    <th colspan="2" style="width:10%">Package</th>
                    <td>Bronze</td>
                    <td>Silver</td>
                    <td>Gold</td>
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Upload Limit</th>
                    <td>12</td>
                    <td>20</td>
                    <td>30</td>       
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Khong Use</th>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th rowspan="9" style="width:10%">Statistics</th>

                </tr>
                <tr>
                    <td >Follow Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Favorite Ranking</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Message Receive</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >General Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Message Receive Chart</td>      
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Come to Store Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >QR Buy Chart</td>      
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >QR Buy Again Chart</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Service Charge</th>
                    <td>1,200 Bath x 12 Month</td>
                    <td>2,000 Bath x 12 Month</td>
                    <td>3,500 Bath x 12 Month</td>
                </tr>
            </table>
            
            <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: center;    
            }
            </style>
            <br>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section id="payment" class="payment" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 ">
                    <div class="col-md-3 col-sm-6">
                        <h3>
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-credit-card fa-stack-1x "></i>
                            </span>
                        </h3>
                    </div>
                    <div class="col-md-9 col-sm-6" style="text-align:left"><h2>Payment</h2>
                    <hr class="small">
                    <p>All owner's store must have paysbuy account for payment.&nbsp&nbsp<button class="btn btn-warning"><a href="https://www.paysbuy.com/aboutus.aspx"> What is paysbuy ?</a></button></p>
                    
                    </div>
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section id="khong" class="khong" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 ">
                    <div class="col-md-3 col-sm-6">
                        <h3>
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-bullseye fa-stack-1x "></i>
                            </span>
                        </h3>
                    </div>
                    <div class="col-md-9 col-sm-6" style="text-align:left"><h2>Khong</h2>
                    <hr class="small">
                    <p>Khong is iBeacon device bluetooth 4.0. It works by signal broadcasting around the area . When telekhong application come in area ( switch on bluetooth & 3g or wifi ) Khong will send a key to mobile application and application use a key to get message for show on application from telekhong server.</p>
                    <img src="<?=base_url()?>images/icon/yunzi-1.jpg" style="width:180px;height:180px;border-radius:3px;" >
                    <img src="<?=base_url()?>images/icon/yunzi-3.jpeg" style="width:180px;height:180px;border-radius:3px;" >
                    <img src="<?=base_url()?>images/icon/yunzi-2.png" style="width:180px;height:180px;border-radius:3px;" >
                    </div>
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section id="ourteam" class="ourteam" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Team</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?=base_url()?>images/icon/firstpic.jpg" style="width:180px;height:180px;border-radius:100px;" >
                                <h4>
                                    <strong>Virachart Voratinun</strong>
                                </h4>
                                <p>Back-End Developer</p>
                            </div>    
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?=base_url()?>images/icon/jobpic.jpg" style="width:180px;height:180px;border-radius:100px;" >
                                <h4>
                                    <strong>Suppakit Wongrueangsaeng</strong>
                                </h4>
                                <p>Front-End Developer</p>
                            </div>    
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?=base_url()?>images/icon/bankpic.jpg" style="width:180px;height:180px;border-radius:100px;" >
                                <h4>
                                    <strong>Tosaphon Raksasiripong</strong>
                                </h4>
                                <p>Application Developer</p>
                            </div>    
                        </div>
                    </div>
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section id="green" class="green" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1" style="background-color:rgba(0,0,0,0.5)";>
                    <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-recycle fa-stack-1x text-success"></i>
                    </span><h2>Environment</h2>
                    <hr class="small">
                    <h4>Telekhong didn't used paper.</h4>
                    <h5>Come to save the world with us.</h5>
                    <br>
                    <br>
                    <h3 style="color:#FF6600;">Telekhong.Me</h3>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>

</body>
</html>