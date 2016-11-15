<html>
<head>
  <link rel="stylesheet" type="text/css" href="format.css"/>
</head>
<body>
<?PHP
include('db_conf.php');

$link=mysqli_connect("localhost", $benutzer, $passwort);
mysqli_select_db($link, $dbname);

$feld1=mysql_real_escape_string($_POST['name']);
$feld2=$_POST["vorname"];
$feld3=$_POST['strasse'];
$feld4=$_POST['plz'];
$feld5=$_POST['ort'];

#  mysql_real_escape_string()  - sorgt, dass es sicher ein String ist
#  bei Ausgabe:  $name = stripslashes($name);

$insert = "INSERT INTO `adress_nr`(`adress_nr`, `name`, `vorname`, `strasse`, `plz`, `ort`) VALUES (NULL, '$feld1', '$feld2', '$feld3', '$feld4', '$feld5')";
$db = mysqli_query($link, $insert);

$query = "SELECT `adress_nr` FROM `adressen` ORDER BY `adress_nr` desc limit 1";
$zeiger = mysqli_query($link, $query) or die(mysqli_error($link));
$daten = mysqli_fetch_array($zeiger);
$adress_nr = $daten['adress_nr'];

if (isset($_POST['e-mail'])){
    $insert = "INSERT INTO `hilfstabelle` (`adress_nr`, `info_nr`) VALUES ('$adress_nr', '1')";
    $db = mysqli_query($link, $insert);
}

if (isset($_POST['newsletter'])){
    $insert = "INSERT INTO `hilfstabelle` (`adress_nr`, `info_nr`) VALUES ('$adress_nr', '2')";
    $db = mysqli_query($link, $insert);
}

if (isset($_POST['fax'])){
    $insert = "INSERT INTO `hilfstabelle` (`adress_nr`, `info_nr`) VALUES ('$adress_nr', '3')";
    $db = mysqli_query($link, $insert);
}
if (isset($_POST['brief'])){
    $insert = "INSERT INTO `hilfstabelle` (`adress_nr`, `info_nr`) VALUES ('$adress_nr', '4')";
    $db = mysqli_query($link, $insert);
}








//// Hier bitte ausfüllen (Adresse in Tabelle adressen) ....  $insert = 
// mysqli_query(...)


//
//
//$query = "SELECT adress_nr from adressen ORDER BY adress_nr desc limit 1";
//$zeiger = mysqli_query($link,$query) or die(mysqli_error($link));
//$daten = mysqli_fetch_array($zeiger);
//$adress_nr = $daten['adress_nr'];
//
///* Eintrag in Hilfstabelle falls e-mail angekreuzt wurde */
//if (isset($_POST['e-mail']))
//{
//$insert = "INSERT INTO hilfstabelle (`adress_nr`, `info_nr`) 
//values ('$adress_nr', '1')";
//$db = mysqli_query($link,$insert) or die(mysqli_error($link));
//}



// inserts für alle weiteren angekreuzten Korrespondenz-Arten








mysqli_close($link);
echo "<h1>Ihre Daten wurden in unsere Tabelle \"adressen\" eintragen</h1>\n";
echo "<h1>Vielen Dank!</h1>\n";
echo "<h1><a href=\"mysql_eintrag.html\">Adressen erfassen</h1>\n";
echo "<h1><a href=\"mysql_ausgabe.php\">Adressen anzeigen</h1>\n";
?>
</body>
</html>

