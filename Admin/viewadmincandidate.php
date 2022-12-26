<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
include("../Database/connection.php");
$id=$_SESSION['userid'];
?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
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
	overflow-x: scroll;
	overflow-y: scroll;
}

.btn {
	float: right;
    position: relative;
    background-color: #4592d8;
    color: #fffbfb;
    font-size: 16px;
    padding: 10px 30px;
    border: none;
    cursor: pointer;
    border-radius: 1px;
    text-align: center;
    width: 160px;
    text-decoration: none;
}
.btn:hover {
	background-color: #e9e8e7;
   opacity: 0.9;
    color: #000000;
}
</style>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("../header.php");
	   ?>
		</div>
		<div id="menu">
				<?php
		include("../Admin/Adminmenu.php");
				?>
			</div>

				<div id="leftside">
							<div id="applyside">
								<?php
									include("../Admin/Adminsidemenu.php");
							   ?>	
							</div>    
						</div>
				<div id="content">
				<fieldset style="margin: 2px;height: auto;border: none;">
			
		<?php
	$sql1=mysql_query("select * from account where role='Candidate'");
	$row1=mysql_num_rows($sql1);
	if($row1>0)
	{
				while($info = mysql_fetch_array($sql1))
				{	
					$username=$info['username'];
					$photo=$info['photo'];
					$fn=$info['fname'];
					$ln=$info['lname'];
					$userid=$info['userid'];
					$query=mysql_query("select * from requesttable where username='$username'");
					$rowselected=mysql_num_rows($query);
					if($rowselected>0)
					{
					while($rowsel = mysql_fetch_array($query))
					{
					$collage=$rowsel['collage'];
					$dept=$rowsel['department'];
					$yr=$rowsel['year'];	
					$cgpa=$rowsel['cgpa'];  
			
					}		 ?>
					<div style="margin: 5px;float: left;border:1px Solid #dadcdc;
					 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<table cellspacing="0">
						<tr  style="background-color: #5078af;height: auto;color: #fff;"><th colspan="2">
						<label>Candidate:<?php echo ''.$fn.'';?></label></th></tr>
						<tr><td colspan="2"><?php echo "<img src='$photo' height=200>"?></td></tr>
						<tr><td><b>Full Name:</b></td><td><?php echo ''.$fn.'&nbsp;'.$ln.'';?></td></tr>
						<tr><td><b>Collage:</b></td><td><?php  echo ''.$collage.''; ?></td></tr>
						<tr><td><b>Department:</b></td><td><?php echo ''.$dept.''; ?></td></tr>
						<tr><td><b>Year:</b></td><td><?php echo ''.$yr.'&nbsp;year'; ?></td></tr>
						<tr><td><b>CGPA:</b></td><td><?php echo ''.$cgpa.''; ?></td></tr>
						
					</table>
					</div>
                    <?php
					}
					else
					print "no candidate found!";
		         }	
		       if(isset($_GET['voteid']))
	                	{
	            $varvoteid=$_GET['voteid'];
			$qry="select * from account where userid='$id'";
			$results = mysql_query($qry) or die(mysql_error());
			if(mysql_num_rows($results)>0)
			{
				while ($row = mysql_fetch_array($results)) 
					{
					$requestid=$row['requestid'];
					$sqlquer1=mysql_query("select * from account WHERE userid='$varvoteid'");
					while($row2 = mysql_fetch_array($sqlquer1))
					{
					$fn=$row2['fname'];
					$ln=$row2['lname'];	
					$age=$row2['age'];
					$sex=$row2['sex'];
					$requestid2=$row['requestid'];
					$sqlquer2=mysql_query("select * from requesttable WHERE Student_ID='$requestid2'");
					while($row3 = mysql_fetch_array($sqlquer2))
					{
					$collage=$row3['collage'];
					$dept=$row3['department'];
					$yr=$row3['year'];	
					$cgpa=$row3['cgpa'];  
					}
					}
					}
					$sqlquery=mysql_query("select * from requesttable WHERE Student_ID='$requestid'");
					while($result1=mysql_fetch_array($sqlquery))
					{
					$votestatus=$result1['votestatus'];	
					if($votestatus=='unvote')
					{
					$sql=mysql_query("select * from count where CID='$varvoteid'");
					$total=mysql_num_rows($sql);
					if($total>0)
					{
					while ($row = mysql_fetch_array($sql)) 
					$VOICE=$row['VOICE'];
					$total=$VOICE+1;
					mysql_query("update count set VOICE='$total' where CID='$varvoteid'");
					mysql_query("INSERT INTO `ballotstoretable` VALUES ( '$id','$varvoteid')");
					mysql_query("update requesttable set votestatus='vote' where Student_ID='$requestid'");
					echo"You have sucssusfully voted Thank you!";
					}
					else
					{
					mysql_query("INSERT INTO `count` VALUES ('$varvoteid','$fn $ln','$age','$sex','$collage','$dept','$yr','$cgpa','1')");	
					mysql_query("INSERT INTO `ballotstoretable` VALUES ('$id','$varvoteid')");	
					mysql_query("update requesttable set votestatus='vote' where Student_ID='$requestid'");
					echo"You have sucssusfully voted Thank you!";
					}
					}
					if($votestatus=='vote')
					{
				echo"<script> alert('Sorry!!! You are already Vote! you cannot vote again please!!!'); 
				window.location = 'Candidate.php';</script>";
				exit();	
					//echo "You are already Voted! you cannot vote again please!!!";
					}
					}
			}
			else
			echo "no data found";
	        }
		}
		?>
				</fieldset>
		    </div>
		<div id="footer">
			<?php
			include("../footer.php");
			?>
	</div>
	<?php
	}
	else
	{
		header("location:../index.php");
	}?>
	</div>
</div>
</body>
</html>
