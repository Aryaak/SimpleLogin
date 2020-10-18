<?php

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "123") {
        header("Location: admin.php");
    } else {
        $salah = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Aryak Web</title>
</head>

<body>

    <div class="login-box">

        <form action="" method="post">
            <div class="title">
                <h1>Login Here</h1>
                <?php if (isset($salah)) { ?>
                    <p>Username/Password Salah</p>
                <?php } ?>
            </div>
            <div class="input">
                <div class="username">
                    <label>USERNAME</label>
                    <input name="username" type="text">
                </div>
                <div class="password">
                    <label>PASSWORD</label>
                    <input name="password" type="password">
                </div>
            </div>
            <div class="login">
                <button type="submit" name="login">Login</button>
            </div>
        </form>

    </div>


</body>

</html>