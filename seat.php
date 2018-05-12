<html>
 
<head>
<title>Login Page</title>
  
  <script>
function addseat(){
var m=document.forms.movie.value;
var i;
var counts , cost, txt;
 for (i = 0; i < movie.length; i++) {
 if (m[i].checked) {
counts=counts+1;
txt=txt+movie[i].value+" ,";
 }
}
cost=cost*300;
document.getElementById('quanty').value =counts;
document.getElementById('chose').value =txt;
document.getElementById('cost').value =cost;

}

</script>
  
  
<style>

#maindiv{height:1200px;width:1200px;margin:0px auto;border:2px solid #330800;}

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

#middlediv{height:700px;width:1200px;margin:0px auto;border:2px solid black;background:black;align:center;color:green;font-family:unicode;background:#0D9ECF;margin-top:10px;}

</style>


</head>
<body bgcolor="  #330800">
	
<div id="maindiv">


<div id="timg">

	<img  src="image\img3.jpg "alt="" style="width:1180px;height:350px;">
	
</div>





<div id="nav">
<ul>

<li><a href="home.html">HOME</a></li>
<li><a href="form.php">FORM</a></li>
<li><a href="reserve.php">SEAT</a></li>
<li><a href="sign-in.php">SIGN-IN</a></li>
<li><a href="sign-in.php">BOOKING</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div>



<div style="align:center;height:150px;width:1180;color:green;font-family:unicode;background:#0D9ECF;margin-top:10px;" >




<form name="formstyle" id="form1" action="seatinfo.php" method="post">	
	  
<fieldset>
		
<legend id="legend">Pick Ticket</legend>
		
<table id="table">
		  
<tr>
			
<td>Movie Name</td>
			
<td><center>
<select name="select_movie">
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
<td> Time</td>

<td><center>
<select name="select_time">
<option value="07:30 AM">07:30 AM</option>
<option value="11:00 AM">11:00 AM</option>
<option value="03:30 PM">03:30 PM</option>
<option value="7:00 pm">7:00 pm</option>
</select>
</center></td>

</tr>		  
<tr>
			
<td>Date</td>
			
<td><center>


<select name="day">
<option value="july 13,2017">july 13,2017</option>
<option value="july 14,2017">july 14,2017</option>
<option value="july 15,2017">july 15,2017</option>
<option value="july 16,2017">july 16,2017</option>
</select>
</center></td>
		  
</tr>

		
</table>
	  
</fieldset>
	


</div>


<p>Online movie booking website</p>

<div id="middlediv">

<fieldset>
<legend id="legend"></center><h1>Select Your Seat</h1></center></legend>
<center><h2> Bottom floor </h2></center>
<table style="width:100%;border:2px solid black;">

<tr>

<td>A</td>
<td style="align:left;"><center>
<input type="checkbox" value="a1" name="movie[]">
<input type="checkbox" value="a2" name="movie[]">
<input type="checkbox" value="a3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="a4" name="movie[]">
<input type="checkbox" value="a5" name="movie[]">
<input type="checkbox" value="a6" name="movie[]">
<input type="checkbox" value="a7" name="movie[]">
<input type="checkbox" value="a8" name="movie[]">
<input type="checkbox" value="a9" name="movie[]">
<input type="checkbox" value="a10" name="movie[]">
<input type="checkbox" value="a11" name="movie[]">
<input type="checkbox" value="a12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="a13" name="movie[]">
<input type="checkbox" value="a14" name="movie[]">
<input type="checkbox" value="a15" name="movie[]">
</center></td>

</tr>
<tr>
<td>B</td>
<td style="align:left;"><center>
<input type="checkbox" value="b1" name="movie[]">
<input type="checkbox" value="b2" name="movie[]">
<input type="checkbox" value="b3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="b4" name="movie[]">
<input type="checkbox" value="b5" name="movie[]">
<input type="checkbox" value="b6" name="movie[]">
<input type="checkbox" value="b7" name="movie[]">
<input type="checkbox" value="b8" name="movie[]">
<input type="checkbox" value="b9" name="movie[]">
<input type="checkbox" value="b10" name="movie[]">
<input type="checkbox" value="b11" name="movie[]">
<input type="checkbox" value="b12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="b13" name="movie[]">
<input type="checkbox" value="b14" name="movie[]">
<input type="checkbox" value="b15" name="movie[]">
</center></td>
</tr>
<tr>
<td>C</td>
<td style="align:left;"><center>

