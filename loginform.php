
<?php
if(isset($_POST['loginbtn']))
{
	$email=$_POST['eid'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost","root","","miniproject1");
	$query="select * from registration where email='$email' and password='$pass'";
	//echo $query;
	 $data=mysqli_query($con,$query);
	 $cr=mysqli_num_rows($data);
	$row=mysqli_fetch_array($data);
	if($cr>0)
	{
		session_start();
		$_SESSION['name']=$row[0];
		$_SESSION['email']=$row[4];
		$_SESSION['file']=$row[2];
		$_SESSION['pass']=$row[5];
		$_SESSION['dob']=$row[1];
		$_SESSION['gender']=$row[3];
		$_SESSION['college']=$row[6];
		//session_start();
		//$_SESSION['uemail']=$email;              //18+19
		echo "<script>window.location.href='dashboard.php';</script>";      //12+18     
		//echo $row[4];
	}
	else{
		echo "wrong data";
	}
}
?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
<link href="css/font.css" rel="stylesheet"/></head>
<body>

<div class="container"><center><h3><b>LOGIN FORM</b></h3></center>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4" style="min-height:150;background:url('bb.jpeg');background:grey;padding:10px; border:
 5px solid black;box-shadow: 0 0 5px black inset;width:440px;; color:white; margin-top:1%;">
<div class="col-sm-12 " style="font-size:25px; color:white; text-align:center; font-weight:bold;">Login Here</br><hr/>
 </div>
 <form action="" method="post">
<b>Email:</b></br><input type="email" name="eid" class="form-control" required />
<b>Password:</b><input type="password" name="pass" class="form-control" required /></br>
<input type="submit" name="loginbtn" class="form-control btn btn-info" value="Login Now"/>
<a href="register.php" style="text-decoration:none;color:white;">New User? Register now</a>
</div>
</div>
</div>
</body>
</html>