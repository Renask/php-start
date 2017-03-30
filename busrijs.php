<?php
/**
 * Created by PhpStorm.
 * User: renas
 * Date: 30-3-2017
 * Time: 09:44
 */
$ouderen = 65;
$kinderen = 12;
$jong = 3;

$prijsoud = 10;
$prijskind = 10;
$prijsjong = 0;




if ($ouderen > 65) {
    $prijsoud = 10 / 2;
}
    if($kinderen <= 12) {
        $prijskind = 10/ 2;
    }

    if ($prijsjong <= 3){
        $prijsjong = 0;

    } else {
        echo "";
    }
echo ("10 = ".$prijskind."<br>"." 2 = ".$prijsjong."<br>"."65 = ".$prijsoud."<br>"."12 = ".$prijskind);
?>