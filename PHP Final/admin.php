<?php
    include "server.php";

    if(isset($_POST['addcompany'])){
        $companyname = $_POST['companyname'];
        $idcode = $_POST['idcode'];
        $date = $_POST['date'];
        $password = $_POST['password'];

        $query = "INSERT INTO company (companyname, idcode, date, password) VALUES ('$companyname', '$idcode', '$date', '$password')";
        $result = mysqli_query($con, $query);

        if($result){
            header('location: admin.php?addcompany=1');
        }
        
    }

    function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateCode($length = 9) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "menu.php"?>

    <ul>
        <li><a href="admin.php?addcompany=1">Add a company</a> |</li>
        <li><a href="admin.php?companylist=1">View companies</a> |</li>
    </ul>

    <div id="container">
        <?php if(isset($_GET['addcompany'])):?>
            
            <form action="admin.php" method="post">
                <label for="brand">Company name</label><br>
                <input type="text" name="companyname" value="<?php echo generateRandomString(rand(5,10));?>"><br>
                <label for="model">Identification Code</label><br>
                <input type="text" name="idcode" value="<?php echo generateCode(9) ?>"><br>
                <label for="price">Date</label><br>
                <input type="text" name="date" value="<?php echo date("Y-m-d H:i:s", rand(9999999, 1592489966)) ?>"><br>
                <label for="model">Password</label><br>
                <input type="text" name="password" value="<?php echo generateCode(1).substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,4) ?>"><br>
                <button type="submit" name="addcompany">Submit</button>
            </form>
        <?php endif ?>

        <?php if(isset($_GET['companylist'])): ?>
            <?php 
                $sql = "SELECT companyname, idcode, date, password FROM company";
                $result = mysqli_query($con, $sql);
            
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<b>Company name: </b>" . $row["companyname"]. " <b>|</b> <b>Identification code:</b> " . $row["idcode"]. "<b>|</b> <b>Date: </b>" . $row["date"]. "<b>|</b> <b>Password: </b>" . $row["password"].  "<br>";
                    }
                } else {
                    echo "0 results";
                }    
            ?>
        <?php endif ?>
    </div>
</body>
</html>