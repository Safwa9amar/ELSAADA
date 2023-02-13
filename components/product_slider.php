<!-- check if page is update -->

<?php
$isUpdate = false;
$active = 'active';
if (isset($_GET['page']) && $_GET['page'] == 'update') {
    $isUpdate = true;
    include('../admin/functions/delete_img.php');
    if (isset($_GET['img'])) {
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
                <img src="<?php echo $upload_dir . $image ?>" />
                <?php if ($isUpdate) { ?>
                    <div class="options">
                        <!-- delete icon -->
                        <a href="?page=update&id=<?php echo $id ?>&img=<?php echo $image ?>" class="btn btn-outline-danger delete_img">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>


<script>
    // delete_img
    const delete_img = document.querySelectorAll('.delete_img');
    delete_img.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const url = btn.getAttribute('href');
            const xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    location.reload();
                }
            }
            xhr.send();
        })
    })
</script>
