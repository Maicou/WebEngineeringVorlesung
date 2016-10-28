<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i;
        $ergebnis;

        for ($i = 1; $i <= 10; $i++) {
            echo "Die Reihe mit $i: ";
            for ($y = 1; $y <= 10; $y++) {
                $ergebnis = $y * $i;
                echo " $ergebnis";
            }
            echo "<br/>";
        }
        ?>
    </body>
</html>
