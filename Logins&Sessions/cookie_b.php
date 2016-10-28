<?php
$t = time() + 60 * 60 * 24 * 365;
setcookie("nachname", $_POST['name'], $t);
setcookie("vorname", $_POST['vorname'], $t);
?>

<html> 

    <head>
        
    <body>
        <p> Ihre Ware wird versandt, an:
            <?php
            echo $_POST['name']." ".$_POST['vorname'];
            ?>
        
    </body>
        
    </head>
</html>
