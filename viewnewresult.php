<?php
session_start();
include("popuplogin.php");
if(isset($_session['counter']))
    $_session['counter']+=1;
    else
    $_session['counter']=1;
    ?>
<!DOCTYPE html>
<html>
<head>
    <link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
  <meta charset="utf-8">
  <title>Manager page</title>
 <link rel="stylesheet" href="style/footer.css" media="all" />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="employeesidebar.css">
<!-- for table-->
<style>
    #login
{
    margin-top: 0px;
    background-color: #718076;
    height: 220px;
    width: auto;
}
#header
{
    background-color:floralwhite;
    width: 1250px;
    height: 100px;
    margin-left: 40px;
    margin-top: 20px;
}
#container
{
    background-color: whitesmoke;
    width: auto;
    height: auto;
    margin-left: 15px;
    margin-right: 60px;
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
    
    height: 80px;
    width:  1300px;;
    margin-top: 250px;
    margin-left: -90px;
    
}

<style type="text/css">
    html, body {
    max-width: 100%;
    overflow-x: hidden;
}
    </style> 

</style>
<!--/employee header-->
</head>
<html>
<body>

<div id="header">
        <?php
        include("headerhome.php");
       ?>   
        </div>
        

    <div align="center" style="margin-top:20px; "><h5 style="font-size: 30px;">Total Election Result</h5></div>
<div class="container ">
    <div class="row">
      <table id="example" class="table table-striped" style="width:100% margin-top:50px;">
        <thead>
            <tr>
                         <th style="font-size: 15px;">Candidate_ID</th>
                        <th style="font-size: 15px;">Full Name</th>
                        <th style="font-size: 15px;">Age</th>
                       <th style="font-size: 15px;">sex</th>
                       <th style="font-size: 15px;">College</th>
                       <th style="font-size: 15px;">Department</th>
                        <th style="font-size: 15px;">Year</th>
                        <th style="font-size: 15px;">CGPA</th>
                        <th style="font-size: 15px;">Number of Voice</th>
                        <th style="font-size: 15px;">Rank</th>
                        <th style="font-size: 15px;">Selected As</th>
<!--<th  >Delete</th>-->
</tr>
</thead>
<tbody>
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
                <tr>
                    <td><?php echo $row1['CID']; ?></td>
                    <td><?php echo $row1['fullname'];?></td>
                    <td><?php echo $row1['age'];?></td>
                    <td><?php echo $row1['sex'];?></td>
                    <td><?php echo $row1['collage'];?></td>
                    <td><?php echo $row1['department'];?></td>
                    <td><?php echo $row1['year'];?></td>
                    <td><?php echo $row1['cgpa'];?></td>
                    <td><?php echo $row1['VOICE'];?></td>
                    <td><?php echo $rank;?></td>
                    <td><?php echo $selected;?></td>
                </tr>
                <?PHP
                $rank++;
                }
                ?>
</tbody>
     </table>
   </div>
   <div id="footer" >
            <p align="center" style="color: white;padding-top: 20px; font-size: 15px;">
© Copyright <strong>Online Student Union Voting System For University Of Gonder | 2022</strong>. All Rights Reserved
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="" style="color: white;text-decoration: none;float: right;margin-right: 30px;height: 20px;background-color: gray;width: 150px;border-radius:20px;">
</a><br><br<br></p>

    </div>
  

    <script type="text/javascript" src="https://code.jquery.com/jquery-5.0.0.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="table.js"></script>
 <br>
</body>
</html>


