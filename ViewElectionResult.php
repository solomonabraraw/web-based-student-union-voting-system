<?php
session_start();
include("popuplogin.php");
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
	width: 970px;
	height: 600px;
	margin-left: 230px;
	margin-top: 7px;
	overflow-x: hidden;
	overflow-y: hidden;
	border-right: 1px solid #336699;
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
input[type=text], input[type=password] 
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #dedede;
    box-sizing: border-box;
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
				<div id="content">
				<fieldset style="margin: 50px;width:850px;border: none;">
				<legend align="center" style="color: #418cbe;font-size: 30px;">Total Election Result</legend>
				<table class="data-table"  border="1" style="border-collapse: collapse;">
				<thead style="background-color: #89bcae;"><tr><th>Candidate_ID</th><th>Full Name</th><th>Age</th><th>sex</th><th>College</th><th>Department</th><th>Year</th><th>CGPA</th><th>Number of Voice</th><th>Rank</th><th>Selected As</th></tr></thead>
				<?php 
				$sql=mysql_query("select * from count ORDER BY VOICE DESC ");
				$rank=1;
				while($row1=mysql_fetch_assoc($sql))
				{
                   if($rank==1)
                   $selected='Presdant';
                   elseif($rank==2)
                   $selected='Vice Presdant';
                   elseif($rank==3)
                   $selected='Secretary';
                   else
                   $selected='Member of Student Union';
                   ?>
				<tr><td><?php echo $row1['CID']; ?></td><td><?php echo $row1['fullname'];?></td><td><?php echo $row1['age'];?></td><td><?php echo $row1['sex'];?></td><td><?php echo $row1['collage'];?></td><td><?php echo $row1['department'];?></td><td><?php echo $row1['year'];?></td><td><?php echo $row1['cgpa'];?></td><td><?php echo $row1['VOICE'];?></td><td><?php echo $rank;?></td><td><?php echo $selected;?></td></tr>
				<?PHP
				$rank++;
				}
				?>
				</table>
				</fieldset>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top.png" style="width: 40px;height: 30px;border-radius: 170px;"/></button>
</body>
</html><?php

?>