<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td{
        border: 1px solid black;
        width: 30px;
        height: 30px;
        text-align: center;
    }
    </style>
</head>
<body>
<?php
    include "functions/f1.php";

    table1();
    echo "<hr>";
    captcha();
?>
<script src="main.js"></script>
</body>
</html>