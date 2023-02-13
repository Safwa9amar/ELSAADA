<?php session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./components/header.php"; ?>
<body>
    <?php include "./components/navbar.php"; ?>
    <?php

    if (isset($_SESSION['username'])) {
        include "pages/profile.php";
    } else {
        include "pages/login.php";
    }
    ?>
</body>
<?php include "./components/Footer.php"; ?>

</html>