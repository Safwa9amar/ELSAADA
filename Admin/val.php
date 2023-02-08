<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'annonce');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from loginform where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:bdd.php');

}else {
	header('location:login.php');
}
?>