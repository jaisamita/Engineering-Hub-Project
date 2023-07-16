
<?php
session_start();
if(isset($_SESSION['name']))
{
		
}
else{
	 echo "<script>alert('plzzzzz login');window.location.href='loginform.php';</script>";
}?>
<?php
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$gen=$_POST['gen'];
	$user=$_SESSION['email'];
	$college=$_POST['college'];
	$photo=$_FILES['pic']['name'];
	$con=mysqli_connect('localhost','root','','miniproject1');
	if($photo=='null'){
	$query="update registration set name='$name',dob='$dob',gender='$gen',college='$college' where email='$user'";
	}else{
	//$con=mysqli_connect(localhost,'root','','miniproject');
	$query="update registration set name='$name',dob='$dob',gender='$gen',file='$photo',college='$college' 
	where email='$user'";
	$phototmpfile=$_FILES['pic']['tmp_name'];
	move_uploaded_file($phototmpfile,"ProfilePic/$photo");
	}
	$res=mysqli_query($con,$query);
		$_SESSION['name']=$name;
		$_SESSION['dob']=$dob;
		$_SESSION['gender']=$gen;
		$_SESSION['file']=$photo;
}
?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/jquery.js" rel="stylesheet"></script>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
<link href="css/font.css" rel="stylesheet"/>
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
</head>
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
        <a class="nav-link fa fa-tachometer" href="dashboard.php">&nbsp;Dashboard <span class="sr-only">(current)</span></a>
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
<div class="col-sm-12" style="text-align:center;font-size:20px"><h1 style="font-family:cursive;">MyProfile</h1></div>
<div class="container">
<div class="row">
<div class="col-sm-2" style="margin-top:5%;"><img src="profilepic/<?php echo $_SESSION['file'];?>" 
style="height:100px;width:100px;"></div>
<div class="col-sm-10">

<form action="" method="POST" enctype="multipart/form-data">
<div class="row">
		<div class="col-sm-6">Name:<input type="text" name="name" value="<?php echo $_SESSION['name']?>" class="form-control"/></div>
		<div class="col-sm-6">DOB:<input type="date" name="dob" value="<?php echo $_SESSION['dob']?>" class="form-control"></div>
		</div> 
		<div class="row">
	 	<div class="col-sm-6"></br><b>Gender:</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="gen" value="male" <?php if($_SESSION['gender']=="male"){echo "checked";}?>/> male
		<input type="radio" name="gen" value="Female" <?php if($_SESSION['gender']=="Female"){echo "checked";}?>/>Female</div>
<div class="col-sm-6">
College Name:

<select class="form-control" name="college">
		<option <?php if($_SESSION['college']=="GGP Amethi"){echo "selected";}?>>Government Girls Polytechnic Amethi</option>
		<option <?php if($_SESSION['college']=="GGP Lucknow"){echo "selected";}?>>Government Polytechnic Lucknow</option>
		<option <?php if($_SESSION['college']=="KNIT btech college"){echo "selected";}?>>Kamla Nehru Institute Btech college</option>
	<option <?php if($_SESSION['college']=="HEwat polytechnic college"){echo "selected";}?>>Government polytechnic Ambedkarnagar</option>
	</select></div>
</div>
<div class="row">
<div class="col-sm-6">Upload Photo:<input type="file" name="pic" value="<?php echo $_SESSION['file']?>" 
class="form-control"/></div>
<div class="col-sm-6"></br><input type="submit" name="sub" class="form-control btn btn-info" 
		value="Update Now"/></div>
		</div>
		
</form>		
		
		
</div>
</div>
</div>
</div>

<!--FOOTER-->
<div class="row" id="header2">
<div class="col-sm-12" style="text-decoration:none;color:white;">@Copyright 2019 GGP Amethi,
 Developed by the Students for the Students

</div>
</div>
</body>
</html>