<?php

include('../db_operations/connect.php');
include('./components/variables.php');
include('../components/config.php');
include('./functions/upload_img.php');
include('./functions/update_column.php');

$id = $_GET['id'];
$selSql = "SELECT * FROM $product_table  WHERE id=$id";
$res = mysqli_query($con, $selSql);
$r = mysqli_fetch_assoc($res);
$images = explode(',', $r['images']);

if (isset($_POST) & !empty($_POST)) {
  $_name = htmlspecialchars(($_POST['name']));
  $proporite = htmlspecialchars(($_POST['informations']));
  $emplacement = htmlspecialchars(($_POST['emplacement']));
  $nombre_chembre = htmlspecialchars(($_POST['nombre_chembre']));
  $description = htmlspecialchars($_POST['description']);
  $prix = htmlspecialchars($_POST['prix']);

  $UpdateSql = "UPDATE $product_table SET  
                name='$_name', 
                informations='$proporite',
                emplacement='$emplacement',
                nombre_chembre='$nombre_chembre',
                description='$description',
                prix='$prix'
                WHERE id=$id ";

  $res = mysqli_query($con, $UpdateSql);
  if ($res) {
    header("location: ./");
  } else {
    $erreur = "la mise à jour a échoué.";
  }
}

if (isset($_GET['upload_img'])) {

  // get the img 
  $img = $_FILES['img'];
  if ($img) {
    $uploaded_img = upload_img($upload_dir, $img, $id);
    // get the img name
    $img_name = $img['name'];
    // get the id
    $id = $_GET['id'];
    // query to select all images
    $sql = "SELECT * FROM $product_table where id=$id ";
    // execute query
    $result = mysqli_query($con, $sql);
    // edit images column
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $images = explode(',', $row['images']);
      }
    }
    // add new image to $images array
    array_push($images, $uploaded_img);
    // convert array to string
    $images = implode(',', $images);
    // update images column
    $sql = "UPDATE $product_table SET images='$images' WHERE id=$id";
    // execute query
    mysqli_query($con, $sql);
    // redirect to update page
    header("location: ./?page=update&id=$id");
  } else {
    $erreur = "l'ajout de l'image a échoué.";
  }
}
?>
<link rel="stylesheet" href="./css/update.css">
<div class="update">
  <?php if (isset($erreur)) { ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $erreur; ?>
    </div> <?php } ?>

  <form action="" method="POST">
    <div class="form-wrapper">
      <h2>Modifié</h2>
      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <input type="text" name="name" placeholder="name" class="form-control" value="<?php echo $r['name'] ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">Informations</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="informations" id="" cols="30" rows="5"><?php echo $r['informations'] ?></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">emplacement</label>
        <div class="col-sm-10">
          <input type="text" name="emplacement" placeholder="emplacement" class="form-control" value="<?php echo $r['emplacement'] ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">N°: chembre</label>
        <div class="col-sm-10">
          <input type="text" name="nombre_chembre" placeholder="nombre_chembre" class="form-control" value="<?php echo $r['nombre_chembre'] ?>">
        </div>
      </div>


      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">description</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="description" cols="30" rows="3"><?php echo $r['description'] ?></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">prix</label>
        <div class="col-sm-10">
          <input type="text" name="prix" placeholder="prix" class="form-control" value="<?php echo $r['prix'] ?>">
        </div>
      </div>
      <!-- add multiple image uplod input -->
      <input type="file" id="imageUpload" name="img" hidden>

      <div class="pt-4">
        <input type="submit" value="Edit" class="btn btn-primary ">

      </div>
    </div>
    <div class="form-slider">
      <?php include('../components/product_slider.php') ?>
      <div class="multipleImgUploads">
        <!-- check if count images equal 8 -->
        <?php if (count($images) < 8) { ?>
          <label for="imageUpload" class="btn btn-primary">Add Image</label>
        <?php } ?>
        <!-- else sho alert your cant add more then 8 images -->
        <?php if (count($images) == 8) { ?>
          <div class="alert alert-danger" role="alert">
            You can't add more then 8 images
          </div>
        <?php } ?>
      </div>
    </div>

  </form>
</div>



<script>
  // add event listener to the input file
  document.getElementById('imageUpload').addEventListener('change', function() {
    // get the file
    const file = this.files[0];
    // check if file is not empty
    if (file) {
      // create new form data
      const formData = new FormData();
      // append the file to the form data
      formData.append('img', file);
      // send the request to the server
      fetch('.?page=update&id=<?php echo $id ?>&upload_img', {
        method: 'POST',
        body: formData
      }).then(res => {
        // check if the response is success
        if (res.ok) {
          // reload the page
          location.reload();
        }
      })
    }
  })
</script>