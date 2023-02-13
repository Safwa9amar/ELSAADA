<?php
// include config file

function delete_img($id, $img_to_delete)
{

    include('./components/variables.php');
    include('../db_operations/connect.php');
    include('../components/config.php');
    // check in session is set and user is logged in
    if (!isset($_SESSION['username'])) {
        header('location: ../login.php');
    } else {
        // get id 
        // query to select all images
        $sql = "SELECT * FROM $product_table where id=$id ";
        // execute query
        $result = mysqli_query($con, $sql);
        // edit images column
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $images = explode(',', $row['images']);
            }
        }

        // remove image from $images array
        $images = array_diff($images, array($img_to_delete));
        // convert array to string
        $images = implode(',', $images);
        // update images column
        $sql = "UPDATE $product_table SET images='$images' WHERE id=$id";
        // execute query
        mysqli_query($con, $sql);
        // delete image from images folder
        unlink($upload_dir . $img_to_delete);

        // redirect to update page
        // header("location: ./?page=update&id=$id");
    }
}
