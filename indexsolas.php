
<!DOCTYPE html>
<?php
 session_start();

// Include config file
//include('config.php');
 // session_start();
// Define variables and initialize with empty values
$profile=$username =$firstname=$lastname=$sex=$age=$phone= $password =$email=$usertype= "";
$profile_err=$username_err=$firstname_err= $lastname_err=$sex_err=$age_err=$phone_err= $password_err =$email_err=$usertype_err = "";
// Processing form data when form is submitted
if (isset($_POST['signup'])){
							$firstname =$_POST['fname'];
							$lastname=$_POST['lname'];
							$sex=$_POST['sex'];
							$age=$_POST['age'];
							$phone=$_POST['phone_no'];   
							$username=$_POST['username'];
							$password=$_POST['password'];
							$usertype=$_POST['usertype'];
							$email=$_POST['email'];
							
							
if(!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 

    // Validate username
	$sql="select * from users where username='$username'";
$res = mysqli_query($link, $sql);
$q=mysqli_num_rows($res);
				if($q>0){
				$username_err = "user name  already exist!";
				}
				  elseif(empty($_POST["username"])){
						$username_err = "Please enter a username.";
					} 
					
					else{
						$username=$_POST['username'];
					}
	if(empty($_POST["username"])){
						$username_err = "Please enter a username.";
					} 				
    // Validate password
    if(empty($_POST["password"])){
        $password_err = "Please enter a password.";     
    } elseif(strlen($_POST["password"])< 5){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = $_POST["password"];
    }
	if(empty($_POST["fname"])){
        $firstname_err = "Please enter your first name";     
    } elseif(strlen($_POST["fname"])<2){
        $firstname_err = "firstname is short!";
    } 
	 else{
        $firstname = $_POST["fname"];
    }
	if(empty($_POST["lname"])){
        $lastname_err = "Please enter your last name";     
    } elseif(strlen($_POST["lname"])<2){
        $lastname_err = "lastname is short!";
    } 
	 else{
        $lastname = $_POST["lname"];
    }

	if(empty($_POST["phone_no"])){
        $phone_err = "Please enter a your phone.";     
    } elseif(empty($_POST["phone_no"])){
        $phone_err = "please enter phone number";
    }elseif(strlen($_POST["phone_no"])!=10) {
		$phone_err = "Invalid phone number length please enter phone number";
	}
	
	else{
        $phone = $_POST["phone_no"];
    }
	if($_POST["sex"]=="-1"){
        $sex_err = "Please select a your sex.";     
    }  else{
        $sex = $_POST["sex"];
    }
	if(empty($_POST["age"])){
        $age_err = "Please enter a your age.";     
    }
	 elseif(strlen($_POST["age"])>3){
        $age_err = "Not valid age!";
    } 
else{
        $age = $_POST["age"];
    }
    

    
	 
    if($_POST["usertype"]=='-1'){
        $usertype_err = "Please select a usertype.";     
    }  else{
        $usertype = $_POST["usertype"];
    }
	if(empty($_POST["email"])){
        $email_err = "please enter valid email";     
    }  else{
        $email = $_POST["email"];
    }
	
    // Check input errors before inserting in database
if(empty($username_err) && empty($password_err) ){
$query = "INSERT INTO users (profile,Firstname,Lastname,Age,Sex,phonenumber, email, username,password,usertype,status) 
					  VALUES('$file','$firstname','$lastname','$age','$sex','$phone','$email','$username','$password','$usertype','1')";
$result = mysqli_query($link, $query);
if($result)
{
	echo  '<a href="index.php.php"><script type="text/javascript">alert("Account created succesful!!!!");window.location=\'index.php\';</script></a>';
	//header("Location: userregister.php");
}
else
	echo "<script>alert('not created please try again');</script>".mysqli_error($link);
}
}
else{
		$sql="select * from users where username='$username'";
$res = mysqli_query($link, $sql);
$q=mysqli_num_rows($res);
				if($q>0){
				$username_err = "user name  already exist!";
				}
				  elseif(empty($_POST["username"])){
						$username_err = "Please enter a username.";
					} 
					
					else{
						$username=$_POST['username'];
					}
	if(empty($_POST["username"])){
						$username_err = "Please enter a username.";
					} 				
    // Validate password
    if(empty($_POST["password"])){
        $password_err = "Please enter a password.";     
    } elseif(strlen($_POST["password"])< 5){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = $_POST["password"];
    }
	if(empty($_POST["fname"])){
        $firstname_err = "Please enter your first name";     
    } elseif(strlen($_POST["fname"])<2){
        $firstname_err = "firstname is short!";
    } 
	 else{
        $firstname = $_POST["fname"];
    }
	if(empty($_POST["lname"])){
        $lastname_err = "Please enter your last name";     
    } elseif(strlen($_POST["lname"])<2){
        $lastname_err = "lastname is short!";
    } 
	 else{
        $lastname = $_POST["lname"];
    }

	if(empty($_POST["phone_no"])){
        $phone_err = "Please enter a your phone.";     
    } elseif(empty($_POST["phone_no"])){
        $phone_err = "please enter phone number";
    }elseif(strlen($_POST["phone_no"])!=10) {
		$phone_err = "Invalid phone number length please enter phone number";
	}
	//elseif($phone.position(0)!="0") {
		//$phone_err = "mobile no, should in the format of 09";
	
	else{
        $phone = $_POST["phone_no"];
    }
	if($_POST["sex"]=="-1"){
        $sex_err = "Please select a your sex.";     
    }  else{
        $sex = $_POST["sex"];
    }
	if(empty($_POST["age"])){
        $age_err = "Please enter a your age.";     
    }
	 elseif(strlen($_POST["age"])>3){
        $age_err = "Not valid age!";
    } 
else{
        $age = $_POST["age"];
    }
    
    // Validate confirm_password
   
	 
    if($_POST["usertype"]=='-1'){
        $usertype_err = "Please select a usertype.";     
    }  else{
        $usertype = $_POST["usertype"];
    }
	if(empty($_POST["email"])){
        $email_err = "please enter valid email";     
    }  else{
        $email = $_POST["email"];
    }
	

    // Check input errors before inserting in database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
$query = "INSERT INTO users (Firstname,Lastname,Age,Sex,phonenumber, email, username,password,usertype,status) 
					  VALUES('$firstname','$lastname','$age','$sex','$phone','$email','$username','$password','$usertype','1')";
$result = mysqli_query($link, $query);
if($result)
{
	echo  '<a href="index.php.php"><script type="text/javascript">alert("Account created succesful!!!!");window.location=\'index.php\';</script></a>';
	//header("Location: userregister.php");
}
else
	echo "<script>alert('not created please try again');</script>".mysqli_error($link);
}
	
}
}
if (isset($_POST['signin'])){
	$usertype = $_POST['usertype'];
	$Password  = $_POST['password'];
	$username  = $_POST['username'];
   if(empty($_POST['username'])){
	   $username_err="Plese enter username";
   }
     if(empty($_POST['password'])){
	   $password_err="Plese enter password";
   }
    if($_POST['usertype']=="-1"){
	   $usertype_err="Plese select your type";
   }
	//mysql_select_db($con,"tenders");
	 $query = "SELECT * FROM users WHERE username = '$username' AND password = '$Password' AND usertype = '$usertype' AND status='1' ";
   $result_set=mysqli_query($link,$query);
   $rowCheck = mysqli_num_rows($result_set);
		$row=mysqli_fetch_array($result_set);
if(!$result_set){
	//echo $usertype;
die("query is failed".mysqli_error($link));
echo "<script>alert('Username not found or it is deactivated');</script>";
}
if(mysqli_num_rows($result_set)>0)
{
if($row['usertype']=='Administrator')
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To administartor Page";
 echo "<script>window.open('administrator.php','_self')</script>";

  //header("location:administrator.php"); 
}
else if($usertype=="supplier")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To supplier Main Page";
  echo "<script>window.open('supplier.php','_self')</script>";
  //header("location:supplier.php"); 
}
else if($usertype=="finance")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To finance Main Page";
 echo "<script>window.open('finance.php','_self')</script>";
  //header("location:finance.php"); 
}elseif($usertype=="property_department")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To property_Department Page";
  echo "<script>window.open('propertydepartment.php','_self')</script>";
  //header("location:propertydepartment.php"); 
}
elseif($usertype=="scientific_director")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To scientific_director Page";
  echo "<script>window.open('scientificdirector.php','_self')</script>";
  //header("location:scientificdirector.php"); 
}
elseif($usertype=="procurement_approvin")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To procurement_Approving_committee Page";
  echo "<script>window.open('procurement_Approving_committee.php','_self')</script>";
  //header("location:procurement_Approving_committee.php"); 
}
elseif($usertype=="procurement_team")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To Procurement_Team Page";
  echo "<script>window.open('procurementteam.php','_self')</script>";
  //header("location:procurementteam.php"); 
}

