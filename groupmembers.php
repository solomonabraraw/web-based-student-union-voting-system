<?php
session_start();

if(isset($_session['counter']))
	$_session['counter']+=1;
	else
	$_session['counter']=1;
	?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#content
{
	background-color: #dfdfdf;
	width: 740px;
	height: 550px;
	margin-left: 230px;
	margin-top: 7px;
	overflow-x: hidden;
	overflow-y: hidden;
}
#rightside
{
	background-color: #508abb;
	width: 220px;
	height: 546px;
	float: right;
	margin-top: 5px;
	margin-right: 40px;
}
#leftside
{
	background-color: #508abb;
	width: 220px;
	height: 540px;
	float: left;
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
<h1>Group members</h1>
<table border="1" style="border-collapse:collapse;">
	<tr>
		<th>Full Name</th><th>ID_Number</th><th>Section</th>
	</tr>
	<tr><td>Solomon Abraraw</td><td>UGR/02655/11</td><TD>2</TD></tr>
	<tr><td>Maramawit Seifu</td><td>UGR/02655/11</td><TD>2</TD></tr>
	<tr><td>dagninet Belew</td><td>UGR/02655/11</td><TD>2</TD></tr>
	<tr><td>Dawit meshesha</td><td>UGR/02655/11</td><TD>2</TD></tr>
	<tr><td>Yared Aschenaki</td><td>UGR/02655/11</td><TD>2</TD></tr>
</table>
				</div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top.png" style="width: 40px;height: 30px;border-radius: 170px;"/></button>
</body>
</html>