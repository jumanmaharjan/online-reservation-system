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

		$i="INSERT INTO tb_reserve(email, MovieName, datee, timee, seat)
			VALUES ('$email','$movie','$day','$time','$a')"; 

		
		if(mysqli_query($conn,$i)) {
			include 'final payment.html';
		}
		else {
		 	echo "<br>Error: ".$i."<br>".mysqli_error($conn);
		 }

		mysqli_close($conn);
?>





