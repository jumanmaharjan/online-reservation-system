<?php

$email=$_POST["email"];
$password=$_POST["password"];


include('DbConnection.php');

@mysqli_select_db($conn,"db_moviereserve");	

$dsql="DELETE FROM tb_personal WHERE email='$email'";
$d=mysqli_query($conn, $dsql); 
if($d){
echo"Sucessfullly delete the reservation";
include('main.html');
}
else{
echo"can't delete the reseravation " .mysqli_error($conn);
}     

mysqli_close($conn); 
session_start();
$_session['email']=$email;
$_session['password']=$password;




?> 