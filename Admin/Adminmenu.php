<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
		?>
		<ul>
    <li><a href="../Admin/Admin.php">Home</a></li>
	<li><a href="../Admin/Backup.php" >Take Backup</a></li>
	<li><a href="../Admin/restore.php">Restore Backup</a></li>
		<li><a href="#">Manage Acount&nbsp;<span style="font-size: 7px;">&#9660;</span></a>
			<ul>
				<li   style="border-top: none;"><a href="../Admin/create_account.php">&nbsp;&nbsp;&nbsp;&nbsp;Create Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/ViewAccount.php">&nbsp;&nbsp;&nbsp;&nbsp;View Users Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/UpdateAccount.php">&nbsp;&nbsp;&nbsp;&nbsp;Update Account</a> </li>
				<!-- <li   style="border-top: none;"><a href="../Admin/Block.php">&nbsp;&nbsp;&nbsp;&nbsp;Block Account</a> </li> -->
			</ul>
	</li> <li><li><a href="">View&nbsp;<span style="font-size: 7px;">&#9660;</span></a>
	<ul>
	<li><a href="../Admin/viewstudentdata.php">View Students Data</a> </li>	
	<li><a href="../Admin/viewadmincandidate.php">View Candidates</a> </li>
	<li><a href="../Admin/viewadminvoter.php">View Voters</a> </li>
		
	</ul></li>	
		<div id="photologin">	
	<?php
		echo "<li><a href=../logout.php>logout</a></li>";
if($_SESSION['role']=="Adminstrator")
{
echo "<li style='float:right;margin-top:5px;'><p><b>.</b>Online</p>". "<img src='".$_SESSION['sphoto']."'</li>";

}
	}
	else
	echo "";
	?>
					</div> 
</ul>


	