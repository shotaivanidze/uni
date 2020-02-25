<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $numbers = array();
        for($i=0; $i<12; $i++){
            array_push($numbers, rand(10,100));
        }
        print_r ($numbers);
        echo "<br>";
    ?>
    <form action="task1.php" method="post">
    <p>Enter X number:</p><input type="text" name="number"> <input type="submit" value="Click Here" name="submit">
    </form>
    <br>
    <?php
    if(isset($_POST["number"])){
        $number = $_POST["number"];
        $lessCount = 0;
        $moreCount = 0;
        for($k=0; $k<=11; $k++){
            if ($number > $numbers[$k]){
                $lessCount++;
            }
            else{
                $moreCount++;
            }
        }
        echo "There are ".$lessCount." numbers less than ".$number;
        echo "<br>";
        echo "there are ".$moreCount." numbers more than ".$number;
    };
    ?>
</body>
</html>