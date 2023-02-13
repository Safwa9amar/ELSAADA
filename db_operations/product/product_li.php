<?php 
    
$info = explode(',', $product['informations']);
foreach ($info as $key => $value) {$txt = explode(':', $value)?>

    <li> <strong><?php echo $txt[0] ?></strong>:<?php echo $txt[1] ?> </li>

<?php } ?>

