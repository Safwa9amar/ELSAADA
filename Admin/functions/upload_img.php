<!-- php -->

<?php
// include('./components');

// Path: Admin\functions\upload_img.php
// upload image function
function upload_img($dir, $img, $id)
{
    $target_dir = $dir;
    $target_file = $target_dir . basename($img["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($img["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    // Check file size
    if ($img["size"] > 500000) {
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        return false;
    } elseif (isset($_SESSION['username'])) {
        // chnage file name
        $uniq_id = $id.'_'.uniqid('product_') . '.' . $imageFileType;
        $target_file = $target_dir . $uniq_id;
        if (move_uploaded_file($img["tmp_name"], $target_file)) {
            return $uniq_id;
        } else {
            return false;
        }
    }
}




?>