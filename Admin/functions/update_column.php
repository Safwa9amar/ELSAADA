<!-- php -->
<?php

function update_column($table, $col, $id)
{
    global $con;
    $sql = "UPDATE `$table` SET `$col`='$$col' WHERE `id` = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}
