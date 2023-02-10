<?php

function login($username, $password)
{
  // include connection file to connect to database
  include('../db_operations/connect.php');
  // check if username and password is correct
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0  ) {
    // if username and password is correct, set session and redirect to profile page
    $_SESSION['username'] = $username;
    header("Location: index.php");
  } else {
    echo "Invalid username or password";
  }
}