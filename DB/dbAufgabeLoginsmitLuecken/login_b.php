<?PHP
session_start();
?>

<html>
<head>
<title>Login-B</title>
<link rel="stylesheet" type="text/css" href="css.inc.css">
</head>
<body>

<?PHP

if (isset($_POST['email']) AND isset($_POST['passwort']))
{
 	$email=$_POST['email'];
	$pass=$_POST['passwort']; 
    $pass=md5($pass);	 // besser die Funktion crypt() verwenden

    // Datenbankverbindung
    include "db.inc.php";
	
    $link=mysqli_connect("localhost", $benutzer, $passwort) or die("Keine Verbindung zur Datenbank!");
    mysqli_select_db($link, $dbname) or die("Datenbank nicht gefunden!");
	
	// prüfen ob es user und passwort gibt
	// Ihr Code mysqli_query --> Vervollständigen Sie diese Abfrage! Die folgenden 3 Zeilen ergänzen und Kommentar-Zeichen (//) entfernen
	
	 $abfrage = "SELECT email, password FROM `users` WHERE      ";
	// $ergebnis=mysqli_       ?????????????????????????????????          ;
	// $count=mysqli_nu      ???????????????              ;
	
 	if ($count == 1) 
	  { 
	  $_SESSION['eingeloggt']=true;
	  $_SESSION['email']=$email;
	  echo "Herzlich willkommen im VIP-Bereich!<br/>";
	  echo "Ihre Session-ID: ".session_id();
	  echo "<br/><a href=\"login_c.php\"> Hier gehts zu den geheimen Daten</a>";
	  echo "<br/><a href=\"login-anpassen-form.php\"> Passwort anpassen </a>";
	  }
	else
	  {
	  $_SESSION['eingeloggt']=false;
	  header("Location:index.php");
	  // echo "Login nicht geklappt";
	  }
}
?>

</body>
</html>