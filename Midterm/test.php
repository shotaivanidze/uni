<?php
    include "dbconnect.php";

    $count = 0;
    if(!$con){
        echo "Error connecting database";
    }
    else{
        $query = "SELECT COUNT(*) FROM vocab";
        $result = mysqli_query($con, $query);
        $lastid = mysqli_fetch_assoc($result);
        $size = $lastid['COUNT(*)'];
        $array = array();

        for($i = 0; $i < 5; $i++){
            $query = "SELECT * FROM vocab where id=".rand(1, $size);
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            array_push($array, $row);
        }

        $random = rand(0,4);
    }
    
    if($_POST){
        $corret = $_POST['correct'];
        $answer = $_POST['answer'];
        $number = $_POST['number'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form action="test.php" method="post">
        <label for=""><?php 
            echo $array[$count]['eng'];
        ?></label><br>
        <br><input checked="checked" type="radio" name="answer" value="'<?php
            echo $array[$count]['geo'];
        ?>'"><?php
            echo $array[$count]['geo'];
        ?></input><br>
        <br><input type="radio" name="answer" value="'<?php
            if($random != $count){
                echo $array[$random]['geo'];
            }
            else if($count != 4){
                echo $array[$count + 1]['geo'];
            }
            else{
                echo $array[$count - 1]['geo'];
            }
        ?>'"><?php
            if($random != $count){
                echo $array[$random]['geo'];
            }
            else if($count != 4){
                echo $array[$count + 1]['geo'];
            }
            else{
                echo $array[$count - 1]['geo'];
            }
        ?></input><br>
        <input type="number" name="number" hidden value='<?php
            echo $array[$count]['geo'];
        ?>'>
        <input type="number" name="correct" hidden value="'<?php $correct ?>''">
        <br><button type="submit">Answer</button>

    </form>
</body>
</html>