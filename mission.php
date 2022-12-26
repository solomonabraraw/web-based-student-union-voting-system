<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<script type="text/javascript">
<script type="text/javascript">
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
<style>
	#content
{
	background-color: #dfdfdf;
	width: 1200px;
	height: 440px;
	margin-left: 0px;
	margin-top: 7px;
	overflow-x: hidden;
	overflow-y: hidden;
}
</style>
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

				<div id="content">
				<div style="margin-left: 250px;">
				<h2 align="center">Mission</h2>
To educate competent graduates and researchers in Engineering and Technology by advancing relevant,
innovative and creative teaching, research and Technology Transfer to foster social and economic 
development of the country.
                         <h4>Goal</h4>
<ul>
<li>offer relevant, diverse, learner-centered, and research-led programs of study;</li>
<li>prepare graduates with the requisite knowledge, skills and attitudes embodied in the graduate 
profile of academic programs;</li>
<li>strengthen assessment methods that validly, reliably and fairly evaluate measurable learning outcomes;</li>
<li>promote technology-based, innovative and inter-disciplinary learning environment;</li>
<li>undertake demand-driven research on local, national and international issues and problems;</li>
<li>produce and disseminate research outcomes, teaching materials and other publications;</li>
<li>ensure the provision of need-based services to the community at large</li>
</ul>               

</div>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top.png" style="width: 40px;height: 30px;border-radius: 170px;"/></button>
	</div>
</body>
</html>