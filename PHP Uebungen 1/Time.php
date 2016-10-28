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
        
    $Wochentag=date("l");
    $Datum=date("j. F Y");
    $Uhrzeit=date("H:i");
    echo "<h1> Heute ist $Wochentag, der $Datum.<br/>";
    echo "Es ist jetzt $Uhrzeit Uhr.<h1/>";
   
        ?>
    </body>
    
</html>
