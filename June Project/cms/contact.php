<?php include('./includes/server.php'); 


    $text = "";
    $username = $_SESSION['username'];
    $sql = "SELECT email FROM users WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];

    if(isset($_POST['send'])) {
        $text = mysqli_real_escape_string($con, $_POST['letter']);

        if(empty($text)){
            array_push($errors, "Letter is empty!");
        }

        if(count($errors) == 0){
            $query = "INSERT INTO letters (username, email, text) VALUES ('$username', '$email', '$text')";
            $result = mysqli_query($con, $query);

            if($result){
                $_SESSION['success'] = "Your letter was successfuly sent";
            }
       }
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
<div id="contact_bg">
    <div id="contact_container">
        <a href="index.php"><-- Back to Main Page</a>
        <?php if($is_logged) ?>
        <h2>Contact Us</h2>
        <form action="contact.php" method="post" id="contact_form" >
            <?php include('./includes/errors.php'); ?>
            <strong style='font-size: 24px;'><?php echo $_SESSION['username'] ?>, if you have any questions, don't hesitate to contact us!</strong>
            <p>Mobile Number: +995 598 610 999</p>
            <p>Email: shota.ivanidze0@gmail.com</p>
            <p>Discord: goldnugget#8095</p>
            <p id="c_online">Contact Us Online</p>
            <label for="text">Your Letter:</label>
            <textarea name="letter" id="" cols="30" rows="15"></textarea>
            <button type="submit" name="send">Send Letter</button>
            <?php if (isset($_SESSION['success'])): ?>
                <p>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </p>
            <?php endif ?>
        </form>
    </div>
</div>
</body>
</html>