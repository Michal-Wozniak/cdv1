<?php

$text =<<<TEXT
    CDV -
    Collegium
    Da
    Vinci<br>
TEXT;
echo $text;
echo nl2br($text);



echo strtolower($text); //zamiana na małe litery
echo strtoupper($text); //zamiana na duże
echo ucfirst(strtolower(trim($text))); //pierwsza duża
echo ucwords(strtolower(trim($text))); //pierwsza duża w wyrazie

$lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis asperiores doloribus id corrupti nihil. Velit repellendus a non id soluta quo atque at eum amet, commodi sint libero quod tempora?";
echo $lorem,"<br>";
$col=wordwrap($lorem, 40, "<br>");
//$col=wordwrap($lorem, 40, "<hr>"); //podkreslenie
echo $col;

//usuwanie białych znaków

$name = " Janusz  ";
echo strlen($name); //9znaków
echo strlen(ltrim($name)); //8znaków
echo strlen(rtrim($name)); //7znaków
echo strlen(trim($name)),'<br>'; //6znaków

//przeszukiwanie ciągu znaków

$address="Poznań, ul. polna 10, tel. (61) 11 22 33";
$find=strstr($address, 'tel');
$find=stristr($address, 'Tel');
$find=stristr($address, 'Tel', true);
$find=stristr($address, 'Tel', false);
echo $find,'<br>';

$surname = substr("Janusz Kowalski", 7, 5);
echo $surname, '<br>';

//przetwarzanie ciągów znaków

$login = "BĄczek";
$censure = array("ą","ę","ś","ź","ż","ć","ó","ń","ł","Ą");
$replace = array("a","e","s","z","z","c","o","n","l","A");

$validLogin = str_ireplace($censure, $replace, $login);
echo "Dane przed poprawą: $login<br>";
echo "Dane po poprawie: $validLogin<br>";

?>