<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> in Datei speichern </title>
    </head>
    <body>
        <?php
        if (isset($_POST['email'])) {

            $time = time();
            $email = $_POST['email'];
            $name = $_POST['name'];
            // Datei Daten.txt wird zum Schreiben geöffnet
            $fp = fopen("Daten.csv", "a");
            // Schreiben des Inhalt von Email
            fwrite($fp, $email);
            // Schreiben eines Trennzeichens
            fwrite($fp, ";");
            fwrite($fp, $name);
            fwrite($fp, ";");
            fwrite($fp, $time);
            fwrite($fp, "\n");
        }
        ?>
        <h3> Bitte geben Sie Ihre Daten ein </h3>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            Name: <input type="text" name="name" size="20"/></br>
            Email: <input type="text" name="email" size="20"/></br>
            <input type="submit"/>
            <input type="reset"/>
        </form>


    </body>
</html>