elseif($row['usertype']=='procurement_request')
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
//echo "login is failed";
 echo "<script>window.open('procurement_request.php','_self')</script>";
//header("location:procurement_request.php");
}
else{
	echo"<script language=\"javascript\" type=\"text/javascript\">alert(' Not Mach please try again!')</script>";

}
}
if ($username == '' || $Password == '' || $usertype == '')
{ 
echo"<script language=\"javascript\" type=\"text/javascript\">alert(' 'Please check your username,password and usertype '')</script>";

  }
else{ 

 //header("location:login.html");
 echo"<script language=\"javascript\" type=\"text/javascript\">alert(' please fill correct user name and password')</script>";
}

 
 }

?>

<html>
<head>
  <title>Open Tender For ASU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css2/bootstrap.min.css">
 <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js "> --> 
     <link rel="stylesheet" href="css3/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css1/bootstrap.min.css">
   <script src="js1/jquery.min.js"></script>
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <script src="js1/bootstrap.min.js"></script>
 <link href="css/animate/animate.min.css" rel="stylesheet">
 <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
  <script src="lib/wow/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login33.css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
   <script src="js/float-panel.js"></script>
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
#wrap {width:530px; margin:20px auto 0; height:1000px;}
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
<body data-spy="scroll" data-target=".navbar" data-offset="50" >
<div id="backtop">&#9650;</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
     <h3> <a class="navbar-brand1" href="#">Web  Based Open Tender Managment System</a></h3>
	<img src="images/ww.jfif" width="100px" height="90px" style="margin-top:-90px;margin-left:-10px;"alt="Assosa university">
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
          <li class="current-menu-item"><a href="index.php" ><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a></li>
             <li><a href="#section2" ><span class="glyphicon glyphicon-aboutus"></span>AboutUs</a>
            </li>
            <li><a href="#contact" ><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
			</li>
			<li><a href="news.php" ><span class="glyphicon glyphicon-quationmark"></span>News</a></li>
			<li><a href="#helpmodal"data-toggle="modal" ><span class="glyphicon glyphicon-question-sign"></span>Help</a></li>
            </li>
             <li><a href="#myModal"data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;login</li></a>
          
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div class="slider-area" id="section11" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div id="carousel-example-generic" class="carousel slide custom-carousel" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
	<div class="ovelay" ></div>
      <img src="images/skin.png" alt="student bed" style="height:820px;width:100%;">
      <div class="carousel-caption" >
       <h2 class="animated fadeInUp" style="animation-delay:1s;">Web based Open tender managment system for ASU</h2>
	   <h3 class="animated fadeInDown" style="animation-delay:2s"></h3>
      </div>
    </div>
    <div class="item">
		<div class="ovelay"></div>
      <img src="images/doctor.jpg" alt="student bed" style="height:820px;width:100%;">
      <div class="carousel-caption">
      <h2 class="animated fadeInDown" style="animation-delay:1s;"> Assosa University</h2>
	   <h3 class="animated fadeInRight" style="animation-delay:2s">assosa university is one of the campus found in assosa city. 
	   In this campus there is 7 faculty, it consists of college of computing and informatics, college of Engineering,
	   College of Natural and computational Science, College of Agriculture, College of Health Science, 
	   College of Business and Economics, College of Social Science and Humanities, School of Law.</p></h3>
      </div>
    </div>
	 <div class="item">
	 	<div class="ovelay"></div>
      <img src="images/computers.jpeg" alt="New York" style="height:820px;width:100%;">
      <div class="carousel-caption">
      <h2 class="animated fadeInDown" style="animation-delay:1s">Sample items Computer </h2>
	   <h3 class="animated fadeInLeftbig" style="animation-delay:2s" >an electronic device for storing and processing data, typically in binary form, according to instructions given to it in a variable program.</h3>
      </div>
    </div>
	 
    <div class="item">
		<div class="ovelay"></div>
      <img src="images/coffee.jpg" alt="student bed" style="height:820px;width:100%;">
      <div class="carousel-caption">
      <h2 class="animated animated fadeInDown" style="animation-delay:1s">open tender</h2>
	   <h3 class="animated fadeInRight" style="animation-delay:2s">Open tender means A bidding process that is open to all qualified bidders</h3>
      </div>
    </div>
	 <div class="item">
	 	<div class="ovelay"></div>
      <img src="images/job.jpg" alt="New York" style="height:820px;width:100%;">
      <div class="carousel-caption">
      <h2 class="animated fadeInDown" style="animation-delay:1s">Suppliers</h2>
	   <h3 class="animated fadeInLeft" style="animation-delay:2s" >Supplier is a person or organization that provides something needed such as a product or service.</h3>
      </div>
    </div>
	 <div class="item">
	 	<div class="ovelay"></div>
      <img src="images/intern.jpg" alt="New York" style="height:820px;width:100%;">
      <div class="carousel-caption">
      <h2 class="animated fadeInUp" style="animation-delay:1s">Suppliers</h2>
	   <h3 class="animated fadeInLeft" style="animation-delay:2s" >Supplier is a person or organization that provides something needed such as a product or service.</h3>
      </div>
    </div>

    
  </div>

   <div class="carousel-control-next-icon"></div>
  <a class="slider-swiper-button-prev"href="#carousel-example-generic" role="button" data-slide="prev"><img src="images/left-arrow-medium.png" class="arrow2" alt="arrow" ></a>
           <a class="slider-swiper-button-next"href="#carousel-example-generic" data-slide="next"><img src="images/right-arrow-medium.png" class="arrow2" alt="arrow" ></a>
  
