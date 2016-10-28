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
        ?>

        <form action="berechneZahlen.php" method="post">

            Zahl 1: <input type="number" name="zahl1" size="30"/> <br/>
            Zahl 2: <input type="number" name="zahl2" size="30"/> <br/>
            <select name="operator" >
                <option value="1">*</option>
                <option value="2">/</option>
                <option value="3">+</option>
                <option value="4">-</option>
            </select>

            <input type="submit" value="Abschicken!"/>
            <input type="reset" value="Felder l&ouml;schen!"/>
        </form>


    </body>
</html>
