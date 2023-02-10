<?php

include('../db_operations/connect.php');
include('./components/variables.php');

$id = $_GET['id'];
$selSql = "SELECT * FROM $product_table  WHERE id=$id";
$res = mysqli_query($con, $selSql);
$r = mysqli_fetch_assoc($res);

if (isset($_POST) & !empty($_POST)) {
  $proporite = ($_POST['informations']);
  $emplacement = ($_POST['emplacement']);
  $nombre_chembre = ($_POST['nombre_chembre']);
  $description = $_POST['description'];
  $prix = $_POST['prix'];

  $UpdateSql = "UPDATE $product_table SET informations='$proporite',  emplacement='$emplacement',nombre_chembre='$nombre_chembre', description='$description',prix='$prix' WHERE id=$id ";

  $res = mysqli_query($con, $UpdateSql);
  if ($res) {
    header("location: ./");
  } else {
    $erreur = "la mise à jour a échoué.";
  }
}

?>


<div class="container">
  <div class="row pt-4">
    <?php if (isset($erreur)) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $erreur; ?>
      </div> <?php } ?>

    <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
      <h2>Modifié</h2>

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
          <input type="text" name="description" placeholder="description" class="form-control" value="<?php echo $r['description'] ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">prix</label>
        <div class="col-sm-10">
          <input type="text" name="prix" placeholder="prix" class="form-control" value="<?php echo $r['prix'] ?>">
        </div>
      </div>

      <div class="pt-4">
        <input type="submit" value="Edit" class="btn btn-primary m-3">

      </div>
    </form>
  </div>
</div>