<input type="checkbox" value="c1" name="movie[]">
<input type="checkbox" value="c2" name="movie[]">
<input type="checkbox" value="c3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="c4" name="movie[]">
<input type="checkbox" value="c5" name="movie[]">
<input type="checkbox" value="c6" name="movie[]">
<input type="checkbox" value="c7" name="movie[]">
<input type="checkbox" value="c8" name="movie[]">
<input type="checkbox" value="c9" name="movie[]">
<input type="checkbox" value="c10" name="movie[]">
<input type="checkbox" value="c11" name="movie[]">
<input type="checkbox" value="c12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="c13" name="movie[]">
<input type="checkbox" value="c14" name="movie[]">
<input type="checkbox" value="c15" name="movie[]">
</center></td>
</tr>
<tr>
<td>D</td>
<td style="align:left;"><center>

<input type="checkbox" value="d1" name="movie[]">
<input type="checkbox" value="d2" name="movie[]">
<input type="checkbox" value="d3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="d4" name="movie[]">
<input type="checkbox" value="d5" name="movie[]">
<input type="checkbox" value="d6" name="movie[]">
<input type="checkbox" value="d7" name="movie[]">
<input type="checkbox" value="d8" name="movie[]">
<input type="checkbox" value="d9" name="movie[]">
<input type="checkbox" value="d10" name="movie[]">
<input type="checkbox" value="d11" name="movie[]">
<input type="checkbox" value="d12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="d13" name="movie[]">
<input type="checkbox" value="d14" name="movie[]">
<input type="checkbox" value="d15" name="movie[]">
</center></td>
</tr>
<tr>
<td>E</td>
<td style="align:left;"><center>

<input type="checkbox" value="e1" name="movie[]">
<input type="checkbox" value="e2" name="movie[]">
<input type="checkbox" value="e3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="e4" name="movie[]">
<input type="checkbox" value="e5" name="movie[]">
<input type="checkbox" value="e6" name="movie[]">
<input type="checkbox" value="e7" name="movie[]">
<input type="checkbox" value="e8" name="movie[]">
<input type="checkbox" value="e9" name="movie[]">
<input type="checkbox" value="e10" name="movie[]">
<input type="checkbox" value="e11" name="movie[]">
<input type="checkbox" value="e12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="e13" name="movie[]">
<input type="checkbox" value="e14" name="movie[]">
<input type="checkbox" value="e15" name="movie[]">
</center></td>
</tr>

</table>

<center><h2> Top Floor </h2></center>

<table style="width:100%;border:2px solid black;">

<tr>

<td>F</td>
<td style="align:left;"><center>
<input type="checkbox" value="f1" name="movie[]">
<input type="checkbox" value="f2" name="movie[]">
<input type="checkbox" value="f3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="f4" name="movie[]">
<input type="checkbox" value="f5" name="movie[]">
<input type="checkbox" value="f6" name="movie[]">
<input type="checkbox" value="f7" name="movie[]">
<input type="checkbox" value="f8" name="movie[]">
<input type="checkbox" value="f9" name="movie[]">
<input type="checkbox" value="f10" name="movie[]">
<input type="checkbox" value="f11" name="movie[]">
<input type="checkbox" value="f12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="f13" name="movie[]">
<input type="checkbox" value="f14" name="movie[]">
<input type="checkbox" value="f15" name="movie[]">
</center></td>

</tr>
<tr>

<td>G</td>
<td style="align:left;"><center>
<input type="checkbox" value="g1" name="movie[]">
<input type="checkbox" value="g2" name="movie[]">
<input type="checkbox" value="g3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="g4" name="movie[]">
<input type="checkbox" value="g5" name="movie[]">
<input type="checkbox" value="g6" name="movie[]">
<input type="checkbox" value="g7" name="movie[]">
<input type="checkbox" value="g8" name="movie[]">
<input type="checkbox" value="g9" name="movie[]">
<input type="checkbox" value="g10" name="movie[]">
<input type="checkbox" value="g11" name="movie[]">
<input type="checkbox" value="g12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="g13" name="movie[]">
<input type="checkbox" value="g14" name="movie[]">
<input type="checkbox" value="g15" name="movie[]">
</center></td>

</tr>
<tr>

