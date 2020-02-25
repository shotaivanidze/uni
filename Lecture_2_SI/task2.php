<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table{
        margin-top: 20px;
        border: 1px solid black;
        width: 250px;
        height: 250px;
    }
    tr, td {
        width: 40px;
        border: 1px solid black;
        text-align: center;
    }
    </style>
</head>
<body>
    <?php
        $numbers = array();
        for($i=0; $i<16; $i++){
            array_push($numbers, rand(10,100));
        }

        $strNumbers = array_map('strval',$numbers);
    ?>

    <p>მატრიცა:</p>
    <table>
        <tr>
            <td><?=$numbers[0] ?></td>
            <td><?=$numbers[1] ?></td>
            <td><?=$numbers[2] ?></td>
            <td><?=$numbers[3] ?></td>
        </tr>
        <tr>
            <td><?=$numbers[4] ?></td>
            <td><?=$numbers[5] ?></td>
            <td><?=$numbers[6] ?></td>
            <td><?=$numbers[7] ?></td>
        </tr>
        <tr>
            <td><?=$numbers[8] ?></td>
            <td><?=$numbers[9] ?></td>
            <td><?=$numbers[10] ?></td>
            <td><?=$numbers[11] ?></td>
        </tr>
        <tr>
            <td><?=$numbers[12] ?></td>
            <td><?=$numbers[13] ?></td>
            <td><?=$numbers[14] ?></td>
            <td><?=$numbers[15] ?></td>
        </tr>
    </table>  

    <p>თითოეული ელემენტის ციფრთა ჯამი ცხრილი:</p>
    
    <table>
        <tr>
            <td><?=$strNumbers[0][0] + $strNumbers[0][1] ?></td>
            <td><?=$strNumbers[1][0] + $strNumbers[1][1] ?></td>
            <td><?=$strNumbers[2][0] + $strNumbers[2][1]?></td>
            <td><?=$strNumbers[3][0] + $strNumbers[3][1]  ?></td>
        </tr>
        <tr>
            <td><?=$strNumbers[4][0] + $strNumbers[4][1]  ?></td>
            <td><?=$strNumbers[5][0] + $strNumbers[5][1]  ?></td>
            <td><?=$strNumbers[6][0] + $strNumbers[6][1]  ?></td>
            <td><?=$strNumbers[7][0] + $strNumbers[7][1]  ?></td>
        </tr>
        <tr>
            <td><?=$strNumbers[8][0] + $strNumbers[8][1]  ?></td>
            <td><?=$strNumbers[9][0] + $strNumbers[9][1]  ?></td>
            <td><?=$strNumbers[10][0] + $strNumbers[10][1]  ?></td>
            <td><?=$strNumbers[11][0] + $strNumbers[11][1]  ?></td>
        </tr>
        <tr>
            <td><?=$strNumbers[12][0] + $strNumbers[12][1]  ?></td>
            <td><?=$strNumbers[13][0] + $strNumbers[13][1]  ?></td>
            <td><?=$strNumbers[14][0] + $strNumbers[14][1]  ?></td>
            <td><?=$strNumbers[15][0] + $strNumbers[15][1]  ?></td>
        </tr>
    </table>

    <form action="task2.php" method="post">
    <p>Enter X number:</p><input type="text" name="number"> <input type="submit" value="Click Here" name="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["number"])){
            $number = $_POST["number"];
            $modArray = array();
            for($i=0; $i<count($numbers); $i++){
                if ($numbers[$i] % $number === 0){
                    array_push($modArray, $numbers[$i]);
                }
            }
            echo $number."-ის ჯერადი რიცხვებია: ";

            if(count($modArray) === 0){
                echo "მატრიცაში არ არის ამ რიცხვის ჯერადები";
            }
            else{
                for($j=0; $j<count($modArray); $j++){
                    if($j+1 === count($modArray)){
                        echo $modArray[$j];
                    }
                    else{
                        echo $modArray[$j].", ";
                    }
                }
            }
        }
        $sum = 0;
        $multiply = 1;
        for($k=0; $k<count($numbers); $k++){
            $sum += $numbers[$k];
            $multiply *= $numbers[$k];
        }
        $average = $sum / count($numbers);
        echo "<br>მატრიცის ელემენტების ჯამია: ".$sum."<br>";
        echo "მატრიცის ელემენტების ნამრავლია: ".$multiply."<br>";
        echo "მატრიცის ელემენტების საშუალოა: ".$average."<br>";
    ?>
</body>
</html>