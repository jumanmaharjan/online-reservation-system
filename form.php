<!DOCTYPE html>
<html>
<head><title>form</title>
<!--
<script>
function formvalidation(){
var l = /^[A-Za-z0-9]+$/;
var n= /^[0-9+]+$/;

var x=document.formstyle.fname.value;
if(x=="")
{
alert("Enter the First name");
}
var x=document.formstyle.fname.value;
if(x.length>20)
{
alert("The First name is too long enter upto 20 charater only");
}

var y=document.formstyle.lname.value;
if(y=="")
{
alert("Enter the Last name");
}
var y=document.formstyle.lname.value;
if(y.length>20)
{
alert("The Last name is too long enter upto 20 charater only");
}
var e=document.formstyle.email.value;
if(e=="")
{
alert("Enter the email");
}
var dotpos=e.lastIndexOf(".");
var atpos=e.indexOf("@");
if(dotpos-atpos<3)
{
alert("The email address is not valid");
}
var p1=document.formstyle.password.value;
if(p1=="")
{
alert("Enter the password");
}
var p2=document.formstyle.rpassword.value;
if(p2=="")
{
alert("Enter the Re enter password");
}

if(p1!=p2)
{
alert("The password should be same");
}

var d=document.formstyle.day.value;
if(d=="")
{
alert("Enter the day");
}
var m=document.formstyle.month.value;
{
alert("Enter the month");
}
var y=document.formstyle.year.value;
{
alert("Enter the year");
}

var t=document.formstyle.tel.value;
var plus=t.indexOf("+");
if(t=="")
{
alert("Enter the Phone Numver ");
}
if(t<10||t>30)
{
alert("The phone no should be between 10 to 30 digits");
}
var s=document.formstyle.sex.value;
if(s=="")
{
alert("Enter the sex");
}
var c=document.formstyle.movies.value;
if(c=="")
{
alert("Enter any one choice at least");
}
}

</script> -->




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
<li><a href="form.php">FORM</a></li>
<li><a href="reserve.php">SEAT</a></li>
<li><a href="sign-in.php">SIGN-IN</a></li>
<li><a href="sign-in.php">BOOKING</a></li>

</ul>
</div>
</div>


<form name="formstyle" id="form1"  method="post" action="formInfo.php">
<fieldset>
<legend>personl information</legend><br><br>
<table boader="1px">
<tr>
<td>First Name:</td>
<td><input type="text" name="fname" value="" min="0"max="20"size="30"><p id="fnames"></p></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text"  name="lname"  value="" min="0"max="15"size="30" background="red"><p id="lnames"></p></td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="text" name="email" value="" min="0"max="20"size="30"><br></td> 
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" name="password"  value=""min="0" max="20" size="30"> <br></td> 
</tr>

<tr>
<td>Re-enter Password:</td>
<td><input type="Password" name="rpassword" value="" min="0" max="20" size="30"></td>
</tr>


<tr> <td>Birth date: </td>
<tr>
	<td>
			Year:
	</td>

	
	<td>	<select name="year">
				<option value="1990"> 1990 </option>
				<option value="1991"> 1991 </option>
				<option value="1992"> 1992 </option>
				<option value="1993"> 1993 </option>
				<option value="1994"> 1994 </option>
				<option value="1995"> 1995 </option>
				<option value="1996"> 1996 </option>
				<option value="1997"> 1997 </option>
				<option value="1998"> 1998 </option>
				<option value="1999"> 1999 </option>
				<option value="2000"> 2000 </option>
				<option value="2001"> 2001 </option>
				<option value="2002"> 2002 </option>
				<option value="2003"> 2003 </option>
				<option value="2004"> 2004 </option>
				<option value="2005"> 2005 </option>
			</select>
	<td>
</tr>


<tr>
			
	<td>		Month:	</td>
	<td>
				<select name="month">		
							<option value="jan"> january</option>
							<option value="feb"> feburary</option>
							<option value="march"> march</option>
							<option value="april"> april</option>
							<option value="may"> may </option>
							<option value="june"> june</option>
							<option value="july"> july</option>
							<option value="aug"> august</option>
							<option value="sept">septembet</option>
							<option value="oct"> october</option>
							<option value="nov"> november</option>
							<option value="dec"> december</option>
			</select>
		</td>
</tr>


<tr>
		<td>	Day: </td>	<td><Input type="text" name="day" maxlength="25">  <br>	</td>
		
	
</tr>


<tr>
 <td> Telephone:</td>
  <td><input type="tel" name="tel"  value="" size="20"></td>
</tr>

<tr>
<td>sex:</td>
<td>  <input type="radio" name="sex" value="male" >Male
  <br>
  <input type="radio" name="sex" value="female">Female
</td>
</tr>

<tr>
<td>Movie you like:</td>
<td><center>	
	<input type="checkbox" name="movies[]" value="English Movie"  >English Movie
	<input type="checkbox" name="movies[]"  value="Hindi Movie" >Hindi Movie
	<input type="checkbox" name="movies[]" value="Animation Movie" >Animation Movie
	<input type="checkbox" name="movies[]" value="Nepali Movie"  >Nepali Movie
</center></td>
</tr>

<tr>
		<td> <br><br><input type="submit" value="Submit" name="submit" ></td>  <!-- onclick="formvalidation()" -->
		<td> <br><br><input type="reset" value="reset"></td>
</tr>
</table>

</fieldset>
</div>




</body>
</html>