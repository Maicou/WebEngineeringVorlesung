<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Währungsrechner </title>
    </head>
    <body>
        <?php

        // put your code here
        function umrechnung($Eingabe, $Faktor, $Einheit) {
            $Ergebnis = $Eingabe * $Faktor;
            echo "<font color=\" red\">";
            echo $Eingabe . " Franken ist umgerechnet: " . $Ergebnis . $Einheit;
            echo "</font>";
        }

        if (isset($_GET['betrag'])) {

            $betrag = $_GET['betrag'];
            $land = $_GET['waehrung'];

            //Faktoren zur Umrechnung von aktuellen Kursen
            $faktor_d = 1.03;
            $faktor_e = 0.92;
            $faktor_r = 65.7;
            $faktor_y = 103.5;

            switch ($land) {
                case "1":
                    $einheit = "Dollar";
                    umrechnung($betrag, $faktor_d, $einheit);
                    break;
                case "2":
                    $einheit = "Euro";
                    umrechnung($betrag, $faktor_e, $einheit);
                    break;
                case "3":
                    $einheit = "Rubel";
                    umrechnung($betrag, $faktor_r, $einheit);
                    break;
                case "4":
                    $einheit = "Yen";
                    umrechnung($betrag, $faktor_y, $einheit);
                    break;
            }
        }
        ?>
        <h2> Geben Sie bitte einen Franken-Betrag ein, den Sie umrechnen wollen</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            Betrag: <input type="text" name="betrag" size="20" /> </br>
            <select name="waehrung">
                <option value="1"> Dollar </option>
                <option value="2"> Euro </option>
                <option value="4"> Yen </option>
                <option value="3"> Rubel </option>
            </select> </br>
            <input type="submit"/> <input type="reset"/>
        </form>
    </body>
</html>
