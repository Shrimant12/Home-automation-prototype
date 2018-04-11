<html>
  <head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>
      Welcome
    </title>
</head>

<body style="background-image: url('iot10.jpg');">
	<style>
		form {border: 1px solid #ff0000;}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button3 {background-color: #f44336;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
} /* Red */ 

.button4 
{
	border-radius: 8px;
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
}

	</style>

	<div align="center" class="container" style="margin-top:170px; background-image: url('white1.jpg');">
	<div style="width:100%;" >

<form method="post">
<h1 align=center>
  <b>

    Hello User


  </b>
</h1>


<table border="0" align="center" width="200">

<tr align="center">
  <td>Room</td>
  <td>High</td>
  <td>Low</td>
</tr>


<tr align="center">
  <td>Bedroom</td>
  	<td><input class="button4" type="submit" name="ONl" value="ON"></td> 
	<td><input class="button4" type="submit" name="OFFl" value="OFF"></td>
<?php
	shell_exec("/usr/local/bin/gpio -g mode 17 out");
?>

<?php
	if(isset($_POST['ONl']))
	{

		shell_exec("/usr/local/bin/gpio -g write 17 1,$status");
		echo "$status";
	}
	else if(isset($_POST['OFFl']))
	{
		shell_exec("/usr/local/bin/gpio -g write 17 0");	
	}
?>



<?php
//if(isset($_POST['ONl']))
//{
//echo "Hi";
/*echo '<script type="text/javascript">window.location=\'localhost:8000/cgi-bin/on.py\';</script>';
*/
//header('location: 192.168.43.233:8000/cgi-bin/on.py');
//shell_exec("pyhton /var/www/html/automation/ledon.py");
//window.location=\'sup.html\';
 
//}

?>

<tr align="center">
  <td>Kitchen</td>
  <td><input class="button4" type="submit" name="ONf" value="ON"></td>
  <td><input class="button4"  type="submit" name="OFFf" value="OFF"></td>
</tr>

</table>

<br><br>
<h3 align="center">
<input type="submit" class="button3" name="Logout" value="Logout">
</h3>


<?php

    if(isset($_POST['Logout']))
    {
      header("location: logoff.php");
    }

 ?>

</form>
</body>
</html>
