<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login facebook</title>
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
    <script type="text/javascript" src="<?=base_url()?>assets/js/jssor.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
                , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
                , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
                , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
                , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
                , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
                , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
                , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
                , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
                , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

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
  #home {padding-top:50px;height:720px;color: #fff; background-image:url("<?=base_url()?>assets/Image/bg7.jpg") ;}
  #about {padding-top:50px;height:720px;color: #fff; background-image:url("<?=base_url()?>assets/Image/bg6.jpg") ;}
  #policy {padding-top:50px;height:720px;color: #fff; background-image:url("<?=base_url()?>assets/Image/background2.jpg") ;}
</style>
<style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(<?=base_url()?>images/icon/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <style>
            /* jssor slider thumbnail navigator skin 01 css */
            /*
            .jssort01 .p            (normal)
            .jssort01 .p:hover      (normal mouseover)
            .jssort01 .p.pav        (active)
            .jssort01 .p.pdn        (mousedown)
            */

            .jssort01 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 800px;
                height: 100px;
            }

                .jssort01 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                }

                .jssort01 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                    box-sizing: content-box;
                    background: url(<?=base_url()?>images/icon/t01.png) -800px -800px no-repeat;
                    _background: none;
                }

                .jssort01 .pav .c {
                    top: 2px;
                    _top: 0px;
                    left: 2px;
                    _left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 0px solid;
                    _border: #fff 2px solid;
                    background-position: 50% 50%;
                }

                .jssort01 .p:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: #fff 1px solid;
                    background-position: 50% 50%;
                }

                .jssort01 .p.pdn .c {
                    background-position: 50% 50%;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                }

                * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
                    /* ie quirks mode adjust */
                    width /**/: 72px;
                    height /**/: 72px;
                }
                #jumbo {
                /* all other browsers */
                background: none;
                text-align: center;
                margin-top: 60px;
                -webkit-animation: fadein 3s;
                }
                #jumbo2 {
                /* all other browsers */
                
                -webkit-animation: fadein 5s;
                }
                @-webkit-keyframes fadein {
                   from { opacity: 0; }
                   to   { opacity: 1; }
                }
        </style>

	
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Telekhong.Me</a>
    </div>
    <div>
      <div class="collapse navbar-collapse col-lg-10" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#policy">Policy</a></li>
        </ul>
        
      </div>
        <ul class="nav navbar-right top-nav" >
            <li style="margin-top:7px"><button type="button" class="btn btn-primary" ><a href="<?php echo site_url("auth/login");?>">Sign up or Sign in</a></button></li>
        </ul>
    </div>
  </div>
</nav>



<div id="home" class="container-fluid ">
    <div class="jumbotron" id="jumbo">
        <h1>WELCOME</h1><br>
        <h2 id="jumbo2">"<span style="color:#FF6600;">Telekhong</span> Everything jingabell "</h2>
    </div>
    <br>
</div>
<div id="about" class="container-fluid">
  <h1 style="margin-left:40px">About Us</h1>
  <div id="slider1_container" class="col-lg-8"style="position: relative; top: 20px; left: 40px; width: 800px;
        height: 456px; background: #191919; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?=base_url()?>images/icon/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">
            <div>
                <img u="image" src="<?=base_url()?>images/homeimg1.jpg" />
                
            </div>
            <div>
                <img u="image" src="<?=base_url()?>images/homeimg2.jpg" />
                
            </div>
            <div>
                <img u="image" src="<?=base_url()?>images/homeimg3.jpg" />
                
            </div>
            <div>
                <img u="image" src="<?=base_url()?>images/homeimg4.jpg" />
                
            </div>
            <div>
                <img u="image" src="<?=base_url()?>images/homeimg5.jpg" />
                
            </div>
            
        </div>
         <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
        </span>
        <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                    <div class=c></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
    </div>
    <div class="col-lg-4" style="margin-left:60px;margin-top:20px;background-color:rgba(0,0,0,0.7);height:456px;">
        <h1 >What is "<span style="color:#FF6600;">Telekhong</span>"</h1>
        <p>Telekhong Description (ยังไม่คิดคำอธิบาย)</p>
    </div>
