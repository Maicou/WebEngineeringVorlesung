<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Daten auslesen</title>
    </head>
    <body>


        <?php
        // Angaben sollten in ein dbconf.inc.php ausgelagert werden

        $benutzer = "root";
        $passwort = "";
        $dbName = "WebEngineering";

        // Datenbankverbindung aufnehmen
        $link = mysqli_connect('127.0.0.1:3306', $benutzer, $passwort);
        mysqli_select_db($link, $dbName) or die(mysqli_error($link));

        // wichtig fürs Projekt mit umlauten zu arbeiten

        mysqli_query($link, "SET NAMES 'utf8'");

        // SQL-Statement definieren
        $abfrage = "SELECT * FROM `adressen`";
        $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

        
        // Tabellenkopf erstellen
        echo "<table border = '3'>";
        echo "<tr>";
        $anzahl_spalten = mysqli_num_fields($ergebnis);
        for ($i = 0; $i <$anzahl_spalten; $i++){
            $feldinfo=  mysqli_fetch_field_direct($ergebnis, $i);
            echo"<th>".$feldinfo->name."</th>";
        }
        
        echo "</tr>";

        // in einer While Schleifen geben wir die Zeilen aus
        

        while ($zeile = mysqli_fetch_assoc($ergebnis)) {

            echo "<tr>";

            while (list($key, $value) = each($zeile)) {
                echo "<td>" . $value . "</td>";
            }

            echo "</tr>";
        }


        echo "</table>";
        echo "<br> <a href='DB.php'> Zur Startseite </a><br/>";
        echo "<a href='DB/'> DB </a> <br/>";

        // SQL-Verbindung schliessen
        mysqli_close($link);
        ?>


    </body>
</html>
