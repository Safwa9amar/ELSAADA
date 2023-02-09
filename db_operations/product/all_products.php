
<?php

// get all products
function get_all_products() {
    global $db;
    $query = 'SELECT * FROM localtion
              ORDER BY id';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}
?>