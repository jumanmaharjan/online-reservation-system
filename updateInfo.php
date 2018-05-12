<?php


session_start();

$email=$_SESSION['email'];
$movie=$_POST['select_movie'];
$day=$_POST['day'];	
$time=$_POST['select_time'];
$seat=$_POST['movie'];
$a=implode(',',$seat);

include('DbConnection.php');

@mysqli_select_db($conn,"db_moviereserve");	

 $i="UPDATE tb_reserve SET MovieName='$movie', datee='$day', timee='$time', seat='$a' WHERE email='$email'"; 


 if(mysqli_query($conn,$i)) {
			include 'final payment2.html';
		}
		else {
		 	echo "<br>Error: ".$i."<br>".mysqli_error($conn);
		 }

mysqli_close($conn); 

?> 
  