<?php 
include "server.php";

    if(isset($_SESSION['companyname'])){
        $companyname = $_SESSION['companyname'];
    }

    if(isset($_POST['addvacancy'])){
        $vacancyname = $_POST['vacancyname'];
        $vacancydesc = $_POST['vacancydesc'];
        $vacancydate = $_POST['vacancydate'];
        $companyname = $_SESSION['companyname'];
        echo $vacancydate;
        $query = "INSERT INTO vacancies (vacancyname, vacancydesc, vacancydate, companyname) VALUES ('$vacancyname', '$vacancydesc', '$vacancydate', '$companyname')";
        $result = mysqli_query($con, $query);

        if($result){
            header('location: company.php?addvacancy=1');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "menu.php"?>

    <?php if(!isset($_SESSION['companyname'])): ?>
        <form action="company.php" method="post">
            <?php include "errors.php";?>
            <label for="companyname">Company Name</label><br>
            <input type="text" name="companyname" id=""><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id=""><br>
            <button type="submit" name="login">Log In</button>  
        </form>
    <?php endif ?>
    
    <?php if(isset($_SESSION['companyname'])): ?>
        <ul>
            <li><a href="company.php?addvacancy=1">Add a vacancy</a> |</li>
            <li><a href="company.php?editvacancy=1">Edit a vacancy</a> |</li>
            <li><a href="company.php?delvacancy=1">Delete vacancy</a> |</li>
            <li><a href="company.php?viewvacancy=1">View vacancies</a> |</li>
        </ul>

        <?php if(isset($_GET['addvacancy'])): ?>
            <form action="company.php" method="post">
                <label for="vacancyname">Vacancy Name</label><br>
                <input type="text" name="vacancyname" id=""><br>
                <label for="vacancydesc">Vacancy Description</label><br>
                <textarea name="vacancydesc" id="" cols="30" rows="10"></textarea><br>
                <label for="vacancydate">Vacancy Date</label><br>
                <input type="text" name="vacancydate" value="<?php echo date('m/d/Y h:i:s a', time());?>"><br>
                <button type="submit" name="addvacancy">Add a vacancy</button>
            </form>
        <?php endif ?>

        <?php if(isset($_GET['viewvacancy'])): ?>
            <?php 
                $sql = "SELECT vacancyname, vacancydesc, vacancydate FROM vacancies WHERE companyname='$companyname'";
                $result = mysqli_query($con, $sql);
            
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<b>Vacancy name: </b>" . $row["vacancyname"]. " <b>|</b> <b>Vacancy description:</b> " . $row["vacancydesc"]. "<b>|</b> <b>Date: </b>" . $row["vacancydate"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }    
            ?>
        <?php endif ?>

        <?php if(isset($_GET['viewvacancy'])): ?>
           
        <?php endif ?>
    <?php endif ?>
    
</body>
</html>