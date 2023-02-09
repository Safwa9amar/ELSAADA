<?php include('./db_operations/product/fetch_product.php') ?>

<link rel="stylesheet" href="./css/product.css" />

<section class="product-container">
    <div class="carosel">
        <div class="img-wrapper">
            <img src="images/1.jpg" alt="" />
        </div>
        <div class="thumbs">
            <img id="1" src="images/1.jpg" alt="" />
            <img id="2" src="images/2.jpg" alt="" />
            <img id="3" src="images/3.jpg" alt="" />
            <img id="4" src="images/4.jpg" alt="" />
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
            imgWrapper.classList.add("active");
            setTimeout(() => {
                imgWrapper.classList.remove("active");
            }, 500);
        });
    });
</script>