<?php include('./db_operations/product/all_products.php')?>
<?php $products = get_all_products() ?>
<link rel="stylesheet" href="./css/store.css">
<section class="store">
    <div class="cards-container">
        <?php foreach($product as $key => $val){ ?>
            <a href="?page=products&product_id=<?php $val['id']?>" class="pruduct-card">
                <div class="img-container">
                    <div class="img-inner">
                        <div class="inner-skew">
                            <img src="./images/5.jpg">
                        </div>
                    </div>
                </div>
                <div class="text-container">
                    <h3>A blue bird</h3>
                    <p>
                        This a demo experiment to skew image container. It looks good.
                    </p>
                </div>
            </a>

        <?php }?>


    </div>
</section>