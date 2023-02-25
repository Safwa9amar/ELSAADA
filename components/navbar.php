<?php
if (isset($_GET['page'])) {
  $curr_page = $_GET['page'];
} else {
  $curr_page = 'El_Saada';
}
?>

<div class="nav">

  <a class="icon" href="?page=home">
    <img src="./images/logo.png" alt="logo" />
  </a>
  <ul class="menu">
    <li>
      <a class="<?php if ($curr_page === 'home') {
                  echo 'active';
                } ?>" href="?page=home">Acceuil</a>
    </li>
    <li>
      <a class="<?php if ($curr_page === 'store' || $curr_page === 'products') {
                  echo 'active';
                } ?>" href="?page=store">Store</a>
    <li>
      <a class="<?php if ($curr_page === 'about') {
                  echo 'active';
                } ?>" href="?page=about">A propos</a>
    </li>
    <li>
      <a class="<?php if ($curr_page === 'gallerie') {
                  echo 'active';
                } ?>" href="?page=gallerie">Gallerie</a>
    </li>
    <li>
      <a class="<?php if ($curr_page === 'contact') {
                  echo 'active';
                } ?>" href="?page=contact">Contact</a>
    </li>
    <li>
      <a class="action-btn" href="./admin/" target="_blank" >
        <i class="fa fa-user"></i>
        s'identifier
      </a>
    </li>
  </ul>
</div>