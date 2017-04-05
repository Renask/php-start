<?php
/**
 * Created by PhpStorm.
 * User: renas
 * Date: 5-4-2017
 * Time: 09:20
 */
$kuikens = 25;
$buffels = 32;
$plosnmderin = 11;
$bommetje = 23;


?>
<!DOCTYPE html>
<html>
<head>
    <style>
table {
            border-collapse: collapse;
        }
         td {
    padding: 5px;
    border : 1px solid black;
             text-align: left;
        }
    </style>
</head>
<body>

<table style="width:25%">
    <tr>
        <td>De spartelkuikens</td>
        <td>25</td>
        <td> <?php     for($i = 5; $i <= $kuikens; $i+=5){
    echo "<img src='Afbeeldingen/zwemmer.png'>";} ?> </td>
    </tr>

    <tr>
        <td>De waterbuffels</td>
        <td>32</td>
        <td> <?php     for($i = 5; $i <= $buffels; $i+=5){
                echo "<img src='Afbeeldingen/zwemmer.png'>";}?>
             </td>
    </tr>

    <tr>
        <td>Plonsmderin</td>
        <td>11</td>
        <td> <?php     for($i = 5; $i <= $plosnmderin; $i+=5){
                echo "<img src='Afbeeldingen/zwemmer.png'>";}  ?> </td>
    </tr>
    <tr>

        <td>Bommetje</td>
        <td>23</td>
        <td> <?php     for($i = 5; $i <= $bommetje; $i+=5){
                echo "<img src='Afbeeldingen/zwemmer.png'>";}  ?> </td>

    </tr>

    </table>
    </body>
    </html>