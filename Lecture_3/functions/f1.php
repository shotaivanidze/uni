<?php
    function randNumber($x, $y){
        return rand($x,$y);
    }

    function table1(){
        echo "Davaleba 1:";

        echo "<table>";

        for($i=0; $i<10; $i++){
            echo "<tr>";

            for($j=0; $j<10; $j++){
                echo "<td>".randNumber(10,99)."</td>";
            }
    
            echo "</tr>";
        }

        echo "</table>";
    }

    function captcha(){
        echo "Davaleba 2";
        echo "<br>";


        echo "Code:<span id='code'>".randNumber(10000,99999)."</span>";
        echo "<br>";
        echo "შეიყვანეთ მოცემული კოდი:<input id='codeInput' name='codeInput'/>";
        echo "<form method='get' id='validateForm'>";
        echo "<button id='submitButton'>Submit</button>";
        echo "<div id='textPlace'</div>";
        echo "</form>";
    }


?>