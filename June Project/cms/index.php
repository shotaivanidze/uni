<?php include('./includes/server.php');
    $query = "SELECT * FROM cars";
    $result = mysqli_query($con, $query);
    $cars = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
    <header>
        <?php include('./includes/header.php');?>
    </header>
    <div id="container">
            <?php for($i=0; $i < mysqli_num_rows($result); $i++): ?>
                <div class="car_container">
                    <img src="<?php echo $cars['image'];?>" alt="">
                    <div class="car_details">
                        <p><?php echo $cars['brand']?> <?php echo $cars['model']; ?></p>
                        <p>Price: <?php echo $cars['price']."$";?></p>
                        <p>Year: <?php echo $cars['year'];?></p>
                        <p>User: <?php echo $cars['username'];?></p>
                        <p>Contact Number: <?php echo $cars['phonenumber'];?></p>
                        <p>Added on: <?php echo gmdate("F j, Y, g:i a", $cars['date']);;?></p>
                    </div>
                </div>
                <?php $cars = mysqli_fetch_array($result) ?> 
            <?php endfor ?>
    </div>
</body>
</html>