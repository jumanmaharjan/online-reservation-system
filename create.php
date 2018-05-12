
<?php

   
$conn = mysqli_connect("localhost", "root", "","db_moviereserve");        
if(! $conn ) {      
 die('Could not connect: '  . mysqli_connect_error());   
 }      
     


$tsql="CREATE TABLE tb_personal( fname VARCHAR(20),lname VARCHAR(20),email VARCHAR(20) PRIMARY KEY,password VARCHAR(20), day INTEGER(20), month VARCHAR(20), year INTEGER(20), telephone INTEGER(20),sex VARCHAR(20),likeMovie VARCHAR(20))";

$tr=mysqli_query($conn ,$tsql);
if ($tr) {
    echo "Table created successfully";
} else {
    echo "Error creating table: ".mysqli_error($conn) ;
}

mysqli_close($conn); 

?>