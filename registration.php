<?php
session_start();
//header('location:index.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userlogin');
$name = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$gender = $_POST['gender'];



$s = " select * from user where name='$name'";

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result);

if($num == 1){
	echo "username already taken";
}
else{
	$reg = " insert into user (name, password, email, gender) values('$name', '$pass', '$email', '$gender')";

	mysqli_query($con, $reg);
	echo "Registration Successful";
	$_SESSION['msg'] = '<div class="message">Registration Successful</div>';
	header('location: index.php');
}


?>