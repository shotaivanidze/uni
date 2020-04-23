<?php
    include "dbconnect.php";

    if($_POST){
        $eng = $_POST['eng'];
        $geo = $_POST['geo'];
        if(strlen($eng) >= 2 && strlen($eng) <= 50){
            $query = "INSERT INTO vocab (eng, geo) VALUES ('$eng', '$geo')";
            $result = mysqli_query($con, $query);
            if(!$result){
                echo "Error adding in the database";
            }
        }
        else {
            echo "English word must be between 2 and 50 characters";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shota Ivanidze</title>
</head>
<body>
    <p>Input words in the database</p>
    <form action="index.php" method="post">
        <input type="text" name="eng" placeholder="English word"><br>
        <input type="text" name="geo" placeholder="Georgian Meaning"><br>
        <button type="submit">Submit</button>
    </form>
    <form action="output.php">
        <br><button type="submit">View the database table</button>
    </form>
    <form action="test.php">
        <br><button type="submit">Take a test</button>
    </form>
    

</body>
</html>