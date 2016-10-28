<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title> DB-Bearbeitung l&ouml;schen, editieren und erfassen in einem File </title>
  <link rel="stylesheet" type="text/css" href="db_linkcss.css">

<script type="text/javascript">
function send(ak,id)
{
   if(ak==0)
       document.f.ak.value = "in";
   else if(ak==1)
       document.f.ak.value = "up";
   else if(ak==2)
   {
       if (confirm("Datensatz mit id " + id + unescape(" l%F6schen?")))  // siehe Umlaute in Javascript
          document.f.ak.value = "de";
       else
          return;
   }
   document.f.id.value = id;
   document.f.submit();
}
</script>
</head>

<body>
<?php
        $dbname = "firma";
        $benutzer = "root";
        $passwort = "martin";

// Verbindung mit DB-Server aufbauen 
   $link=mysqli_connect('localhost', $benutzer, $passwort);
   mysqli_select_db($link, $dbname);
   
 // UTF-8 Codierung für ä,ö,ü
mysqli_query($link, "SET NAMES 'utf8'");

   /* Aktion ausführen */
   if(isset($_POST["ak"]))
   {
      /* neu eintragen */
      if($_POST["ak"]=="in")
      {
         $sqlab = "INSERT INTO personen"
           . "(`Name`, `Vorname`, `Pers-Nr.`,"
           . " `Gehalt`, `Geb-Datum`) VALUES ('"
           . $_POST["na"][0] . "', '"
           . $_POST["vo"][0] . "', '"
           . $_POST["pn"][0] . "', '"
           . $_POST["gh"][0] . "', '"
           . $_POST["gb"][0] . "')";
         $num=mysqli_query($link, $sqlab);
//	     if ($num==1) {echo "Datensatz eingefügt";}
//		 else {echo "Insert hat nicht funktioniert";}
      }

      /* ändern */
      else if($_POST["ak"]=="up")
      {
         $id = $_POST["id"];
         $sqlab = "UPDATE personen SET "
           . "`Name` = '" . $_POST["na"][$id] . "', "
           . "`Vorname` = '" . $_POST["vo"][$id] . "', "
           . "`Pers-Nr.` = '" . $_POST["pn"][$id] . "', "
           . "`Gehalt` = '" . $_POST["gh"][$id] . "', "
           . "`Geb-Datum` = '" . $_POST["gb"][$id] . "'"
           . " WHERE `Pers-Nr.` = '$id'";
         $num=mysqli_query($link, $sqlab);
//		 if ($num==1) {echo "Datensatz angepasst";}
//		 else {echo "hat nicht funktioniert";}
      }

      /* löschen */
      else if($_POST["ak"]=="de")
      {
         $sqlab = "delete from personen WHERE `Pers-Nr.` = " . $_POST["id"];
         mysqli_query($link, $sqlab);
      }
   }

   /* Formular-Beginn */
   echo "<form name='f' action='db_linkcss.php'
               method='post'>";
   echo "<input name='ak' type='hidden' />";
   echo "<input name='id' type='hidden' />";

   /* Tabellen-Beginn */
   echo "\n\n<table border>"
    . "<tr>"
    . "<td>Name</td>"
    . "<td>Vorname</td>"
    . "<td>Pers-Nr</td>"
    . "<td>Gehalt</td>"
    . "<td>Geb-Dat.</td>"
    . "<td>Aktion</td>"
    . "</tr>";

   /* Neuer Eintrag */
   echo "\n\n<tr>"
    . "<td><input name='na[0]' size='8' /></td>"
    . "<td><input name='vo[0]' size='6' /></td>"
    . "<td><input name='pn[0]' size='6' /></td>"
    . "<td><input name='gh[0]' size='6' /></td>"
    . "<td><input name='gb[0]' size='10' /></td>"
    . "<td><a href='javascript:send(0,0);'>neu eintragen</a></td>"
    . "</tr>";

   /* Anzeigen */
   $res = mysqli_query($link, "select * from personen");

   /* Alle vorhandenen Datensätze */
   while ($dsatz = mysqli_fetch_assoc($res))
   {
      $id = $dsatz["Pers-Nr."];
      echo "\n\n<tr>"
       . "<td><input name='na[$id]' value='" . $dsatz['Name'] . "' size='8' /></td>"
       . "<td><input name='vo[$id]' value='" . $dsatz['Vorname'] . "' size='6' /></td>"
       . "<td><input name='pn[$id]' value='" . $dsatz['Pers-Nr.'] . "' size='6' /></td>"
       . "<td><input name='gh[$id]' value='" . $dsatz['Gehalt'] . "' size='6' /></td>"
       . "<td><input name='gb[$id]' value='" . $dsatz['Geb-Datum'] . "' size='10' /></td>"
       . "<td><a href='javascript:send(1,$id);'>&auml;ndern</a>"
       . " <a href='javascript:send(2,$id);'>l&ouml;schen</a></td>"
       . "</tr>";
   }
   echo "</table>";
   echo "</form>";
?>
</body>
</html>
