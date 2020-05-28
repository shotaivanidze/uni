<?php
    include "dbconnect.php";

    if($_POST){
        if(strlen($_POST['dest']) >= 10 && strlen($_POST['dest']) <= 150){
            if(strlen($_POST['airway']) >= 10 && strlen($_POST['airway']) <= 100){
                $dest = $_POST['dest'];
                $airway = $_POST['airway'];
                $ok = true;
            }
            else{
                $dest = "Airway name must be between 10 and 150 characters";
                $airway = "Destination must be between 10 and 100 characters";
                $ok = false;
            }
        }
        else {
            $dest = "Airway name must be between 10 and 150 characters";
            $airway = "Destination must be between 10 and 100 characters";
            $ok = false;
        }
    }
    else{
        $airway = "You haven't included airway name";
        $dest = "You haven't included destination";
        $ok = false;
    }
    $alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

    $time = rand(1,8);
    $price = $time * 50;
    $code = "";

    for($i=0; $i<13; $i++){
        $rand = rand(0,sizeof($alphabet) - 1);
        $code = $code.$alphabet[$rand];
    }
       
    
    if($_POST){
        $destin = $_GET['dest'];
        $airwayname = $_GET['airway'];
        $time = $_GET['time'];
        $price = $_GET['price'];
        $code = $_GET['code'];

        $query = "INSERT INTO info (dest, hour, price, code, airway) VALUES ('$destin', '$time', '$price', '$code', '$airwayname')";
            $result = mysqli_query($con, $query);
            if(!$result){
                echo "Error adding in the database";
            }
            else{
                echo "Successfully added into database";
            }
            echo $destin;
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
    <p>Get a plane ticket</p>
    <form action="info.php" method="post">
        <label>Destination</label><br>
        <input style="width: 300px;" disabled type="text" name="dest" value="<?php echo $dest ?>"><br>
        <label>Airway company</label><br>
        <input style="width: 300px;" type="text" disabled name="airway" value="<?php echo $airway ?>"><br>
        <label>Flight Time</label><br>
        <input type="number" disabled name="time" value="<?php echo $time ?>"><br>
        <label>Price(EUR)</label><br>
        <input type="number" disabled name="price" value="<?php echo $price ?>"><br>
        <label>Code</label><br>
        <input type="text" disabled name="code" value="<?php echo $code ?>"><br>
        <?php if($ok = true){
            echo '<button type="submit">Get a ticket</button>';
         }?>
    </form>
    

</body>
</html>