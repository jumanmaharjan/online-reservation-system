<html>
 
<head>
<title>Login Page</title>
  
<style>

#maindiv{height:900px;width:1200px;margin:0px auto;border:2px solid #330800;}

#timg{height:340;width:1180px;float:left}

#nav{text-align:center;height:30px;width:1180px; margin-top:380px;}
#nav ul{list-style-type:none;display:inline;word-spacing:100px;}
#nav ul li{display:inline;}
#nav ul li a{font-size:25px;text-decoration:none;color:GoldenRod ;font-family:courier;space:6px;}
#nav ul li a:hover{background:DarkOrchid ;border-radius:5px;}
#nav li input type:{color:#0000ff;background:#330800;font-family:courier;

#legend{align:center;}
#table{font-family:courier;}

#maindiv{animation:mymove 10s infinite}
@keyframes mymove {
from {background:#DD8181;}
to {background:#0D9ECF;} 



</style>


</head>
<body bgcolor="  #330800">
	
<div id="maindiv">


<div id="timg">

	<img  src="image\img1.jpg"alt="Naruto picture" style="width:1180px;height:350px;">
	
</div>





<div id="nav">
<ul>

<li><a href="home.html">HOME</a></li>
<li><a href="form.php">FORM</a></li>
<li><a href="reserve.php">SEAT</a></li>
<li><a href="sign-in.php">SIGN-IN</a></li>
<li><a href="sign-in.php">BOOKING</a></li>
</div>



<div style="align:center;height:250px;width:1180;color:green;font-family:unicode;background:#0D9ECF;margin-top:10px;" >
	  
<form id="col" action="logincheck.php" method="post">
	  
<fieldset>
		
<legend id="legend">Login html</legend>
<table id="table">	  
<tr>			
	<td>E-mail</td>
			
	<td><center><input type="text" value="" name="email" value=""></center><td>		  
</tr>
		  
<tr>			
	<td>password</td>
	<td><center><input type="password" value="" name="password" value=""></cente></td>
</tr>
		  
<tr>			
<td><input type="submit" name="submit" value="submit"></td>	  
</tr>
		
</table>
	  
</fieldset>
	
</form>

<p>If you dont hava the id then Plesase signup first</p>

<form action="form.php">
<fieldset>
<legend id="legend">SIGNUP</legend>
<input type="submit" value="signup    or  form">
</fieldset>
</form> 
</div>


</div> 
<?php
if(isset($_POST['submit'])){
$email=$_POST["email"];
$password=$_POST["password"];

$dbhost = 'localhost';    
$dbuser = 'root';    
$dbpass = '';    
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);        
if(! $conn ) {      
 die('Could not connect: ' . mysqli_error());   
 }        
$sql="SELECT email,password FROM tb_personal";
mysqli_select_db($conn,'db_moviereserve');
  $retval = mysqli_query(  $conn ,$sql);        
if(! $retval ) { 
      die('Could not get data: ' . mysqli_error());   
 }
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
if($email==$row['email']&& $password==$row['password']){
header("location: main.php");
}
else{
echo "Your Login Name or Password is invalid";
}
}

session_start();
$_SESSION['email']=$email;
$_SESSION['password']=$password;


mysqli_close($conn);

}

?> 
</body>

</html>
