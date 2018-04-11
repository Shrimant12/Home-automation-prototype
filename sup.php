<?php
include "db.php";

if(!$con)
{
die("Could not connect".mysqli_error());
}

//mysqli_select_db("phpmyadmin",$con);


if(isset($_POST['Signup']))
{
  echo "Registered Successfully";

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];


$rs = mysqli_query($con,$query);

echo '<script type="text/javascript">alert("'.$fname.' Registered successfully")</script>';
//;window.location=\'sup.html\';
//header("location:mainpg.php");
}

?>

<!-- hi -->
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Signup Page
    </title>
  </head>
<body style="background-image: url('iot10.jpg');">
	<style>
	form{border: 1px solid #ff0000;}

	.button
	 {
   	 background-color: #4CAF50; /* Green */
   	 border: none;
    	 color: white;
   	 padding: 15px 32px;
   	 text-align: center;
   	 text-decoration: none;
   	 display: inline-block;
    	 font-size: 16px;
	}




	</style>

<div class="container" style="margin-top:60px; background-image: url('white1.jpg');">


    <form method="post">

    <h1 align="center">
      <b>
          Welcome to Home Automation Portal
      </b>
    </h1>
<br>

  <h3 align="center">
    First name
      <input align="right" type="text" id="fname"  name="fname" required>
  </h3>

  <h3 align="center">
    Last name
      <input align="right" type="text" id="lname" name="lname" required>
  </h3>

  <h3 align="center">
    Username
      <input type="text" id="uname" name="uname" required>
    </h3>

  <h3 align="center">
    E-mail id
      <input type="text" align="center" id="email" name="email" required>
  </h3>

  <h3 align="center">
    Contact
    <input type="text" id="contact" name="contact" required>
  </h3>

  <h3 align="center">
    Password
    <input type="password" id="pass" name="pass" onkeyup='check();' required>
  </h3>

  <h3 align="center">
    Confirm Password
    <input type="password" id="cpass" name="cpass" onkeyup='check();' required>
    <span id='message'></span>
  </h3>

<script type="text/javascript">

  var check = function()
  {
/*
    if (document.getElementById('pass').length==0&&document.getElementById('cpass').length==0)
      {
        document.getElementById('message').innerHTML = 'Empty field';

     }
*/
    if (document.getElementById('pass').value ==
        document.getElementById('cpass').value)
       {

         document.getElementById('message').style.color = 'green';
         document.getElementById('message').innerHTML = 'Password Matched';

       }


    else
    {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }

</script>

  <h5 align="center">
  <input type="submit" class="button" value="Signup" name="Signup">
 </h5>

 <h5 align="center">
   <input type="submit" class="button" value="Back" name="Back">
 </h5>



 <?php

if(isset($_POST['Back']))
{
  header("location: index.php");
}
mysqli_close();

?>





    </form>
  </body>
</html>
