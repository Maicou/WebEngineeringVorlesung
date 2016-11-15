<html>
<head>
<title> Spezial-Query-Ausgabe </title>
<link rel="stylesheet" type="text/css" href="format.css"/>
</head>
<body>
<?PHP
include('db_conf.php');

echo "<h1>Spezial-Ausgabe \"join\"</h1><br/>\n";

$link=mysqli_connect("localhost", $benutzer, $passwort);
mysqli_select_db($link,$dbname);

# Diese SELECT-Anweisung entspricht der unteren JOIN-Query 
#
# $abfrage = "SELECT adressen.adress_nr, vorname, name, strasse, plz, ort, info_art FROM adressen, info_art, hilfstabelle WHERE 
# (adressen.adress_nr = hilfstabelle.adress_nr) AND (hilfstabelle.info_nr = info_art.info_nr)";


// Hier bitte  "$abfrage" die SQL-Query definieren mit einem --> INNER JOIN hilfstabelle ON  usw.




$ergebnis = mysqli_query($link,$abfrage) or die(mysql_error());

echo "<table border=\"1\">";
while ($zeile=mysqli_fetch_assoc($ergebnis))
{
 
// Hier bitte foreach-Variante um Array-Werte auszulesen
// oder Variante "list"-> "each"

 

}

  echo "</tr>";

echo "</table>";

mysqli_close($link);
?>
</body>
</html>
