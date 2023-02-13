<!-- check if page is update -->

<?php
$isUpdate = false;
$active = 'active';
if (isset($_GET['page']) && $_GET['page'] == 'update') {
    $isUpdate = true;
    include('../admin/functions/delete_img.php');
    if(isset($_GET['img'])){
        delete_img($_GET['id'], $_GET['img']);
    }
} else {
    echo '<link rel="stylesheet" href="./css/slider.css">';
}



?>

<div class="carosel <?php if ($isUpdate) {
                        echo $active;
                    } ?> ">
    <div class="img-wrapper ">
        <img src="<?php echo $upload_dir . '/' . $images[0] ?>" />
    </div>
    <div class="thumbs">

        <?php foreach ($images as $image) { ?>
            <div>
                <img src="<?php echo $upload_dir . '/' . $image ?>" />
                <?php if ($isUpdate) { ?>
                    <div class="options">
                        <!-- delete icon -->
                        <a href="?page=update&id=<?php echo $id ?>&img=<?php echo $image ?>" class="btn btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>