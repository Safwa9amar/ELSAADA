<?php
include('../db_operations/connect.php');
include('./components/variables.php');

if (isset($_POST) & !empty($_POST)) {

  $name = ($_POST['name']);
  $informations = ($_POST['informations']);
  $emplacement = ($_POST['emplacement']);
  $nombre_chembre = $_POST['nombre_chembre'];
  $description = $_POST['description'];
  $prix = $_POST['prix'];

  
  $CreateSql = "INSERT INTO $product_table (name, informations, emplacement, nombre_chembre,description,prix)  VALUES('$name','$informations', '$emplacement', '$nombre_chembre','$description','$prix') ";
  $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
  if ($res) {
    $message = "insertion reussi avec succès";
  } else {
    $erreur = "erreur d'insertion a la base";
  }
}


?>



<div class="container">
  <div class="row pt-4">
    <?php if (isset($message)) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo $message; ?>
      </div> <?php } ?>

    <?php if (isset($erreur)) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $erreur; ?>
      </div> <?php } ?>

    <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
      <h2>Ajouter </h2>
      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <input type="text" name="name" placeholder="name" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">Informations</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="informations" id="" cols="30" rows="2"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">emplacement</label>
        <div class="col-sm-10">
          <input type="text" name="emplacement" placeholder="emplacement" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">N°: chembre</label>
        <div class="col-sm-10">
          <input type="text" name="nombre_chembre" placeholder="nombre_chembre" class="form-control">
        </div>
      </div>


      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">description</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="description" cols="30" rows="2"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">prix</label>
        <div class="col-sm-10">
          <input type="text" name="prix" placeholder="prix" class="form-control">
        </div>
      </div>

      <div class="pt-4">
        <input type="submit" value="Edit" class="btn btn-primary m-3">

      </div>
     <!-- include slider -->
     
    </form>
  </div>
</div>