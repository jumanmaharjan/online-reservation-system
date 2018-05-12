<!DOCTYPE html>
<html>
<head><title>adminmovie</title>
<script>
function formvalidation(){
var l = /^[A-Za-z0-9]+$/;
var n= /^[0-9+]+$/;

var x=document.formstyle.movie.value;
if(x=="")
{
alert("Enter the movie name");
}


var y=document.formstyle.dname.value;
if(y=="")
{
alert("Enter the director name");
}

var p=document.formstyle.producer.value;
if(p=="")
{
alert("Enter the producer name");
}

var c=document.formstyle.cast.value;
if(c=="")
{
alert("Enter the cast");
}

var t=document.formstyle.time.value;
if(t=="")
{
alert("Enter the time");
}

}

</script>




<style>
#maindiv{height:1000px;width:1180px;margin:0px auto;;background:#330800;}

#ting{height:350px;width:1180px;margin:0px auto}
#top-menu{height:30px;width:1100px;margin:0px auto;margin-top:6px;padding:5px;align:center;}


#nav{text-align:center;}
#nav ul{list-style-type:none;display:inline;word-spacing:100px;}
#nav ul li{display:inline;}
#nav ul li a{font-size:25px;text-decoration:none;color:GoldenRod ;font-family:courier;space:6px;}
#nav ul li a:hover{background:DarkOrchid ;border-radius:5px;}
#nav li input type:{color:#0000ff;background:#330800;font-family:courier;}



#form1{animation:mymove 10s infinite}
@keyframes mymove {
from {background:#DD8181;}
to {background:#0D9ECF;;} 
#form1{
color:white;
background:red;
}

</style>

<script type="text/javascript">
var imagecount=1;
var total=8;
function slide(x)
{
var Image= document.getElementById("img");
imagecount=imagecount+x;
if(imagecount>total){imagecount=1;}
if(imagecount<1){imagecount=total;}
Image.src="image/img"+ imagecount +".JPG";
}
window.setInterval(
function slideA()
{
var Image= document.getElementById("img");
imagecount=imagecount+1;
if(imagecount>total){imagecount=1;}
if(imagecount<1){imagecount=total;}
Image.src="image/img"+ imagecount +".JPG";
},2000);
</script>



</head>
<body bgcolor="black" onload="Slider()">
<div id="maindiv">


<div id="ting">
	<img src="image\img1.jpg "alt="Naruto picture" width="1180px"height="350px" id="img">

	




</div>
<div id="top-menu" >
<div id="nav">
<ul>

<li><a href="home.html">HOME</a></li>
<li><a href="form.html">FORM</a></li>
<li><a href="table.html">TABLE</a></li>
<li><a href="sign-in.html">SIGN-IN</a></li>
<li><a href="motivation.html">Motivation</a></li>


</ul>
</div>
</div>


<form name="formstyle" id="form1" action="adminInfo.php" method="post">
<fieldset>
<legend>Admin information</legend><br><br>
<table boader="1px">
<tr>
<td>Movie Name:</td>
<td><input type="text" name="movie" min="0"max="20"size="30"><p id="movie"></p></td>
</tidr>
<tr>
<td>Director Name:</td>
<td><input type="text"  name="dname" min="0"max="15"size="30" background="red"><p id="dname"></p></td>
</tr>
<tr>
<td>Producr:</td>
<td><input type="text" name="producer" min="0"max="20"size="30"></td>
</tr>
<tr>
<td>Cast:</td>
<td><input type="text" name="cast" min="0"max="20"size="30"></td>
</tr>
<tr>
<td>Time:</td>
<td><input type="text" name="time" min="0"max="20"size="30"></td>
</tr>
<tr>
<td>Movie type:</td>
<td><center><input type="checkbox" name="movies"  >English Movie
<input type="checkbox" name="movies"  >Hindi Movie
<input type="checkbox" name="movies" >Animation Movie
<input type="checkbox" name="movies"  >Nepali Movie
</center></td>
</tr>
Movie File:
<input type="file" name="moviefile">
<tr>
<td> <br><br><input type="submit" value="Add" onclick="formvalidation()"></td>
<td> <br><br><input type="reset" value="reset"></td>
</tr>
</table>
</fieldset>
</div>
</body>
</html>