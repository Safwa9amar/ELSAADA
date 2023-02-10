<?php

include('../db_operations/connect.php');
include('../components/functions.php');
// if (isset($_POST) & !empty($_POST)) {

//   $id = ($_POST['id']);
//   $proporite = ($_POST['proporite']);
//   $emplacement = ($_POST['emplacement']);
//   $nbr_chambr = $_POST['nbr_chambr'];
//   $description = $_POST['description'];
//   $prix = $_POST['prix'];


//   $CreateSql = "INSERT INTO `annonce` (  id,   	proporite, emplacement, nbr_chambr,description,prix)  VALUES('$id', '$proporite', '$emplacement', '$nbr_chambr',description,prix) ";
//   $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
//   if ($res) {
//     $message = "insertion reussi avec succès";
//   } else {
//     $erreur = "erreur d'insertion a la base";
//   }
// }

?>


<div class="profile">
<?php
    if (isset($_GET['page'])) {
      $pages = ['ajouter', 'list_annonce', 'delete','update'];
      $page = $_GET['page'];
      if (in_array($page, $pages)) {
        gotoPage($page);
      } else {
        gotoPage('404');
      }
    } else {
      gotoPage('list_annonce');
    }
    ?>


</div>