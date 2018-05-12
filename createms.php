
<?php

   
$conn = mysqli_connect("localhost", "root", "","db_moviereserve");        
if(! $conn ) {      
 die('Could not connect: '  . mysqli_connect_error());   
 }      


$psql="CREATE TABLE tb_reserve( email VARCHAR(20),MovieName VARCHAR(20),datee VARCHAR(20),timee VARCHAR(20),seat VARCHAR(20))";
 
$ptr=mysqli_query($conn ,$psql);
if ($ptr) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn); 

?>