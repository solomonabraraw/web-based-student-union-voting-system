
<html>
<head>
  <!-- <title>Open Tender For ASU</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css2/bootstrap.min.css">
 <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
<link rel="stylesheet" href="htt<?php
session_start();

if(isset($_session['counter']))
    $_session['counter']+=1;
    else
    $_session['counter']=1;
    ?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jssor.slider-22.2.10.mini.js" type="text/javascript"></script>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
    #login
{
    margin-top: 0px;
    background-color: #718076;
    height: 220px;
    width: auto;
}
#content
{
    background-color: #dfdfdf;
    width: 740px;
    height: 600px;
    margin-left: 230px;
    margin-top: 7px;
    overflow-x: hidden;
    overflow-y: hidden;
}
#rightside
{
    background-color: #508abb;
    width: 220px;
    height: 590px;
    float: right;
    margin-top: 5px;
    margin-right: 10px;
}
#leftside
{
    background-color: #508abb;
    width: 220px;
    height: 590px;
    float: left;
    margin-top: 10px;
}
#footer
{
    background-color: #508abb;
    
    height: 590px;
    
    margin-top: 10px;
}
#calander
{
    margin-top: 1px;
    padding-top: 0px;
    width: auto;
    height: 190px;
}
#myBtn {
      width: 60px;
      display: none;
      position: fixed;
      bottom: 13px;
      right: 80px;
      font-size: 18px;
      border-radius: 150px;;
      outline: none;
      color: #fff;
      transition: 0.8s ease;
      opacity: 0.8;
      background-color: #96a0a0;
      cursor: pointer;
      padding: 2px;
      height: 50px;
      
}
#myBtn:hover {
  background-color: black;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #dedede;
    box-sizing: border-box;
}
hr.style-five {
    border: 0;
    height: 0; /* Firefox... */
    box-shadow: 0 0 10px 1px black;
}
hr.style-five:after {  /* Not really supposed to work, but does */
    content: "\00a0";  /* Prevent margin collapse */
}
.jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
        .jssora02l.jssora02lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora02r.jssora02rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
</style>
<script>
function show_password() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    }
    else {
        x.type = "password";
    }
}


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},
              {b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},
              {b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},
              {b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},
              {b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},
              {b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},
              {b:11000,d:500,c:{x:-87.50,t:87.50}}],
              [{b:0,d:600,x:410,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,
              o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},
              {b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},
              {b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},
              {b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},
              {b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 720);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 20);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
        });
    </script>
</head>
<body>
<div id="container">
        <div id="header">
        <?php
        include("headerhome.php");
       ?>   
        </div>
        <div id="menu">
        <?php
        include("menu.php");
        ?>
    </div>

                <div id="leftside">
                        <?php
                        include("homesidemenu.php");
                       ?>      
                </div>
                <div id="rightside">
                    <div id="login">
                    <img src="images/Online.png" alt="" height="220" width="220"/>
                    </div> 
                    <div id="calander">
                    <b style="color: #12d7ed;">Calander</b>
                        <?php
                        include("calander.php");
                        ?>
                    </div>    
                </div>
                <div id="content">
                <br>
    <div id="jssor_1" style="position:relative;margin:1px auto;
      top:1px;left:1px;width:650px;height:400px;
      overflow:hidden;visibility:hidden;">
        <div data-u="loading" style="position:absolute;top:0px;left:0px;
        background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; 
            position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;
            background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:80%;height:80%;"></div>
        </div>
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;
        left:50px;width:550px;height:400px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/uog1.jpg" />
            </div>
             <div>
                <img data-u="image" src="images/vote.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/c.gif" />
            </div>
            <div>
                <img data-u="image" src="images/a.gif" />
            </div>
            <div>
                <img data-u="image" src="images/b.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/aa.jpg" />
            </div>

           
            <div>
                <img data-u="image" src="images/d.gif" />
            </div>
            <div>
            <img data-u="image" src="images/election.jpg" />
            </div>
             <div>
                <img data-u="image" src="images/gg.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/head.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/hh.jpg" />
            </div>
           
            
        </div>
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:59px;height:55px;color: white;" data-autocenter="2"><img data-u="image" src="images/cont1.gif" /></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:-30px;width:55px;height:55px;color: white;" data-autocenter="2"><img data-u="image" src="images/cont_2.gif" /></span>
    </div>
    <br>
    <label style="color: #006699;font-size: 25px;margin-left: 100px;">Wellcome to Online student Union Voting System</label>
            </div>
        <div id="footer">
            <?php
            include("footer4.php");
            ?>
    </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top.png" style="width: 40px;height: 30px;border-radius: 170px;"/></button>
</body>
</html>ps://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js "> --> 
     <link rel="stylesheet" href="css3/bootstrap.min.css">
  <link rel="stylesheet" href="csss/fontawesome.min.css">
  <link rel="stylesheet" href="css1/bootstrap.min.css">
   <script src="js1/jquery.min.js"></script>
    <link href="csss/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <script src="js1/bootstrap.min.js"></script>
 <link href="csss/animate/animate.min.css" rel="stylesheet">
 <link href="csss/ionicons/css/ionicons.min.css" rel="stylesheet">
  <script src="lib/wow/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="csss/login33.css">
<link rel="stylesheet" type="text/css" href="csss/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="csss/index.css">
  <link rel="stylesheet" href="csss/fontawesome.min.css">
   <script src="jss/float-panel.js"></script>
    <link href="aaa.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  
  <style>
  body {
      position: relative; 
  }
  #section11 {padding-top:5px;height:640px;color: #fff; background-color: none;}
  #section2 {padding-top:50px;height:1100px;color: #fff;}
  #contact {padding-top:50px;height:1300px;color: #fff; background-color: #FEFCFF}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
  #form_wrap{
	margin-top:90px;
	margin-left:0px;
	}
