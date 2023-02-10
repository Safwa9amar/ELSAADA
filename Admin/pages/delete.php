<?php

include('../db_operations/connect.php');
include('./components/variables.php');

$id = $_GET['id'];
$DelSql = "DELETE FROM $product_table WHERE id=$id";

$res = mysqli_query($con, $DelSql);
if ($res) {
  header("Location: index.php");
} else {
  echo "Failed to delete";
}
