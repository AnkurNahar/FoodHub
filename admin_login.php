
<html>
<head>
<title> ADMIN LOGIN </title> 

<link rel="stylesheet" type="text/css" href="style1.css"/>

<style type="text/css">
.back{background-color:rgba(255, 218, 185,0.5);margin-left:15%;margin-right:15%}

input[type="email"]{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin-top: 50px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
}	

input[type="password"]{
    border:1px solid black;
    height:45px;
	width: 300px;
	font-size:18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
}	

.btn-login{
	padding: 15px 30px; 
	color: #fff;
	border-radius: 4px;
	border:2px solid gray;
	background-color: rgb(107,142,35);
	margin-bottom: 16px;
	font-size: 20px;
	font-weight: bold;
	font-family:tahoma;
}

p{font-size:22px;
  margin-bottom:70px;
  margin-left:30px;
  margin-right:30px}
  
span{font-style:italic; font-weight:bold}
</style>
    
</head>
<body> 

<img src="logo.png" class="logo">

<div class="back">
<form action ="admin_login_script.php" method="GET">
<input type="email" name="email" size="42"  placeholder="Enter Admin Email"/>
<br/>
<br/>
<input name="password" type="password" size="30" placeholder="Password"/>
<br/>
<input name="login" type="submit" value="Login" class="btn-login"/>
</form>




<?php session_start(); ?>
    <html>
    <body>
        <div id="errMsg">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
    </body>


</div>

<div class="footer">
<table align="center" cellspacing="100" >
<tr>

<td><a href="home.php">HOME </a> </td>


</tr>
</table>
 </div>

</body>
</html>
