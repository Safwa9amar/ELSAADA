<?php
include('./db_operations/connect.php');
include("config.php");
// get the last record
$sql = "SELECT * FROM localtion ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con, $sql);
$product = mysqli_fetch_assoc($result);

$product_imgs = explode(',', $product['images'])
?>
<link rel="stylesheet" href="./css/home_card.css" />
<div class="card">
    <div class="card-img">
        <img src="<?php echo $upload_dir . $product_imgs[0] ?>" />
    </div>
    <div class="card-description">
        <h3 class="title">
            <?php echo $product['name'] ?>
        </h3>
        <div class="card-description_price">
            <p>
                <!-- format price -->
                <?php echo number_format($product['prix'], 2, ',', ' ') ?> DA
                <br />
                <span>Vilas</span>
            </p>
            <div class="card-description_price-action">
                <a href="?page=products&product_id=<?php echo $product['id'] ?>">Plus de détails</a>
                <p><?php echo count($product_imgs) ?> photos</p>
            </div>
        </div>
        <div class="summary">
            <?php echo substr($product['description'], 0, 200) ?>...
            <!-- voire plus  -->
            <a href="?page=products&product_id=<?php echo $product['id'] ?>">voire plus</a>
        </div>
        <hr />
        <div class="property-info">
            <div class="property-info-item">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 44 35">
                        <g id="Rectangle_1_copy_6">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M41,0H3H0v3v29v3h3h38h3v-3V3V0H41z M41,32H3V3h38V32z M9,9h11V6
			H9H6v3v11h3V9z M37,29v-3V15h-3v11H23v3h11H37z"></path>
                            </g>
                        </g>
                    </svg>
                </i>
                <span>
                    <p class="property-info-item-value">200m²</p>
                    <p class="property-info-item-title">Surface</p>
                </span>
            </div>
            <div class="property-info-item">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                        <circle class="circle" cx="5" cy="8.3" r="2.2"></circle>
                        <path class="path" d="M0 22.999C0 23.6 0.4 24 1 24S2 23.6 2 22.999V18H2h20h0.001v4.999c0 0.6 0.4 1 1 1 C23.552 24 24 23.6 24 22.999V10C24 9.4 23.6 9 23 9C22.447 9 22 9.4 22 10v1H22h-0.999V10.5 C20.999 8 20 6 17.5 6H11C9.769 6.1 8.2 6.3 8 8v3H2H2V9C2 8.4 1.6 8 1 8S0 8.4 0 9V22.999z M10.021 8.2 C10.19 8.1 10.6 8 11 8h5.5c1.382 0 2.496-0.214 2.5 2.501v0.499h-9L10.021 8.174z M22 16H2v-2.999h20V16z"></path>
                    </svg>
                </i>
                <span>
                    <p class="property-info-item-value">4</p>
                    <p class="property-info-item-title">Chambres</p>
                </span>
            </div>

            <div class="property-info-item">
                <i class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 119.45" style="enable-background: new 0 0 122.88 119.45" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M11.9,40.47h99.81v2.84H11.9V40.47L11.9,40.47z M89.51,82.09v30.41H82.4v-4.7H40.48v4.7l-7.11,0V82.09h-2.45 v-4.68h5.98l3.33-10.37c0.98-3.05,2.62-5.83,5.83-5.83h31.98c3.21,0,5.06,2.72,5.83,5.83l2.58,10.37h5.5v4.68H89.51L89.51,82.09 L89.51,82.09z M50.79,98.42h21v4.95l-21,0V98.42L50.79,98.42L50.79,98.42z M35.75,86.89c5.35,0.17,8.62,2.41,9.46,7.08h-9.46V86.89 L35.75,86.89z M86.46,86.89c-5.35,0.17-8.62,2.41-9.46,7.08h9.46V86.89L86.46,86.89z M39.46,77.42h43.97l-1.88-8.7 c-0.52-2.39-2-4.44-4.44-4.44H46.69c-2.44,0-3.7,2.12-4.44,4.44L39.46,77.42L39.46,77.42L39.46,77.42z M111.71,48.15v66.46H11.9 V48.15H111.71L111.71,48.15z M7.06,42.79H2.42H0v-2.42V28.44v-1.56l1.44-0.64l57.68-25.8L60.1,0l0.97,0.43l60.36,26.77l1.45,0.64 v1.57v10.95v2.42h-2.42h-3.91v74.24v2.42h-2.42H9.48H7.06l0-2.42V42.79L7.06,42.79z" />
                        </g>
                    </svg>
                </i>
                <span>
                    <p class="property-info-item-value">1</p>
                    <p class="property-info-item-title">Garages</p>
                </span>
            </div>
        </div>
    </div>
</div>