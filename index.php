<?php include('./components/functions.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('./components/header.php') ?>
</head>

<body>
  <main >
    <?php include('./components/navbar.php') ?>

    <?php
    if (isset($_GET['page'])) {
      $pages = ['home', 'about', 'gallerie', 'contact'];
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
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>