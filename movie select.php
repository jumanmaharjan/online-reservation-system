<html>
 
<head>
<title>Login Page</title>
  
<style>

#maindiv{height:900px;width:1200px;margin:0px auto;border:2px solid #330800;}

#timg{height:340;width:1180px;float:left}

#nav{text-align:center;height:30px;width:1180px; margin-top:380px;}
#nav ul{list-style-type:none;display:inline;word-spacing:100px;}
#nav ul li{display:inline;}
#nav ul li a{font-size:25px;text-decoration:none;color:GoldenRod ;font-family:courier;space:6px;}
#nav ul li a:hover{background:DarkOrchid ;border-radius:5px;}
#nav li input type:{color:#0000ff;background:#330800;font-family:courier;

#legend{align:center;}
#table{font-family:courier;}

#maindiv{animation:mymove 10s infinite}
@keyframes mymove {
from {background:#DD8181;}
to {background:#0D9ECF;} 



</style>


</head>
<body bgcolor="  #330800">
	
<div id="maindiv">


<div id="timg">

<img src="image\img1.jpg "alt="Naruto picture" width="1180px"height="350px" id="img">
	
</div>





<div id="nav">
<ul>

<li><a href="home.html">HOME</a></li>
<li><a href="form.php">FORM</a></li>
<li><a href="reserve.php">SEAT</a></li>
<li><a href="sign-in.php">SIGN-IN</a></li>
<li><a href="sign-in.php">BOOKING</a></li>
<li><a href="logout.php">logout</a></li>
</div>



<div style="align:center;height:150px;width:1180;color:green;font-family:unicode;background:#0D9ECF;margin-top:10px;" >
	  
<form id="col" action="seat.php">
	  
<fieldset>
		
<legend id="legend">Pick Ticket</legend>
		
<table id="table">
		  
<tr>
			
<td>Movie Name</td>
			
<td><center>
<select name="Select the movie">
<option value="Spider-man: Homecoming">Spider-man: Homecoming</option>
<option value="The Mummy (2017)">The Mummy (2017)</option>
<option value="Despicable Me 3">Despicable Me 3</option>
<option value="Wonder Woman">Wonder Woman</option>
<option value="War for the Planet of the Apes">War for the Planet of the Apes</option>	
<option value="Guardians of the Galaxy 2">Guardians of the Galaxy 2</option>
<option value="Transformers: The Last Knight">Transformers: The Last Knight</option>
</select></center><td>
		  
</tr>
		  
<tr>
			
<td>Date</td>
			
<td><center>
<input type="checkbox" name="day[]" value="day1">july 13,2017
<input type="checkbox" name="day[]" value="day2">july 14,2017
<input type="checkbox" name="day[]" value="day3">july 15,2017
<input type="checkbox" name="day[]" value="day4">july 16,2017
</cente></td>
		  
</tr>

<tr>
<td> Time</td>

<td><center>
<select name="Select the time">
<option value="time1">07:30 AM</option>
<option value="time2">11:00 AM</option>
<option value="time3">03:30 PM</option>
<option value="time4">7:00 pm</option>
</select>
</center></td>

</tr>		  

<tr>
			
<td><input type="submit"name="booking"value="Show Booking"></td>
	  
</tr>
		
</table>
	  
</fieldset>
	
</form>

<p>Online movie booking website</p>




</div>

<?php
if(isset($_POST['booking'])){
$time=$_POST["Select the time"];
$movies=$_POST["Select the movie"];
$day=$_POST["day"];
$email=$_session['email'];
$dbhost = 'localhost';    
$dbuser = 'root';    
$dbpass = '';    
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);        
if(! $conn ) {      
 die('Could not connect: ' . mysqli_error());   
 }        

mysqli_select_db('db_moviereserve');
  $i="INSERT INTO tb_moviereserve(email,MovieName,date,time )VALUE('$email','$movie','$day','$time')"; 
 $r = mysqli_query($conn, $i);        
if(! $r ) {
       die('Could not enter data: ' . mysqli_error());    
		}       
 echo "Entered data successfully\n"; 
 mysqli_close($conn); 


session_start();
$_session['movies']=$movies;
$_session['date']=$date;
$_session['time']=$time;
}


?> 
  
</body>

</html>