</div>
<div id="policy" class="container-fluid">
  <center><h1>Policy</h1></center>
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="overflow-y: scroll;height:520px;background-color:#fff;margin-top:20px;border-radius: 10px;border-color:#FF6600;border-style: solid;color:#303030;">
        <h2>นโยบาย ของ Telekhong</h2> 
        <p><b>บทนำ</b></p>
<ul>
   <li><p>1.นโยบายนี้ จัดทำขึ้นเพื่อกลุ่มลูกค้าที่สมัครใช้บริการ Telekhong ทุกท่าน</p></li>
   <li><p>2.Telekhong เป็นบริการส่งข่าวสาร ผ่านอุปกรณ์ ส่งสัญญาณ ibeacon สู่แอพลิเคชั่นบนมือถือระบบปฏิบัติการ ios ของผู้ใช้ ซึ่งจะเปิดให้กลุ่มลูกค้าสามารถสมัครใช้บริการได้ ผ่านเว็บไซต์ telekhong.me</p></li>
   <li><p>3.ลูกค้า คือบุคคลหรือกลุ่มบุคคลที่ต้องการจะส่งข้อมูลข่าวสารใดๆผ่านทางบริการ telekhong</p></li>
   <li><p>4.ผู้ใช้ คือ บุคคลที่่ใช้แอพลิเคชั่น telekhong ทุกคน</p></li>
</ul>
<p><b>นโยบายสำหรับผู้เช่าบริการ</b></p>
<ul>
    <li><p>1.ลูกค้าสามารถสมัครใช้บริการการ telekhong ได้ ผ่านทาง เว็บไซต์ telekhong.me เท่านั้น
</p></li>
    <li><p>2.ลูกค้าสามารถสร้างร้านค้าบนเว็บไซต์ telekhong.me ได้. โดยมีการชำระเงิน ผ่าน ระบบ paysbuy </p></li>
    <li><p>3.เมื่อลูกค้าสร้างร้านค้าแล้ว ลูกค้าจะได้รับ อุปกรณ์ ibeacon 1-2 ตัว เพื่อใช้ในการกระจายข้อมูลข่าวสาร</p></li>
    <li><p>4.อุปกรณ์ ibeacon ที่ลูกค้าได้รับ มีไว้ "เช่า" เพื่อติดตามจุดเพื่อกระจายข่าวสารเท่านั้นเป็นทรัพย์สินของบริษัท ห้ามวางใกล้ความร้อน ในน้ำ หรือการดัดแปลงใดๆ ถือเป็นความผิด</p></li>
    <li><p>5.เมื่อลูกค้าสร้างร้านค้าจะมีการเก็บค่าประกันอุปกรณ์ ibeacon. และลูกค้าต้องชำระค่าบริการ ทุกเดือน ตามราคาของ แต่ละ package</p></li>
    <li><p>6.package คือ ระดับ ของบริการต่างๆ ซึ่ง จะมีฟังก์ชั่น และราคาค่าบริการแตกต่างกันไป</p></li>
    <li><p>7.การล๊อคอิน สมัครสมาชิก ของลูกค้าและผู้ใช้ สามารถสมัครได้ผ่านช่องทางของ facebook เท่านั้น</p></li>
    <li><p>8.ลูกค้าที่มีการสมัครใช้บริการตั้งแต่ระดับ silver ขึ้นไป สามารถดูข้อมูลสถิติ ของผู้ใช้ ซึ่งจะดึงข้อมูลของผู้ใช้บางส่วน จากการร้องขอผ่านทาง facebook </p></li>
    <li><p>9.เมื่อลูกค้าขาดการชำระเงินครบ 3 เดือน บริษัทมีสิทธิ ปิดร้านของลูกค้านั้นๆ </p></li>
    <li><p>10.ลูกค้าสามารถยกเลิกบริการได้ โดยนำอุปกรณ์ ibeacon คืนกับบริษัท หากอุปกรณ์ได้รับความเสียหาย หรือสูญหาย ทางบริษัทจะทำการยึดเงินประกันอุปกรณ์</p></li>
</ul>
    </div>
    <div class="col-lg-3"></div>

</div>


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