<?php

include('../components/functions.php');

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