</div>

</div>
<div id="section2"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">

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
                    <img src="images/misyon.jfif" height="220px"width="500px"alt="" class="img-fluid">
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
                 <img src="images/vis.gif" height="220px"width="500px"alt="" class="img-fluid">
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
                 <img src="images/immmages.jfif"   width="440px" height="160px" style="padding-right:120px" alt="" class="img-fluid">
				 
				  
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
<div id="contact" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="container">

        <div class="section-header"style="margin-top:60px;">
          <h3>Contact Us</h3>
          <p>please contact  in order to get more information</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Ethiopia,Assosa town, Assosa University</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
			
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">033-450-04-67</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
             <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">asutender@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
<div class="col-md-12 wow fadeInUp" data-wow-delay="0.2s">
 <div class="about-col"><center>
<div id="form_wrap">
		
			<form  action="conta.php" method="post" name="f1" onsubmit="return vali()" id="for">
				<center><p class="ccc"">Contact Form Application</p></center>
				
					
				<label for="name">Name: </label>
				
				<input name="t1" type="text" id="t1" onchange="return name()" placeholder="your name" required="true">
				<label for="email">Email: </label>
				<input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="text" name="t3" id="t3" placeholder="enter your email"onchange="return email()" required="true">
				<label for="name">Subject: </label>
				<input name="t2" type="text" id="t2" onchange="return name()" placeholder="write somthing about yourself" required="true">
				<label for="message">Your Message : </label>
				<textarea type="textarea" name="t5" value="Your Message" id="message" required="true"></textarea>
				
				<input  class="btn "name="sub" type="submit" value="Submit">
				
			</form>
		</div></div></div>
