<style>

  /* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
	/* Style the top navigation bar */
.navbar {
  overflow: hidden;
width: 100%; height: 10vh;
background: rgba(0,0,0,0.2);
color: white; display: flex; justify-content: space-between;
align-items:center; text-transform: uppercase;




}

	/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

</style>

<?php 

require_once ('../db_operations/connect.php');

if(isset($_POST['Username'])){
    
    $Uname=$_POST['Username'];
    $password=$_POST['password'];
    
    $sql="select * from `loginform` where Username='".$Uname."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\cssl.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>

<div class ="navbar">
<a href="Home.php">Home</a>
  
</div>
	<div class="container">
	<img src="image/log.jpg"/>
		<form  action="val.php" method="post">
			<div class="input-boxes">
      <i class="fas fa-user"></i>   

				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="input-boxes">

				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>