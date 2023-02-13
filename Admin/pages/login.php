<?php include('./functions/login_func.php') ?>

<link rel="stylesheet" href="./css/login.css">
<div class="login">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" class="container">
        <h3>Login Here</h3>

        <input type="text" placeholder="Email or Phone" name="username">

        <input type="password" placeholder="Password" name="password">

        <button>Log In</button>
        <p class="alert">
            <?php
            if (isset($_POST['username']) && isset($_POST['password'])) {
                echo login($_POST['username'], $_POST['password']);
            }
            ?>
        </p>
    </form>


</div>