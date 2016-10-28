<?php
session_start();
if (isset($_POST['benutzername']) AND isset($_POST['kennwort'])){
    
     if($_POST['benutzername']=="martin" AND $_POST['kennwort']==1234){
         $_SESSION['eingeloggt']=true;
         $_SERVER['name']=$_POST['benutzername'];
         echo "Ihr Login war erfolgreich!</br>";
         echo "Die Session ID lautet: ".session_id();
     }else{
         echo "Name oder Passwort stimmen nicht überein!";
         $_SESSION['eingeloggt']=false;
     }
}

?>
