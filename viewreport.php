<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>
<script type="text/javascript">
<script type="text/javascript">
function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
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

<style type="text/css">
	body {
  -ms-overflow-style: none; /* for Internet Explorer, Edge */
  scrollbar-width: none; /* for Firefox */
  overflow-y: scroll; 
    overflow-x: hidden; 
}

body::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
}
	#content
{
	background-color: #dfdfdf;
	width: 1200px;
	height: 820px;
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
		

				<div id="content">
				<div style="margin-left: 5px;">
			<table style="margin-left: 200px;"><tr>
<td  valign="top" bgcolor="#e8e8e8" width="800px">
<?php
$con = mysqli_connect('localhost', 'root', '','osuvs');
$sql = "SELECT *FROM account";
$result= mysqli_query($con,$sql);
$res = mysqli_num_rows($result);
  

$sql0 = "SELECT *FROM requesttable where requesttype='Voter'";
$result0= mysqli_query($con,$sql0);
$res0 = mysqli_num_rows($result0);

$sql1 = "SELECT *FROM requesttable where requesttype='Candidate'";
$result1= mysqli_query($con,$sql1);
$res1 = mysqli_num_rows($result1);

$sql2 = "SELECT *FROM account where role='Candidate'";
$result2= mysqli_query($con,$sql2);
$res2 = mysqli_num_rows($result2);

$sq = "SELECT *FROM account where role='SSD'";
$resul= mysqli_query($con,$sq);
$re = mysqli_num_rows($resul);

$sql3 = "SELECT *FROM account where role='Voter'";
$result3= mysqli_query($con,$sql3);
$res3 = mysqli_num_rows($result3);

$sql4 = "SELECT *FROM account where role='Adminstrator'";
$result4= mysqli_query($con,$sql4);
$res4 = mysqli_num_rows($result4);

$sql5 = "SELECT *FROM account where role='Main-Registrar'";
$result5= mysqli_query($con,$sql5);
$res5 = mysqli_num_rows($result5);

$sql9 = "SELECT *FROM discipline";
$result9= mysqli_query($con,$sql9);
$res9 = mysqli_num_rows($result9);

$sql6 = "SELECT *FROM requesttable where votestatus='vote'";
$result6= mysqli_query($con,$sql6);
$res6 = mysqli_num_rows($result6);

$sql7 =  "SELECT *FROM requesttable where votestatus='unvote'";
$result7= mysqli_query($con,$sql7);
$res7 = mysqli_num_rows($result7);

$sql8 = "SELECT *FROM examresult ";
$result8= mysqli_query($con,$sql8);
$res8 = mysqli_num_rows($result8);
?>
<br/>
<div id="printableArea">
<center><font size="4" face="batang" color="blue"><b>View Detailed Informations over the system</font></center>
<br/>
<table width="600px" height="550px" border="0" cellspacing="1" cellpadding="0" align="center" >
<tr><td bgcolor="#927e8a"><center><strong>No.</td><td align="center" bgcolor="#927e8a"><span class="style2"><strong>Item Type</strong></span></td><td bgcolor="#927e8a"><center><strong>Total Number</td></tr>
<tr><td bgcolor="#927e8a"><center><strong>1.</td><td align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number of Users in Our System</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res; ?></td></tr>
  <tr><td bgcolor="#927e8a"><center><strong>2.</td><td align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number of Student apply for voter</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res0; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>3.</td><td width="29%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number of Student apply for Candidate</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res1; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>4.</td><td width="18%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number Candidate in our system </strong></span></td><td width="18%" bgcolor="#FFFFFF"><center><?php echo $res2; ?></td></tr>
  <tr><td bgcolor="#927e8a"><center><strong>5.</td><td width="18%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number Student Service Dean in our system</strong></span></td><td width="18%" bgcolor="#FFFFFF"><center><?php echo $re; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>6.</td><td width="23%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number Voter in our system</strong></span></td><td width="23%" bgcolor="#FFFFFF"><center><?php echo $res3; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>7.</td><td width="23%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number SystemAdmin in our system</strong></span></td><td width="23%" bgcolor="#FFFFFF"><center><?php echo $res4; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>8.</td><td width="23%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number Registrar in our system</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res5; ?></td></tr>
  <tr><td bgcolor="#927e8a" width="6%"><center><strong>9.</td><td width="35%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number of Student who Have Displine Record in Our System</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res9 ; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>10.</td><td width="29%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number of Students Who Votes His/Her Representative</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res6; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>11.</td><td width="29%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number of Students Who Unvotes His/Her Representative</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res7; ?></td></tr>
<tr><td bgcolor="#927e8a"><center><strong>12.</td><td width="29%" align="left" bgcolor="#c1c1c1"><span class="style2"><strong>&nbsp;&nbsp;Number of Candidates who takes a exam</strong></span></td><td bgcolor="#FFFFFF"><center><?php echo $res8; ?></td></tr>
</table></div><br/><center>
</td><br><br>
</tr>
</table>
<table>
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