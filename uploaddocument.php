


<?php
session_start();
if(isset($_SESSION['name']))
{
		
}
else{
	 echo "<script>alert('please login');window.location.href='loginform.php';</script>";
}?>
<?php
if(isset($_POST['sub']))
{
	$title=$_POST['title'];
	$course=$_POST['course'];
	$description=$_POST['description'];
	$tag=$_POST['tag'];
	$doctype=$_POST['doctype'];
	
	$thumb_fname=$_FILES['thumbnail']['name'];
	$thumb_tmp=$_FILES['thumbnail']['tmp_name'];
	
	$doc_fname=$_FILES['document']['name'];
	$doc_tmp=$_FILES['document']['tmp_name'];
	$userid=$_SESSION['email'];
	
	$con=mysqli_connect("localhost","root","","miniproject1");

	$res=mysqli_query($con,"insert into studydocument(title,course,description,tag,doctype,thumbnail,documentname,date,status,userid)
	values('$title','$course','$description','$tag','$doctype','$thumb_fname','$doc_fname',curdate(),'Publice','$userid')");
	echo $res;
	if($res)
	{
		move_uploaded_file($thumb_tmp,"ProfilePic/$thumb_fname");
		move_uploaded_file($doc_tmp,"ProfilePic/$doc_fname");
	   echo "<script>alert('your successfully');</script>";
	}
	
}
?>

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
        <a class="nav-link fa fa-tachometer" href="dashboard.php">&nbsp;Dashboard <span class="sr-only">
		(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-upload" href="uploaddocument.php">&nbsp;Upload document</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link fa fa-upload" href="alldocument.php">&nbsp;All document</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-sign-out" href="logout" >&nbsp;Log out</a>
      </li>
	 
     <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle fa fa-cog" href="#" id="navbarDropdownMenuLink" 
		 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<div class="container-fluid" style="min-height:500px;">
<form action="" method="Post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-12" style="margin-top:2%;padding:1%;min-height:300px;font-size:15px;font-family:Times New Roman;background
:gold;box-shadow:1px 1px 2px teal;">
<div class="row">

<div class="col-sm-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil"></i></span>
  </div>
  <input type="text" class="form-control" name="title"
  placeholder="Title of Document" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
<div class="col-sm-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-book"></i></span>
  </div>
  <input type="text" class="form-control" name="course"
  placeholder="For which course" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
<div class="col-sm-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil"></i></span>
  </div>
  <textarea class="form-control" placeholder="Description/Definiton" rows="3" name="description" aria-label="Username" 
  aria-describedby="basic-addon1">
  </textarea>
</div>
</div>
<div class="col-sm-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil"></i></span>
  </div>
  <textarea class="form-control" placeholder="tag for searching" rows="3" name="tag" 
  aria-label="Username" aria-describedby="basic-addon1">
  </textarea>
</div>
</div>
<div class="col-sm-6">
<select class="form-control" name="doctype">
<option>Jpeg</option>
<option>Jpg</option>
<option>Zip file</option>
<option>PDF</option>
<option>Mp3</option>
<option>Video/audio</option>
</select>
</div>
<div class="col-sm-6" style="font-size:17px;">
Thumbnail Of Document<input type="file" name="thumbnail"/>
</div>
<div class="col-sm-6" style="font-size:17px;"></br>
Selelct your Document File<input type="file" name="document"/>
</div>
<div class="col-sm-6"></br>
<input type="submit" name="sub" class="form-control btn btn-info" value="Publish name"/>
</div>
</div>
</div>
</form>
</div>

<!--footer-->
<div class="row" id="header2">
<div class="col-sm-12" style="text-decoration:none;color:white;">@Copyright 2019 GGP Amethi,
 Developed by the Students for the Students

</div>
</div>
</body>
</html>