<?php

$Adminname=$_POST['name'];
$password=$_POST['password'];
include('DbConnection.php');

@mysqli_select_db($conn,"db_moviereserve");	
      
$sql="SELECT Adminname,password FROM tb_admin_info";

mysqli_select_db($conn,'db_moviereserve');
  $retval = mysqli_query(  $conn ,$sql);        
if(! $retval ) { 
      die('Could not get data: ' . mysqli_error());   
 }
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
if($Adminname==$row['Adminname']&& $password==$row['password']){
header("location: adminmovie.php");
}
else{
echo "Your Login Name or Password is invalid";
}
}
mysqli_close($conn); 

session_start();
$_SESSION['adminname']=$Adminname;
$_SESSION['password']=$password;




?> 