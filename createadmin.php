
<?php

$conn = mysqli_connect("localhost", "root", "","db_moviereserve");         
if(! $conn ) {      
 die('Could not connect: '  . mysqli_error());   
 }        


 

$psql="CREATE TABLE tb_admin_movie(Adminname VARCHAR(20),moviename VARCHAR(20),director VARCHAR(20),cast VARCHAR(20),producer VARCHAR(20),timee VARCHAR(20),movietype VARCHAR(20),moviefile LONGBLOB)";
mysqli_select_db($conn,'db_moviereserve');
$pr=mysqli_query(  $conn, $psql);
if ($pr) {
    echo "Table created successfully movieReserve";
} else {
    echo "Error creating table: ". mysqli_error($conn) ;
}
mysqli_close($conn); 

?>