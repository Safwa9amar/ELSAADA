<?php

require_once ('../db_operations/connect.php');

$id = $_GET['id'];
$DelSql = "DELETE FROM `annonce` WHERE id=$id";

$res = mysqli_query($con, $DelSql);
if ($res) {
  header("Location: bdd.php");
} else {
  echo "Failed to delete";
}
