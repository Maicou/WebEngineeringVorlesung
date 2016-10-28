<?php
// Formulardaten übernehmen
$vorname=$_POST['vorname'];
$name=$_POST['name'];
$gehalt=$_POST['gehalt'];
$strasse=$_POST['strasse'];
$plz=$_POST['plz'];
$ort=$_POST['ort'];


// Angaben sollten in ein dbconf.inc.php ausgelagert werden

$benutzer = "root";
$passwort = "";
$dbName = "WebEngineering";

// Datenbankverbindung aufnehmen
$link = mysqli_connect('127.0.0.1:3306', $benutzer, $passwort);
mysqli_select_db($link, $dbName) or die(mysqli_error($link));

// wichtig fürs Projekt mit umlauten zu arbeiten

mysqli_query($link, "SET NAMES 'utf8'");


// SQL-statement

$insert = "INSERT INTO `adressen` (`Nr.`, `Vorname`, `Name`, `Gehalt`, `Strasse`, `PLZ`, `Ort`) VALUES (NULL, '$vorname', '$name', '$gehalt', '$strasse', '$plz', '$ort');";

$db = mysqli_query($link, $insert) or die(mysqli_error($link));

if($db){
    echo "Ihre Daten wurden eingetragen";
    echo "<br> <a href='DB.php'> Zur Startseite </a><br/>";
    echo "<a href='DB/'> DB </a> <br/>";
    
}

// SQL-Verbindung schliessen
mysqli_close($link);

?>