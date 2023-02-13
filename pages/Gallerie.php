<!-- php for gallerie  -->
<?php
$upload_dir = "./admin/uploads";
$images = scandir($upload_dir);
$images = array_diff($images, array('.', '..'));
?>

<link rel="stylesheet" type="text/css" href="css/gallerie.css">
<div class="container">
  <div class="heading">
    <h3>Photo <span>Gallery</span></h3>
  </div>
  <div class="box">
    <?php
    foreach ($images as $image) {
    ?>
      <a href="?page=products&product_id=<?php echo explode('_', $image)[0] ?>" class="img">
        <img src="<?php echo $upload_dir . '/' . $image ?>">
      </a>
    <?php
    }
    ?>
  </div>
</div>