</div>
<div id="section41" class="container-fluid">

</div>
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            

         <div id="social"> 
           </a><p><a href="http://Assosa.university/"> </a><a class="facebookBtn smGlobalBtn" style="height:5px, width:5px" href="https://www.facebook.com/AssosaUniversity111/?ref=br_rs" target="_blank"></a>
			<a class="twitterBtn smGlobalBtn" href="https://twitter.com/Assosauniversity" target="_blank"></a>
			<a class="googleplusBtn smGlobalBtn"></a>
		<a class="youtubeBtn smGlobalBtn" href="https://www.youtube.com/channel/UCDPKF_tmJ1cz3JFxVfCU2Ig" target="_parent"></a>
		</p>
		</div>

          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        © Copyright <strong>Assosa University Open Tender system | 2020</strong>. All Rights Reserved
      </div>
      <div class="credits"> 
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
     <!-- Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade--> 
      </div>
    </div><div style="width: 100%;">  <a href="developer.php" style="color: blue "><b> Developers</b></a>
                        </div>
  </footer>
      
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <script src="js1/jquery.js"></script>
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height:100px;">
  
		<img src="images/uu.gif" width="100px" height="70px"   >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/a.png" width="120px" height="50px"  class="animated bounce  infinite 3s"  >
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button><img src="images/uu.gif" width="100px" height="70px" style="float:right;">
      </div>
      <div class="modal-body"style="ovrflow-y:scroll;">
	 <div class="login-wrap" >
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm"  action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" >
		  <span class="help-block" style="color:red"><?php echo $username_err; ?></span>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" >
		  <span class="help-block" style="color:red"><?php echo $password_err; ?></span>
        </div>
         <div class="group">
          <label for="username" class="label">User Type</label>
		
  <select name="usertype" class="input" >
  <option value="-1">Please select user type</option>
  <option value="Administrator">Administrator</option>
  <option value="procurement_team">Procurement team</option>
    <option value="procurement_request"/>Procurement request</option>
      <option value="property_department">Property Department</option>
        <option value="procurement_approvin">Procurement Approving committee</option>
          <option value="finance">Finance</option>
            <option value="supplier">Suppliers</option>
              <option value="scientific_director">Scientific Director</option>
