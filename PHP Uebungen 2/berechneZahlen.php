<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ((isset($_POST['zahl1'])) && (isset($_POST['zahl2']))) {

    $zahl1 = $_POST['zahl1'];
    $zahl2 = $_POST['zahl2'];

    $operator = $_POST['operator'];
    $ergebnis;
    switch ($operator) {
        case 1:
            $ergebnis = $zahl1 * $zahl2;


            break;

        case 2:
            $ergebnis = $zahl1 / $zahl2;
            break;

        case 3:
            $ergebnis = $zahl1 + $zahl2;
            break;


        case 4:
            $ergebnis = $zahl1 - $zahl2;

            break;
    }


    echo "Das Ergebnis ist: $ergebnis";
}