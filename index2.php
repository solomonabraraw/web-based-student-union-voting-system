<?php
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
	height: 550px;
	float: right;
	margin-top: px;
	margin-right: 5px;
}
#leftside
{
	background-color: cyan;
	width: 220px;
	height: 590px;
	float: left;
	margin-top: 10px;
}
#middle
{
	background-color:white;
	
	height: 70px;
	
	margin-top: 60px;
}
#calander
{
	margin-top: 30px;
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
				<div id="rightside" style="margin-top:60px;">
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
		left:50px;width:550px;height:400px;overflow:hidden;margin-top: 30px;">
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
            <!-- <div>
                <img data-u="image" src="images/b.jpg" />
            </div> -->
            <!-- <div>
            	<img data-u="image" src="images/aa.jpg" />
            </div> -->

           
            <div>
                <img data-u="image" src="images/d.gif" />
            </div>
            <!-- <div>
            <img data-u="image" src="images/election.jpg" />
            </div> -->
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
            <div class="middle">
          
    </div> 
		 <div>
			<?php
			include("include.php");
			?>
	</div> 
	</div> 
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top.png" style="width: 40px;height: 30px;border-radius: 170px;"/></button>
</body>
</html>