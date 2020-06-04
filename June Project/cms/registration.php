<?php
include('./includes/server.php');

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
<div id="registration_bg">
    <div id="registration_container">
        <h2>Register Account</h2>
        <form action="registration.php" method="post" id="registration_form" >
            <?php include('./includes/errors.php'); ?>
            <label for="username">Username</label>
            <input type="text" name="username" id=""value="<?php echo $username; ?>">
            <label for="username">Email</label>
            <input type="email" name="email" id="" value="<?php echo $email; ?>">
            <label for="username">Password</label>
            <input type="password" name="password_1" id="">
            <label for="username">Confirm Password</label>
            <input type="password" name="password_2" id="">
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</div>
</body>
</html>