<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    tr {
        border: 1px solid black;
        text-align: center;
    }

    td{
        border: 1px solid black;
        width: 100px;
        height: 50px;
    }

    td.key{
        color: red;
        border-color: red;
    }
    </style>
</head>
<body>
    
    <?php 
        $cars = array(
            array(
                "Make" => "Toyota",
                "Model" => "Corolla",
                "Color" => "White",
                "Mileage" => "24000",
                "Status" => "Sold"
            ),
            array(
                "Make" => "Toyota",
                "Model" => "Camry",
                "Color" => "Black",
                "Mileage" => "56000",
                "Status" => "Available"
            ),
            array(
                "Make" => "Honda",
                "Model" => "Accord",
                "Color" => "White",
                "Mileage" => "15000",
                "Status" => "Sold"
            )
        );
    ?>

    <table>
    <tr>
        <td class="key">Make</td>
        <td class="key">Model</td>
        <td class="key">Color</td>
        <td class="key">Mileage</td>
        <td class="key">Status</td>
    </tr>
    <tr>
        <td><?=$cars[0]["Make"]?></td>
        <td><?=$cars[0]["Model"]?></td>
        <td><?=$cars[0]["Color"]?></td>
        <td><?=$cars[0]["Mileage"]?></td>
        <td><?=$cars[0]["Status"]?></td>
    </tr>
    <tr>
    <td><?=$cars[1]["Make"]?></td>
        <td><?=$cars[1]["Model"]?></td>
        <td><?=$cars[1]["Color"]?></td>
        <td><?=$cars[1]["Mileage"]?></td>
        <td><?=$cars[1]["Status"]?></td>
    </tr>
    <tr>
    <td><?=$cars[2]["Make"]?></td>
        <td><?=$cars[2]["Model"]?></td>
        <td><?=$cars[2]["Color"]?></td>
        <td><?=$cars[2]["Mileage"]?></td>
        <td><?=$cars[2]["Status"]?></td>
    </tr>   
    </table>

</body>
</html>