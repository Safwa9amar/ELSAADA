<?php include('./db_operations/connect.php') ?>

<?php
$sql = "SELECT * FROM localtion";
$result = mysqli_query($con, $sql);
$all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo json_encode($all_products);
?>