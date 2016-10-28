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
        // put your code here
        $name = $_GET["name"];
        $email = $_GET["email"];
        echo "<table> <tr>";
        echo "<td> Vielen Dank für Ihre Dateneingabe </td>";
        echo "</tr> <td> Ihr Name: $name </td>";
        echo "</tr> <td> Ihre E-Mail: $email </td>";
        echo "</table>";
        echo "Wir nehmen Sie in unser SPAM-Programm auf!!";
        ?>
    </body>
</html>