<td>H</td>
<td style="align:left;"><center>
<input type="checkbox" value="h1" name="movie[]">
<input type="checkbox" value="h2" name="movie[]">
<input type="checkbox" value="h3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="h4" name="movie[]">
<input type="checkbox" value="h5" name="movie[]">
<input type="checkbox" value="h6" name="movie[]">
<input type="checkbox" value="h7" name="movie[]">
<input type="checkbox" value="h8" name="movie[]">
<input type="checkbox" value="h9" name="movie[]">
<input type="checkbox" value="h10" name="movie[]">
<input type="checkbox" value="h11" name="movie[]">
<input type="checkbox" value="h12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="h13" name="movie[]">
<input type="checkbox" value="h14" name="movie[]">
<input type="checkbox" value="h15" name="movie[]">
</center></td>

</tr>
<tr>

<td>I</td>
<td style="align:left;"><center>
<input type="checkbox" value="i1" name="movie[]">
<input type="checkbox" value="i2" name="movie[]">
<input type="checkbox" value="i3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="i4" name="movie[]">
<input type="checkbox" value="i5" name="movie[]">
<input type="checkbox" value="i6" name="movie[]">
<input type="checkbox" value="i7" name="movie[]">
<input type="checkbox" value="i8" name="movie[]">
<input type="checkbox" value="i9" name="movie[]">
<input type="checkbox" value="i10" name="movie[]">
<input type="checkbox" value="i11" name="movie[]">
<input type="checkbox" value="i12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="i13" name="movie[]">
<input type="checkbox" value="i14" name="movie[]">
<input type="checkbox" value="i15" name="movie[]">
</center></td>

</tr>
<tr>

<td>I</td>
<td style="align:left;"><center>
<input type="checkbox" value="i1" name="movie[]">
<input type="checkbox" value="i2" name="movie[]">
<input type="checkbox" value="i3" value="500">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="i4" name="movie[]">
<input type="checkbox" value="i5" name="movie[]">
<input type="checkbox" value="i6" name="movie[]">
<input type="checkbox" value="i7" name="movie[]">
<input type="checkbox" value="i8" name="movie[]">
<input type="checkbox" value="i9" name="movie[]">
<input type="checkbox" value="i10" name="movie[]">
<input type="checkbox" value="i11" name="movie[]">
<input type="checkbox" value="i12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="i13" name="movie[]">
<input type="checkbox" value="i14" name="movie[]">
<input type="checkbox" value="i15" name="movie[]">
</center></td>

</tr>
<tr>

<td>J</td>
<td style="align:left;"><center>
<input type="checkbox" value="j1" name="movie[]">
<input type="checkbox" value="j2" name="movie[]">
<input type="checkbox" value="j3" name="movie[]">
</center></td>

<td style="align:center;"><center>
<input type="checkbox" value="j4" name="movie[]">
<input type="checkbox" value="j5" name="movie[]">
<input type="checkbox" value="j6" name="movie[]">
<input type="checkbox" value="j7" name="movie[]">
<input type="checkbox" value="j8" name="movie[]">
<input type="checkbox" value="j9" name="movie[]">
<input type="checkbox" value="j10" name="movie[]">
<input type="checkbox" value="j11" name="movie[]">
<input type="checkbox" value="j12" name="movie[]">
</center></td>

<td style="align:right;"><center>
<input type="checkbox" value="j13" name="movie[]">
<input type="checkbox" value="j14" name="movie[]">
<input type="checkbox" value="j15" name="movie[]">
</center></td>

</tr>
</table>
<table>
<tr>
<!--
<input type="button" onclick="myFunction()" value="Dispaly cost">
<br><br>
<input type="text" id="order" size="50">
<input type="submit" value="Done">
-->

<td><input type="button" name="Dispaly cost" value="Dispaly cost" onclick="myFunction()"><td>
<td>Number of seat</td>
<td><input type="text" name="quanty" id="quanty" ><td>
<td>seat chosen</td>
<td><input type="text" name="order" id="order" ><td>
<td>total cost</td>
<td><input type="text" name="cost" id="cost" ><td>

</tr>
<tr>
<td><input type="reset" name="reset" value="RESET"><td>
</tr>
<tr>
			
<td><input type="submit" name="booking" value="book"></td>
	  
</tr>




</table>
</fieldset>
</form> 



<script>
function myFunction() {
    var movie = document.forms[0];
    var txt = "";
    var i;
    var j=0;

    for (i = 0; i < movie.length; i++) {
        if (movie[i].checked) {
            txt = txt + movie[i].value + " ";
       		j++;

        }
    }
    document.getElementById("order").value = "  " + txt;
    document.getElementById("quanty").value = " " +j;
    document.getElementById("cost").value = " " +(j*300);
}
</script>



</div>  






</body>

</html>
