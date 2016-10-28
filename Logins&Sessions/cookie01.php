<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookie nutzen</title>
    </head>
    <body>
        <h3> Namen und Bestellung eintragen</h3>

        <form action="cookie_b.php" method="post">



            <?php
            echo "<input name='name' type ='text' size='20' value='";
            
                   
                   if(isset($_COOKIE['nachname'])){ 
                       echo $_COOKIE['nachname'];
                       }
                 
                   echo " '/> Nachname </br>";
            echo "<input name='vorname' type ='text' size='20'value='";
            
                   
                   if(isset($_COOKIE['vorname'])){ 
                       echo $_COOKIE['vorname'];
                       }
                 
                   echo " '/> Vorname </br>";
            ?>
            <input type="submit" value="bestellen"/>
        </form>
    </body>
</html>
