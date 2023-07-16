

<?php
session_start();
if(isset($_SESSION['name']))
{
		
}
else{
	 echo "<script>alert('plzzzzz login');window.location.href='loginform.php';</script>";
}?>

<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/jquery.js" rel="stylesheet"></script>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
<link href="css/font.css" rel="stylesheet"/></head>
<style>
#header1{
	background:teal;
	padding:1%;
	min-height:10px;
	font-size:20px;
	color:white;
	font-weight:bold;
	text-align:center;
}
#header2{
	background:black;
	padding:3px;
	text-align:center;
}
 a{

	margin-left:35px;
}
li{
	margin-top:10px;
}

</style>
<body>
<div class="container-fluid">
<div class="row" style="background:teal;">
<div class="col-sm-12" id="header1">Welcome Back,<?php echo $_SESSION['name']?> </div>
</div>

<div class="row" style="background:skyblue;padding:5px;min-height:30px; box-shadow:2px 2px 2px black;">
<div class="col-sm-2"><img src="ggpalogo.png" style="height:80px; width:80px; border-radius:50%;"></div>
<div class="col-sm-8">
<nav class="navbar navbar-expand-lg navbar-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" class="menu">
    <ul class="navbar-nav">
	 <li class="nav-item active">
        <a class="nav-link fa fa-tachometer" href="#">&nbsp;Dashboard <span class="sr-only">(current)</span></a>
      </li>
	        <li class="nav-item active">
        <a class="nav-link fa fa-upload" href="alldocument.php">&nbsp;All document</a>
      </li>
	  
	  
      <li class="nav-item active">
        <a class="nav-link fa fa-upload" href="uploaddocument.php">&nbsp;Upload document</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-sign-out" href="logout">&nbsp;Log out</a>
      </li>
	  
     <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle fa fa-cog" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          &nbsp;Setting
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="changepassword.php">Change pasword</a>
          <a class="dropdown-item" href="myprofile.php">My profile</a>
         
        </div>
      </li>
    </ul>
  </div>
</nav>

</div>
<div class="col-sm-2"><img src="ProfilePic/<?php echo $_SESSION['file']?>"style
="height:80px; width:80px; border-radius:50%;"></div>
</div>
<div class="row">
<div class="container"><center><h3><b>Change Your Password here</b></h3></center>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4" style="min-height:50;background:url('.jpeg');padding:2px; border:
 5px solid black;box-shadow: 0 0 5px black inset;background:gray; color:white; margin-top:2%;margin-bottom:5%;">
<div class="col-sm-12 " style="font-size:25px; color:white; text-align:center; font-weight:bold;">
Change Password</br><hr/>
 </div>
 <form action="changepasswordcode.php" method="post">
<b>Old Password</b></br><input type="password" name="opass" class="form-control" required 
placeholder="Enter your old password"/>
<b>New Password:</b><input type="password" name="npass" class="form-control" required 
placeholder="enter your new password" />
<b>Re-Password</b></br><input type="password" name="rpass" class="form-control" required 
placeholder="re-enter your password"/></br>
<input type="submit" name="sub" class="form-control btn btn-info" value="Change Password"/>

</div>
</div>
</div>


</div>
<div class="row" id="header2">
<div class="col-sm-12" style="text-decoration:none;color:white;">@Copyright 2019 GGP Amethi,
 Developed by the Students for the Students

</div>
</div>
</body>
</html>