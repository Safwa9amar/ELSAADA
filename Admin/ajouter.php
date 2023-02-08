<?php 

require_once ('../db_operations/connect.php');
  if (isset($_POST) & !empty($_POST)) {
    
    $id = ($_POST['id']);
    $proporite = ($_POST['proporite']);
    $emplacement = ($_POST['emplacement']);
    $nbr_chambr = $_POST['nbr_chambr'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
   

    $CreateSql = "INSERT INTO `annonce` (  id,   	proporite, emplacement, nbr_chambr,description,prix)  VALUES('$id', '$proporite', '$emplacement', '$nbr_chambr',description,prix) ";
    $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
    if ($res) {
      $message = "insertion reussi avec succès";
    }else{
      $erreur = "erreur d'insertion a la base";
    }
  }

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Consulter les annonces:  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css" >
 
 
</head>
<body>
  <?php   
    include 'navbar.php';
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
          <label for="input1" class="col-sm-2 control-label">id</label>
          <div class="col-sm-10">
            <input type="text" name="id" placeholder="id" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Proporite</label>
          <div class="col-sm-10">
          <input type="text" name="proporite" placeholder="proporite" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">emplacement</label>
          <div class="col-sm-10">
            <input type="text" name="emplacement" placeholder="emplacement" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">nbr chambr</label>
          <div class="col-sm-10">
          <input type="text" name="nbr_chambr" placeholder="nbr_chambr" class="form-control" id="input1">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">description</label>
          <div class="col-sm-10">
          <input type="text" name="description" placeholder="description" class="form-control" id="input1">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">prix</label>
          <div class="col-sm-10">
          <input type="text" name="prix" placeholder="prix" class="form-control" id="input1">
          </div>
        </div>
            


        <div class="pt-4">
          <input type="submit" value="Add" class="btn btn-primary m-3">
          <a href="bdd.php">
            <button class="btn btn-success m-3" type="button">
              voir la liste
            </button>
          </a>
        </div>
      </form>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>