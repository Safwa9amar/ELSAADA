<?php include('./components/functions.php') ?>
<?php include('./db_operations/connect.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('./components/header.php') ?>
</head>

<body>
  <main>
    <?php include('./components/navbar.php') ?>

    <?php
    if (isset($_GET['page'])) {
      $pages = ['home', 'about', 'gallerie', 'contact', 'store','products'];
      $page = $_GET['page'];
      if (in_array($page, $pages)) {
        gotoPage($page);
      } else {
        gotoPage('404');
      }
    } else {
      gotoPage('home');
    }
    ?>

  </main>
</body>

</html>