<?php if ($is_logged):?>
    <p>Wish you a good car trading, <strong><?php echo $_SESSION['username']; ?>!</strong></p>
        <div id="menu">
            <ul>
                <li><a href="./index.php">CARS</a></li>
                <li><a href="./panel.php">PANEL</a></li>
                <li><a href="./contact.php">CONTACT</a></li>
            </ul>
        </div>
        <a href="index.php?logout=1" style='color:red; position: absolute; right: 0px;'>Logout</a>
<?php endif ?>
<?php if(!$is_logged): ?>
    <div id="menu">
            <ul>
                <li><a href="./login.php">LOGIN</a></li>
                <li><a href="./registration.php">REGISTER</a></li>
            </ul>
        </div>
 <?php endif ?>

    