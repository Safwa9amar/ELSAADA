<?php include('./db_operations/product/fetch_product.php');
include('./components/config.php');
?>

<link rel="stylesheet" href="./css/product.css" />

<section class="product-container">
    <div class="carosel">

        <div class="img-wrapper">
            <img src="<?php echo $upload_dir . '/' . $images[0] ?>" />
        </div>
        <div class="thumbs">
            <?php foreach ($images as $image) { ?>
                <img src="<?php echo $upload_dir . '/' . $image ?>" />
            <?php } ?>
        </div>
    </div>
    <div class="description">
        <h1><?php echo $product['name']  ?></h1>
        <h2><?php echo  number_format($product['prix'])  ?> DZD</h2>
        <p>
            <?php echo $product['description']  ?>
        </p>
        <h3>Informations</h3>
        <ul>
            <?php include('./db_operations/product/product_li.php') ?>
        </ul>
        <div class="btn-container">
            <button class="btn">Ajouter au panier</button>
        </div>
    </div>
</section>

<script>
    const imgWrapper = document.querySelector(".img-wrapper");
    const thumbs = document.querySelectorAll(".thumbs img");
    const img = document.querySelector(".img-wrapper img");

    thumbs.forEach((thumb) => {
        thumb.addEventListener("click", () => {
            img.src = thumb.src;
            thumb.classList.add("active");
            setTimeout(() => {
                thumb.classList.remove("active");
            }, 1000);
        });
    });
</script>