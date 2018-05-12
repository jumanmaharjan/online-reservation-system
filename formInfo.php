<?php

		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];	
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repassword=$_POST['rpassword'];
		$birthda=$_POST['day'];
		$birthmonth=$_POST['month'];
		$birthyear=$_POST['year'];
		$telephone=$_POST['tel'];
		$sex=$_POST['sex'];
		$movies=$_POST['movies'];
		$a=implode(',',$movies);

		include('DbConnection.php');

		@mysqli_select_db($conn,"db_moviereserve");

		$i="INSERT INTO tb_personal(fname, lname, email ,password , day , month , year , telephone ,sex ,likeMovie)
			VALUES ('$firstname','$lastname','$email','$password','$birthda','$birthmonth','$birthyear','$telephone','$sex','$a')"; 

		
		if(mysqli_query($conn,$i)) {
			include 'home.html';
		}
		else {
		 	echo "<br>Error: ".$i."<br>".mysqli_error($conn);
		 }

		mysqli_close($conn);
		session_start();
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
?>
