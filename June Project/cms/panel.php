<?php include('./includes/server.php');
    if(isset($_POST['addcar'])){
        $brand = mysqli_real_escape_string($con, $_POST['brand']);
        $model = mysqli_real_escape_string($con, $_POST['model']);
        $price = mysqli_real_escape_string($con, $_POST['price']);
        $year = mysqli_real_escape_string($con, $_POST['year']);
        $username = mysqli_real_escape_string($con, $_SESSION['username']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        if(empty($brand)){
            array_push($errors, "Brand is required");
        }
        if(empty($model)){
            array_push($errors, "Model is required");
        }
        if(empty($price)){
            array_push($errors, "Price is required");
        }
        if(empty($year)){
            array_push($errors, "Year is required");
        }
        $uploadOk = 1;
        $target_dir = "imgs/cars/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (file_exists($target_file)) {
            array_push($errors, "Change File Name");
            $uploadOk = 0;
          }
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            array_push($errors, "Image is required");
            $uploadOk = 0;
        }

        if(count($errors) == 0){
            $done = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        }
        else {
            array_push($errors, "Image can't be uploaded");
        }

        if(count($errors) == 0){
            $time = time();
            $query = "INSERT INTO cars (brand, model, price, year, date, image, phonenumber, username) VALUES ('$brand', '$model', '$price', '$year', '$time', '$target_file', '$phonenumber', '$username')";

            $result = mysqli_query($con, $query);

            if($result){
                header('location: panel.php?addcar=1');
                $_SESSION['success'] = "Car is now listed in the shop!";
            } else {
                array_push($errors, "Couldn't connect to database");
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
    <header>
        <?php include('./includes/header.php');?>
    </header>
    <div id="panel_container">
        <ul>
            <li><a href="panel.php?addcar=1">Add a Car</a> |</li>
            <li><a href="panel.php?viewcars=1">View Your Listed Cars</a> |</li>
            <li><a href="panel.php?accsettings=1">Account Settings</a></li>
        </ul>
        <div id="panel_action">
            <?php if(isset($_GET['addcar'])):?>
                <form style="margin: 35px;" action="panel.php" method="post" enctype="multipart/form-data">
                    <?php if (isset($_SESSION['success'])): ?>
                    <p style="color: green;">
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </p>
                    <?php endif ?>
                    <?php include('./includes/errors.php'); ?>
                    <label for="brand">Car Brand</label><br>
                    <input type="text" name="brand"><br>
                    <label for="model">Model</label><br>
                    <input type="text" name="model"><br>
                    <label for="price">Price</label><br>
                    <input type="number" name="price"><br>
                    <label for="year">Year</label><br>
                    <input type="number" name="year"><br>
                    <label for="year">Image</label><br>
                    <input type="file" name="image" id="image"><br>
                    <label for="year">Phone Number</label><br>
                    <input type="number" name="phonenumber"><br>
                    <br>
                    <button type="submit" name="addcar">Add to the Shop</button>
                </form>
            <?php endif ?>
            
            <?php if(isset($_GET['viewcars'])):?>
                <?php
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM cars WHERE username='$username'";
                    $result = mysqli_query($con, $query);
                    $cars = mysqli_fetch_array($result, MYSQLI_ASSOC);    
                ?>
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
            <?php endif ?>

            <?php if(isset($_GET['accsettings'])):?>
                <h3>Change username</h3>
                    <input type="text" name="username">
            <?php endif ?>
        </div>
    </div>
</body>
</html>