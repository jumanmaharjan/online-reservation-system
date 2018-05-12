
<?php

   
$conn = mysql_connect('localhost', 'root', '');        
if(! $conn ) {      
 die('Could not connect: '  . mysql_error());   
 }      

$sql = "CREATE DATABASE db_moviereserve";

$r=mysql_query(  $sql,$conn);
if ($r) {
    echo "Database created successfully";
} else {
    echo "Error creating database!!!" ;
}


mysql_close($conn); 

?>