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
        
        
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            Name: <input type="text" name="name" size="20"/></br>
            Email: <input type="email" name="email" size="20"/></br>
            <input type="submit"/>
            <input type="reset"/>
        </form>
        
        <?php
        if ((isset($_POST['email'])) && (isset($_POST['name']))){
           
            $email = $_POST['email'];
            $name = $_POST['name'];
            $time = time();
            $Datum=date("j. F Y");
            $Uhrzeit=date("H:i");
            
            $fp = fopen("Accounts.csv", "a");
            
            fwrite($fp, $name);
            fwrite($fp, ";");
            fwrite($fp, $email);
            fwrite($fp, ";"); 
            fwrite($fp, $Datum);
            fwrite($fp, ";");
            fwrite($fp, $Uhrzeit);
            fwrite($fp, ";");
            fwrite($fp, $time);
            fwrite($fp, ";");
            fwrite($fp, "\n");
            
            
            
             $betreff = "Erfolgreiche Registrierung";
             $inhalt = "Lieber $name\n
             Deine Registrierung war erfolgreich\n
             Freundliche Gruesse\nIhr FH-Webmaster-Team\n";
             $header = "From: FH-Webmaster@lol.de";
            @mail($email,$betreff,$inhalt,$header);
          
            
        }
        ?>
    </body>
</html>
