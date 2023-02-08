<?php 
if (isset($_GET['page'])) {
  $curr_page = $_GET['page'];
} else {
  $curr_page = 'El_Saada';
}
?>

<div class="nav">
  <div class="icon">
    <h2 class="logo">El_SaaDa</h2>
  </div>

  <ul class="menu">
    <li>
      <a
        class="<?php if ($curr_page === 'home') { echo 'active'; } ?>"
        href="?page=home"
        >Acceuil</a
      >
    </li>
    <li>
      <a
        class="<?php if ($curr_page === 'about') { echo 'active'; } ?>"
        href="?page=about"
        >A propos</a
      >
    </li>
    <li>
      <a
        class="<?php if ($curr_page === 'gallerie') { echo 'active'; } ?>"
        href="?page=gallerie"
        >Gallerie</a
      >
    </li>
    <li>
      <a
        class="<?php if ($curr_page === 'contact') { echo 'active'; } ?>"
        href="?page=contact"
        >Contact</a
      >
    </li>
  </ul>
</div>