</select>
	    <span class="help-block" style="color:red"><?php echo $usertype_err; ?></span>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label class="lol" for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <button type="submit" class="button" name="signin" onclick="myFunction()">signin</button>
        </div>
        <div class="hr"></div>
        <div class="foot-lnkk">
          <a href="forget.php">Do you forget your  Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="" method="POST" name="myForm" onsubmit="return FormValidationall();" onchange="return FormValidationall();" enctype="multipart/form-data">
        <div class="group ">
          <label for="user" class="label">Firstname</label>
          <input id="firstname" name="fname" type="text" class="input" value="<?php echo $firstname; ?> "  onKeyPress="return ValidateAlpha1(event)"  >
         <span class="help-block" style="color:red"><?php echo $firstname_err; ?></span>
		</div>
		<div class="group ">
          <label for="user" class="label">Last Name</label>
          <input id="lastname" name="lname" type="text" class="input" value="<?php echo $lastname; ?> "  onKeyPress="return ValidateAlpha1(event)" >
		  <span class="help-block" style="color:red"><?php echo $lastname_err; ?></span>
        </div>
		<div class="group ">
          <label for="user" class="label">Age</label>
          <input id="age" name="age" type="text" class="input" value="<?php echo $age; ?> "  onKeyPress="return isNumberKey(event)"  >
		  <span class="help-block" style="color:red"><?php echo $age_err; ?></span>
        </div>
		 <div class="group">
          <label for="sex" class="label">Sex</label>
  <select id="sex"name="sex" class="input" value="<?php echo $sex; ?> ">
   
  <option value="-1">Please select  you sex</option>
  
  
            <option value="Male">Male</option>
  <option value="Female">Female</option>         
