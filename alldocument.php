


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
#dynamicrow{
	min-height:200px;
	background:url('7.jpg');
	background-size:cover;
	max-height:30px;
	padding:2%;
	box-shadow:1px 2px 2px pink;
}
.heading{
	font-size:16px;
	font-family:cursive;
	color:white;
}
.normaltext{
font-size:16px;
//font-family:Harlow Solid;
color:white;
}
.border{
	border:20px solid tomato;
	padding:1%;
}

</style>
<body>
<div class="container-fluid">
<div class="row" style="background:teal;">
<div class="col-sm-12" id="header1">Welcome Back,<?php echo $_SESSION['name']?> </div>
</div>

<div class="row" style="background:skyblue;padding:5px;min-height:30px; 
box-shadow:2px 2px 2px black;">
<div class="col-sm-2"><img src="ggpalogo.png" style="height:80px; width:80px; 
border-radius:50%;"></div>
<div class="col-sm-8">
<nav class="navbar navbar-expand-lg navbar-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarNavDropdown"
  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" class="menu">
    <ul class="navbar-nav">
	 <li class="nav-item active">
        <a class="nav-link fa fa-tachometer" href="dashboard.php">&nbsp;Dashboard 
		<span class="sr-only">(current)</span></a>
      </li>
	        <li class="nav-item active">
        <a class="nav-link fa fa-upload" href="alldocument.php">&nbsp;All document</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link fa fa-upload" href="uploaddocument.php">&nbsp;Upload document</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-sign-out" href="logout.php">&nbsp;Log out</a>
      </li>
	 
     <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle fa fa-cog" href="#" id="navbarDropdownMenuLink" 
		role="button" 
		data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<div class="col-sm-12" style="text-align:center;font-family:Algerian"><h3>Welcome to my
 <span style="color:teal;"><i>ENGG HUM</i><span></h3></div>
 <?php
 $con=mysqli_connect("localhost","root","","miniproject1");
	$data=mysqli_query($con,"SELECT registration.*,studydocument.* 
	from registration,studydocument where registration.email=studydocument.userid order by
	studydocument.id desc;");
	while($row=mysqli_fetch_array($data))//ek ek row ko ek ek bar fetch krega
	//row=1 name first dob-1998-10-07 then 2 name 2 dob,
		{	
 ?>
<div class="col-sm-6" style="margin-top:1%;">
<div class="col-sm-12" id="dynamicrow">
<div class="row">
<div class="col-sm-2"><img src="ProfilePic/<?php echo $row['thumbnail'];?>" class="border" 
height="100px"width="100px">
</div>
<div class="col-sm-10" id=""><span class="heading"><?php echo $row['title'];?></span></br>
<span class="normaltext" style="color:red;"><?php echo $row['course'];?></span></br>
<span class="heading" style="color:white;font-size:13px"><?php echo $row['description'];?>
</span>
</div>
</div>
<div class="row">
<div class="col-sm-4"></br>
<span class="normaltext"><b>File type id :</b><?php echo $row['doctype'];?></br>
Click here download <a href="DocumentFile/<?php echo $row['documentname'];?>">
<span class="fa fa-download" style="color:red;"></span></a></span>
</div> 
<div class="col-sm-2"><img src="ProfilePic/<?php echo $_SESSION['file'];?>" 
height="65px"width="85px" style="border-radius:20%;"></div>
<div class="col-sm-6">
<span class="heading" style="font-size:14px;"><b>Uploaded by:</b><?php echo $row['name'];?>
<span class="normaltext">
<?php echo $row['course'];?>/Computer Science/Fourth sem/<?php echo $row['date'];?></span>
</span></br>
<span class="normaltext"><?php echo $row['college'];?></span></div> 
</div>
</div>
</div></div>
		<?php }?>
<div class="row" id="header2">
<div class="col-sm-12" style="text-decoration:none;color:white;">@Copyright 2019 GGP Amethi,
 Developed by the Students for the Students</div>
</div>
</div>
</body>
</html>
