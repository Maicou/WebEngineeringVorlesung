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
         <?php
        session_start();
        session_destroy();
        session_unset();
        ?>
        
        <form action="login_b.php" method="post">
              <input type="text" name="benutzername"/> Benutzername </br>
              <input type="password" name="kennwort"/> Passwort </br>
              <input type="submit" value="Einloggen"/> <input type="rest" value="nochmals"/>
        </form>
    </body>
</html>
