<html>
 
<head>
<title>Admin Login Page</title>

<script>
function formvalidation(){
var l = /^[A-Za-z0-9]+$/;
var n= /^[0-9+]+$/;

var x=document.formstyle.name.value;
if(x=="")
{
alert("Enter the admin name");
}


var y=document.formstyle.password.value;
if(y=="")
{
alert("Enter the password");
}

}

</script>
  
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

	<img  src="Highschool-DxD-born.jpg "alt="Naruto picture" style="width:1180px;height:350px;">
	
</div>





<div id="nav">
<ul>

<li><a href="home.html">HOME</a></li>
<li><a href="form.php">FORM</a></li>
<li><a href="reserve.php">SEAT</a></li>
<li><a href="sign-in.php">SIGN-IN</a></li>
<li><a href="sign-in.php">BOOKING</a></li>
</ul>
</div>



<div style="align:center;height:250px;width:1180;color:green;font-family:unicode;background:#0D9ECF;margin-top:10px;" >
	  
<form id="col" name="formstyle" action="adminmovie.php">
	  
<fieldset>
		
<legend id="legend">Admin Login html</legend>
		
<table id="table">
		  
<tr>
			
<td>Adminname</td>
			
<td><center><input type="text" value="Name" name="name"></center><td>
		  
</tr>
		  
<tr>
			
<td>password</td>
			
<td><center><input type="password"value="password"name="password" ></cente></td>
		  
</tr>
		  
<tr>
			
<td><input type="submit"name="submit"value="submit" onclick="formvalidation()"></td>
	  
</tr>
		
</table>
	  
</fieldset>
	
</form>

</div>


</div>  

<?php
if(isset($_POST['submit'])){
$Adminname=$_POST["name"];
$password=$_POST["password"];
$dbhost = 'localhost';    
$dbuser = 'root';    
$dbpass = '';    
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);        
if(! $conn ) {      
 die('Could not connect: ' . mysqli_error());   
 }        
$sql="SELECT email,password FROM tb_admin_info";
mysqli_select_db($conn,'db_moviereserve');
  $retval = mysqli_query(  $conn ,$sql);        
if(! $retval ) { 
      die('Could not get data: ' . mysqli_error());   
 }
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
if($Adminname==$row['Adminname']&& $password==$row['password']){
header("location: main.php");
}
else{
echo "Your Login Name or Password is invalid";
}
}
mysql_close($conn); 
session_start();
$_SESSION['adminname']=$adminname;
$_SESSION['password']=$password;
}



?> 


</body>

</html>
