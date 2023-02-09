<?php
$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
    die("database connection failed" . mysqli_error($con));
}
$db = mysqli_select_db($con, 'agence_sba');
if (!$db) {
    die("database selected failed" . mysqli_error($con));
}
?>