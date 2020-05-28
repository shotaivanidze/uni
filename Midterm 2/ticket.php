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
        <input style="width: 300px;" type="text" name="dest" placeholder="ფრენის დასახელება (მაგ: თბილისი-მილანი)"><br>
        <input type="text" name="airway" placeholder="აივაკომპანიის დასახელება"><br>
        <input type="number" disabled name="time" placeholder="ფრენის დრო"><br>
        <input type="number" disabled name="price" placeholder="ფასი"><br>
        <input type="number" disabled name="code" placeholder="შტრიხ კოდი"><br>
        <button type="submit">Submit</button>
    </form>
    

</body>
</html>