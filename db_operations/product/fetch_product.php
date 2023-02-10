<?php include('./db_operations/connect.php') ?>
<?php
$id = $_GET['product_id'];
// fetch product
$sql = "SELECT * FROM localtion WHERE id = $id";
$result = mysqli_query($con, $sql);
$product = mysqli_fetch_assoc($result);

$images = explode(',', $product['images']);

?>
