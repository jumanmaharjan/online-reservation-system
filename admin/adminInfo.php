<?php
		session_start();
		$adminname=$_SESSION['adminname'];
		$moviename=$_POST['movie'];
		$director =$_POST['dname '];
		$cast=$_POST['cast'];
		$producer=$_POST['producer'];
		$time=$_POST['time'];
		$movietype=$_POST['movies'];
		$a=implode(',',$movietype);
		$moviefile=$_POST['moviefile'];
		

		include('DbConnection.php');

		@mysqli_select_db($conn,"db_moviereserve");

		$i="INSERT INTO tb_admin_movie(Adminname,moviename,director,cast,producer,timee,movietype,moviefile )
			VALUES ('$adminname',$moviename','$director','$cast','$producer','$time','$a','$moviefile')"; 

		
		if(mysqli_query($conn,$i)) {
			echo"Sucessfullly added";
			include 'home.html';
		}
		else {
		 	echo "<br>Error: ".$i."<br>".mysqli_error($conn);
		 }

		mysqli_close($conn);
		

?>





