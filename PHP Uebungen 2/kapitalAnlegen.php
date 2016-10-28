<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
  <title>Dateneingabe</title>
</head>
<body>
<p> Bitte geben Sie einen Wert ein!</p> <form action="berechnung.php" method="post">
<p> Wert: <input type="text" name="wert" size="30"/> </p><br/>
<p> Laufzeit: <select name="laufzeit"> <p/>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
            </select> </br>
<input type="submit" value="Abschicken!"/>
<input type="reset" value="Felder l&ouml;schen!"/>
  </form>


</body>
</html>