#wrap {width:530px; margin:20px auto 0; height:100px;}
h1 {margin-bottom:20px; text-align:center;text-shadow:0 1px 0 #ede8d9; }


	#form_wrap { overflow:hidden; height:466px; position:relative; top:-60px;
		-webkit-transition: all 1s ease-in-out .3s;
		-moz-transition: all 1s ease-in-out .3s;
		-o-transition: all 1s ease-in-out .3s;
		transition: all 1s ease-in-out .3s;}
	
	#form_wrap:before {content:"";
		position:absolute;
		bottom:100px;left:0px;
		background:url('images/before.png');
		width:530px;height: 316px; margin-left:400px;}
        #leftside
{
	background-color: cyan;
	width: 230px;
	height: 642px;
	float: left;
	margin-top: 0;
}
	#form_wrap:after {content:"";position:absolute;
		bottom:0px;left:0;
		background:url('images/after.png');
		width:530px;height: 260px;margin-left:400px; }

	#form_wrap.hide:after, #form_wrap.hide:before {display:none; }
	#form_wrap:hover {height:776px;top:-170px;}


	#for {background:white; 
		position:relative;top:200px;overflow:hidden;
		height:200px;width:400px;margin:0px auto;padding:20px; 
		border: 1px solid #00CCFF;
		border-radius: 3px; 
		-moz-border-radius: 3px; -webkit-border-radius: 3px;
		box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
		-moz-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 14px #fff;
		-webkit-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
		-webkit-transition: all 1s ease-in-out .3s;
		-moz-transition: all 1s ease-in-out .3s;
		-o-transition: all 1s ease-in-out .3s;
		transition: all 1s ease-in-out .3s;}


		#form_wrap:hover form {height:530px;  margin-top:-100px;}
#form_wrap .input{
border:none;
}
		label {
			margin: 11px 20px 0 0; 
			font-size: 16px; color: #b3aba1;
			text-transform: uppercase; 
			text-shadow: 0px 1px 0px #fff;
		}

		input[type=text], textarea {
			font: 14px normal normal uppercase helvetica, arial, serif;
			color: black;background:none;
			width: 380px; height: 36px; padding: 0px 10px; margin: 0 0 10px 0;
			border:1px solid #00CCFF;
			-moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;
			
		}	

		textarea { height: 80px; padding-top:14px;}

		textarea:focus, input[type=text]:focus {background:rgba(255,255,255,.35);}

		#form_wrap input[type=submit] {
			position:relative;font-family: 'YanoneKaffeesatzRegular'; 
			font-size:24px; color: #7c7873;text-shadow:0 1px 0 #fff;
			width:100%; text-align:center;opacity:0;
			background-color:#122344;
			cursor: pointer;
			-moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; 
			-webkit-transition: opacity .6s ease-in-out 0s;
			-moz-transition: opacity .6s ease-in-out 0s;
			-o-transition: opacity .6s ease-in-out 0s;
			transition: opacity .6s ease-in-out 0s;
		}

		#form_wrap:hover input[type=submit] {z-index:1;opacity:2;
			}

			#form_wrap:hover input:hover[type=submit] {color:yellow;}
  

.carousel-inner img {
    -webkit-filter: grayscale(20%); /* Safari 6.0 - 9.0 */
    filter: grayscale(20%);
}
 
  .invalid { border-color: red; }
  #error { color: red }
   

/* Important part */

.modal-body{
    
    overflow-y: auto;
	overflow-x: hidden;
}
</style>
<script>
	function ValidateAlpha1(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("	please enter only  letters!!! ")
            return false;
			}}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
		 alert("please enter only  numbers!!! !")
            return false;

}
         
      }
	  </script>
</head>

<div id="section2"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;"> -->

	 <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-header wow fadeInUp">
      <div class="container">

        <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
         <center> <h3 style="color:black;">About Us</h3></center>
         
        </header>
<br><br>
        <div class="row about-cols">

          <div class="col-md-6 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                    <img src="admin/userphoto/uog22.jpg"" height="220px"width="500px"alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                mission regards with our system is develop suitable  service for cusomers and to decrease the  workload of employee who works in the tender.
              </p>
            </div>
          </div>

          

          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                 <img src="admin/userphoto/vis.gif"" height="220px"width="500px"alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
			  our system is best for giving important service for customers and  decrease the  wastage of time and   also  resourse used in tender process.
              </p>
            </div>
          </div>

           <div class="col-md-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col"><center>
              <div class="img1">
                 <img src="admin/userphoto/uog.jpg""   width="440px" height="160px" style="padding-right:120px" alt="" class="img-fluid">
				 
				  
				  <h2 style="font-family:san serif;color:green; ">Assosa University</h2>
                
              </div></center>
              <h2 class="title"><a href="#">Background of The organaization</a></h2>
              <p>
				Assosa University is located at 5 km far from Assosa town in benishangule
				gumuze region of Ethiopia, and is one of the 44 Universities in Ethiopia.
				The University has one main Campuses, it consists of college of computing 
				and informatics, college of Engineering, College of Natural and computational 
				Science, College of Agriculture, College of Health Science, College of Business 
				and Economics, College of Social Science and Humanities, School of Law.
				Nowadays the way we think and we live is being shaped by technology.
				As the advancements in the technology are Spreading rapidly and widely,
				those who could make advantage of these advancements are making their 
				life better and easy. </p>
            </div>
          </div>
        </div>

      </div>
    </section>
</div>
<!-- <div id="contact" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="container">

        <div class="section-header"style="margin-top:60px;">
          <h3>Contact Us</h3>
          <p>please contact  in order to get more information</p>
        </div> -->

        

          

         

          
        </div>
      </div>
      

</html>