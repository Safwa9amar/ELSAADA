<?php include('./db_operations/product/all_products.php');
include('./components/config.php');

?>

<link rel="stylesheet" href="./css/store.css">
<section class="store">
    <div class="cards-container">
        <?php foreach ($all_products as $value) { ?>
            <a href="?page=products&product_id=<?php echo $value["id"] ?>" class="pruduct-card">
                <div class="img-container">
                    <div class="img-inner">
                        <div class="inner-skew">
                            <img src="<?php echo $upload_dir . explode(",", $value['images'])[0] ?>">
                        </div>
                    </div>
                </div>
                <div class="text-container">
                    <h3><?php echo $value['name']  ?></h3>
                    <p>
                        <?php echo substr($value['description'],0,100)  ?>...voir plus
                    </p>
                </div>
            </a>

        <?php } ?>


    </div>
</section>