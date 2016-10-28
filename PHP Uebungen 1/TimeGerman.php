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
        // put your code here
        $Wochentag=date("w");
    $Datum=date("j. F Y");
    $Uhrzeit=date("H:i");
    $WochentagDeutsch = array("Sonntag", "Montag", "Dienstag", "Mittwoch",
        "Donnerstag", "Freitag", "Samstag");
       
    echo "Heute ist $WochentagDeutsch[$Wochentag]";
    echo " der $Datum <br/>" ;
            echo "$Uhrzeit Uhr";
    
    
        ?>
    </body>
</html>
