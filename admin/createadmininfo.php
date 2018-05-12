
<?php

$conn = mysqli_connect("localhost", "root", "","db_moviereserve");         
if(! $conn ) {      
 die('Could not connect: '  . mysqli_error());   
 }        


 

$psql="CREATE TABLE tb_admin_info(Adminname VARCHAR(20), password VARCHAR(20))";
mysqli_select_db($conn,'db_moviereserve');
$pr=mysqli_query(  $conn, $psql);
if ($pr) {
    echo "Table created successfully admin info";
} else {
    echo "Error creating table: ". mysqli_error($conn) ;
}
mysqli_close($conn); 

?>