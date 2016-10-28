<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1> Berechnungen: </h1><br/>";
if (isset($_POST['wert'])){
    $Laufzeit = $_POST['laufzeit'];
    $kapital = $_POST['wert'];
   // $zins = $kapital * 1.5/100;
    
    
    
    if ($Laufzeit<=2){
        $prozent = 0.8;
        $zins = $kapital * $prozent/100;
    } else if($Laufzeit >=3 && $Laufzeit<= 5){
        $prozent = 0.9;
        $zins = $kapital * $prozent/100;
    } else if ($Laufzeit >=6){
        $prozent = 1.1;
        $zins = $kapital * $prozent/100;
    }
    $umrechnung = $prozent/100;
    $zinseszins = $kapital * pow((1 + $umrechnung),$Laufzeit);
    
    
    //round($zinseszins);
   echo " Sie legen ein Kapital von: $kapital bei uns an. <br/>";
   echo " Sie erhalten im ersten Jahr einen Zins ($prozent%)von: $zins CHF<br/>";
   echo " In $Laufzeit Jahren haben Sie ein Kapital von $zinseszins";
    
}