</select>
<span class="help-block" style="color:red"><?php echo $sex_err; ?></span>
        </div>
		<div class="group ">
          <label for="user" class="label">Phone number</label>
          <input id="phonenumber" name="phone_no" type="text" class="input" value="<?php echo $phone; ?> "  onKeyPress="return isNumberKey(event)" >
		 <span class="help-block" style="color:red"><?php echo $phone_err; ?></span>
        </div>
		<div class="group ">
          <label for="email" class="label">Email</label>
          <input id="email" type="email" class="input" data-type="email" name="email" value="<?php echo $email; ?>"  onchange="return validateemail()"  >
		   <span class="help-block" style="color:red"><?php echo $email_err; ?></span>
        </div><div id="error"></div>
		<div class="group ">
          <label for="profile" class="label">Profile_image</label>
		  <input style="color:green" type="file"  class="input" id="profile"  name="image" id="image" />  		  
         <span class="help-block" style="color:red"><?php echo $profile_err; ?></span>
		</div>
		<div class="group ">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" value="<?php echo $username; ?> "   onKeyPress="return validateForm()"  >
		  <span class="help-block" style="color:red"><?php echo $username_err; ?></span>
        </div>
        <div class="group ">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" value="<?php echo $password; ?>" onchange="return FormValidationall();" onKeyPress="return validateForm()">
		   <span class="help-block" style="color:red"><?php echo $password_err; ?></span>
        </div>
      <!--
        <div class="group">
          <label for="pass" class="label">Confirm_Password</label>
          <input id="pass" type="password" class="input" data-type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" onchange="return FormValidationall();" onKeyPress="return validateForm()" >
		   <span class="help-block" style="color:red"><?php echo $confirm_password_err; ?></span>
        </div>-->
         <div class="group">
          <label for="username" class="label">User Type</label>
  <select id="usertype"name="usertype" class="input" value="<?php echo $usertype ?>" required>
  <option value="-1">Please select user type</option>
  
            <option value="supplier">Supplier</option>
  <option value="procurement_request"/>Procurement request</option>			
</select>
<span class="help-block" style="color:red"><?php echo $usertype_err; ?></span>
        </div>
        
       
        
  
        <div class="group">
           <button type="btn btn-sucess"type="submit" class="button" name="signup">Create account</button>
		    <button type="reset" class="button" name="reset">Clear Form</button>
		
			<div class="hr"></div>
		<div class="foot-lnk">
          <label for="tab-1" class="lb">Already Member?</a>
        </div>
      </form>
        </div>
		  </div>
  </div>
</div>
</div>
   <div class="footer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>        </div>  
    </div>
  </div>
</div>
<div id="helpmodal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><center><h4 color="blue"> Click on Document to download</h2></center></h4></div>
<form name="request" class="form-horizontal" action="itemregister.php" method="POST">
<center>
<div class="form-group">
<a href="help.docx"><button type="button" style="width:190px;height:30px;"class="btn btn-success">Text Document</button></a>

</div>
</center>


<div class="modal-footer">
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button></div></form>
  </div>
</div></div>

</body>

</html>
