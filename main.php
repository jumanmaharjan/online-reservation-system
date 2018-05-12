<html>
 
<head>
<title>change</title>
  
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

	<img  src="image/img2.jpg "alt="Naruto picture" style="width:1180px;height:350px;">
	
</div>





<div id="nav">
<ul>

<li><a href="home.html">HOME</a></li>
<li><a href="form.php">FORM</a></li>
<li><a href="reserve.php">SEAT</a></li>
<li><a href="sign-in.php">SIGN-IN</a></li>
<li><a href="sign-in.php">BOOKING</a></li>
</ul>
</div>



<div style="align:center;height:300px;width:1180;color:green;font-family:unicode;background:#0D9ECF;margin-top:10px;" >
	  


<form action="seat.php">
<fieldset>
<legend id="legend">BOOK MOVIE</legend>
<input type="submit" value="BOOK MOVIE">
</fieldset>
</form> 


<form action="update.php">
<fieldset>
<legend id="legend">UPDATE</legend>
<input type="submit" value="UPDATE">
</fieldset>
</form> 


<form action="deletereservation.php">
<fieldset>
<legend id="legend">DELETE RESERVATION</legend>
<input type="submit" value="DELETE RESERVATION ">
</fieldset>
</form> 


</form> 

</div>


</div>  
</body>

</html>
