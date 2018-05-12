<?PHP
	$conn=mysqli_connect("Localhost","root","");

	if(!$conn) {
		die ("Error: ".$i."<br>".mysqli_error($conn));
	}

	else {
		echo "Successful to connect database ";
	}
	?>
