<?php include('./includes/server.php'); 

    if(isset($_SESSION['username'])) {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
<div id="login_bg">
    <div id="login_container">
        <h2>Login to Trade</h2>
        <form autocomplete="nope" action="" method="post" id="login_form">
            <?php include('./includes/errors.php'); ?>
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="username">Password</label>
            <input type="password" name="password">
            <button type="submit" name='login'>Login</button>
            <p>Don't have an account?</p><a href="registration.php">Register Now</a>
        </form>
    </div>
</div>
</body>
</html>