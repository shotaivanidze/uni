<?php
    include "dbconnect.php";


    $sql = "SELECT eng, geo FROM vocab";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<b>English: </b>" . $row["eng"]. " <b>|</b> <b>Georgian:</b> " . $row["geo"]. "<br>";
        }
    } else {
        echo "0 results";
    }
?>