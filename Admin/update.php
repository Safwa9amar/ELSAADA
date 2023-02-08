<?php 

require_once ('../db_operations/connect.php');

  $id = $_GET['id'];
  $selSql = "SELECT * FROM `annonce`  WHERE id=$id";
  $res = mysqli_query($con, $selSql);
  $r = mysqli_fetch_assoc($res);

  if (isset($_POST) & !empty($_POST)) {
    $proporite = ($_POST['proporite']);
    $emplacement = ($_POST['emplacement']);
    $nbr_chambr = ($_POST['nbr_chambr']);
    $description = $_POST['description'];
    $prix= $_POST['prix'];


    $UpdateSql = "UPDATE `annonce`    SET proporite='$proporite',  emplacement='$emplacement',nbr_chambr='$nbr_chambr', description='$description',prix='$prix' WHERE id=$id ";

    $res = mysqli_query($con, $UpdateSql);
    if ($res) {
      header("location: bdd.php");
    }else{
      $erreur = "la mise à jour a échoué.";
    }
  }

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>crud app php</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css" >
</head>
<body>
  <?php   
    include 'navbar.php';
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
          <label for="input1" class="col-sm-2 control-label">proporite</label>
          <div class="col-sm-10">
            <input type="text" name="proporite" placeholder="proporite" 
            class="form-control" id="input1"
            value="<?php echo $r['proporite'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">emplacement</label>
          <div class="col-sm-10">
            <input type="text" name="emplacement" placeholder="emplacement" class="form-control" id="input1"
            value="<?php echo $r['emplacement'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">nbr_chambr</label>
          <div class="col-sm-10">
            <input type="text" name="nbr_chambr" placeholder="nbr_chambr" class="form-control" id="input1"
            value="<?php echo $r['nbr_chambr'] ?>">
          </div>
        </div>

      
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">description</label>
          <div class="col-sm-10">
            <input type="text" name="description" placeholder="description" class="form-control" id="input1"
            value="<?php echo $r['description'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">prix</label>
          <div class="col-sm-10">
            <input type="text" name="prix" placeholder="prix" class="form-control" id="input1"
            value="<?php echo $r['prix'] ?>">
          </div>
        </div>

        <div class="pt-4">
          <input type="submit" value="Edit" class="btn btn-primary m-3">
         
        </div>
      </form>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>