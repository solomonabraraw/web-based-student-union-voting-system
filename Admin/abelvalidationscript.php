<?php
include("header.php");
?>


<?php
include("connect.php");
$qur="SELECT * FROM vaccancy where hrm_status='1'";
                  $result=$conn->query($qur);
$num=mysqli_num_rows($result);
if($num>0)
{
  





?>




<!DOCTYPE html>
<html>
  <head>

<style>


.gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}




body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 30px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus#ddd */
input[type=text]:focus, input[type=password]:focus {
  background-color:#ddd ;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width: 30%;
}

/* Add padding to container elements */
.container {
  padding: 26px;
  background-color:rgb(150,170,250);
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 50%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 4px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  font-size: 16px;
}

/* Style the horizontal ruler #f1f1f1 */
hr {
  border: 4px solid #010B18 ;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<script src="sweetalert.min.js"></script>
</head>

<body  style="background-color:#84fab0">

<?php


?>
<div>
<center><h2 style="font-size:50px;color:black;margin-top:10px">Applicant Signup Form</h2></center>

<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
  <form class="modal-content" action="#"name="signupform"method="post"style="width:50%;"enctype="multipart/form-data"onsubmit="return validate ();">
    <div class="container">
      <center><h1>Sign Up</h1></center>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="fname"><b>firstName</b></label><br>
      <input type="text" placeholder="Enter first name" name="fname"style="width:100%" >
<br>

      <label for="lname"><b>LastName</b></label><br>
      <input type="text" placeholder="Enter last name" name="lname" style="width:100%" >
<br>

      <label for="uname"><b>UserName</b></label><br>
      <input type="text" placeholder="enter userName" name="uname" style="width:100%">
      
      <br>
      


      <label for="phone"><b>Phone number</b></label><br>
      <input type="tel" placeholder="Enter phone number" name="phone"pattern="09\d{8}" required style="width:100%" ><br>
<br>
      <label for="email"><b>Email</b></label><br>
      <input type="email" placeholder="Enter Email" name="email"required style="width:100%">
<br>
       <label for="profile"><b>profile</b></label><br>
      <input type="file"name="profile">
<br>
      <label for="password"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="pass" required style="width:100%">


<br>
      <label for="confirm"><b>confirm Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="password_c" required style="width: 100%">
      
<br>
<p class="error" id="error"style="color:red;">

      <div class="clearfix">
        <button type="submit" class="signupbtn"name="signup">Sign Up</button>
        <button type="reset" name="cancel"class="cancelbtn">Cancel</button>
        
        
      </div>
      <p>already have account  <a href="login.php" style="color:dodgerblue;text-decoration:none">login here</a>.</p>
    </div>
  </form>
</div>



             
             <script>
 function validate ()
 {
                                   
                                    
                var regex = /^[a-zA-Z\s{2,}]$/;    
                  
         if (document.getElementsByName('fname')[0].value =="")                              
                                        { 
                                           
                                          alert( document.getElementById('error').innerHTML = 'Please enter your first name ');
 


    document.getElementsByName('fname')[0].focus() ;
                                          return false; 
     } 



     if (!isNaN(document.getElementsByName('fname')[0].value))                              
                                        { 
                                           
                        alert( document.getElementById('error').innerHTML = ' your first name should be only character');
                              document.getElementsByName('fname')[0].focus() ;
                                          return false; 
     } 




     if(regex.test(document.signupform.fname.value))
                {
    alert(  document.getElementById('error').innerHTML = 'Please enter your first name more than 1 ');
          document.getElementsByName('fname')[0].focus() ;

                                                     return false; 

     
 

                       }

          if (document.getElementsByName('lname')[0].value == "")                                  
                                        { 
                                           
                 alert(document.getElementById('error').innerHTML = 'Please enter your last name '); 
                                            return false; 
                                        } 



                                        if (!isNaN(document.getElementsByName('lname')[0].value))                              
                                        { 
                                           
                        alert( document.getElementById('error').innerHTML = ' your last name should be only character');
                              document.getElementsByName('lname')[0].focus() ;
                                          return false; 
     } 

     if(regex.test(document.signupform.lname.value))
                {
    alert(  document.getElementById('error').innerHTML = 'Please enter your last name more than 1 character ');
          document.getElementsByName('lname')[0].focus() ;

                                                     return false; 

     
 

                       }






              
            if (document.getElementsByName('uname')[0].value == "")                                  
                                        { 
                                           
                     alert(document.getElementById('error').innerHTML = 'Please enter your username '); 
                                            return false; 
                                        }  
                                        
                                        
                                                    
              if (/\s/.test(document.getElementsByName('uname')[0].value))                                  
                                        { 
                                           
                 alert  ( document.getElementById('error').innerHTML = 'Username should not contain space. '); 
                                            return false; 
                                        } 



                                        if (document.getElementsByName('phone')[0].value =="")                              
                                        { 
                                           
                                          alert( document.getElementById('error').innerHTML = 'Please enter your phone number');
 


    document.getElementsByName('phone')[0].focus() ;
                                          return false; 
     } 



     if (document.getElementsByName('email')[0].value =="")                              
                                        { 
                                           
                                          alert( document.getElementById('error').innerHTML = 'Please enter your email ');
 


    document.getElementsByName('email')[0].focus() ;
                                          return false; 
     } 


                                     

    if (document.getElementsByName('pass')[0].value =="")                              
                                        { 
                                           
                                          alert( document.getElementById('error').innerHTML = 'Please enter your password ');
 


                                         document.getElementsByName('pass')[0].focus() ;
                                          return false; 
     } 
                   

     if (document.getElementsByName('pass')[0].value.length < 6)                               
                                        { 
                                           
                                          alert( document.getElementById('error').innerHTML = 'Password should be at least 6 character ');
 


                                         document.getElementsByName('pass')[0].focus() ;
                                          return false; 
     } 

     if (document.getElementsByName('password_c')[0].value =="")                              
                                        { 
                                           
                                          alert( document.getElementById('error').innerHTML = 'Please enter your confirmation password');
 


                                         document.getElementsByName('password_c')[0].focus() ;
                                          return false; 
     } 
                   


          
                                        
     if (document.getElementsByName('pass')[0].value != document.getElementsByName('password_c')[0].value)                                   
                                        { 
                                           
                            alert(document.getElementById('error').innerHTML = 'Passwords do not match '); 
                            document.getElementsByName('password_c')[0].focus() ;
                                          return false; 
                                             
                                        } 
     
                                        
                     }               
                               
                 </script>

</body>





<!-- sign up process -->
<?php
$msg1='';
$_SESSION['msg1']=$msg1;
include("connect.php");
if(isset($_POST['signup']))
{

    //$uid=$_POST['uid'];
    $profile=$_FILES['profile']['name'];
    $profiletemp=$_FILES['profile']['tmp_name'];
    $folder = '../image/';
    move_uploaded_file($profiletemp, $folder.$profile);
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $passw=md5($pass);
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    //$role=$_POST['role'];
  
  
  $pizza="GCTE/00/22";
  $pieces=explode("/",$pizza);
  
  //$uid=intval($pieces[1])+1;
  $sql1="select * from user";
$result=mysqli_query($conn,$sql1);

$row=mysqli_num_rows($result);
$row=$row + 1;
 
$uid=$pieces[0]."/".$row."/".date("y");
$sql3="select * from user where uname='$uname'or phone='$phone'or email='$email'";
$result3=mysqli_query($conn,$sql3);
$num=mysqli_num_rows($result3);
if($num==0){



    $sql="insert into user (userid,fname,lname,uname,password,phone,email,role,profile,status) values('$uid','$fname','$lname','$uname','$passw','$phone','$email','Applicant','$profile','active')";
    $qery=mysqli_query($conn,$sql);
    if($qery)
    {
       
        echo "
        <script>
            swal('good job ','congratulations REGISTRATION SUCCESSFUL now you can login into the system by your username','success');
        </script>
        ";
     //header("location:signupp.php"); 
} 
    else
    {
        
    echo "
    <script>
        swal('sorry ','failed to REGISTRATION ','error');
    </script>
    ";
    //header("location:signupp.php");
    }
} else{

echo "
<script>
    swal('sorry ','failed to REGISTRATION use different username or phone number or email ','error');
</script>
";
//header("location:signupp.php");
}
   
}

?>
<!--  signup process -->





<?php

include("footer1.php");
?>
</div>
</html>
<?php
}
else
echo '<p style="color:red;font-size:30px">
There is no vacancy posted now it is inactive it is activated when vacancy is posted.<br>
 <a href="homee.php" class="btn btn-success"> back</a>
</p>';
?>