<?php
$str1="La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.";
function caractere($str1){
    $len=strlen($str1);
    echo '<p>La chaine str1 contient '.$len.' caractères</p>';
}
caractere($str1);

function mots($str1){
    $len2=str_word_count($str1);
    echo '<p>La chaine str1 contient '.$len2.' mots</p>';
}
mots($str1);

function minuscule($str1){
    $len3=strtolower($str1);
    echo '<p>'.$len3.'</p>';}

minuscule($str1);

function majuscule($str1){
$len4=strtoupper($str1);
echo '<p>' .$len4. '</p>';
}

majuscule($str1);

function melange($str1){
    $len5=str_shuffle($str1);
    echo'<p>' .$len5. '</p>';
}
melange($str1);

function LA($str1){
    $len6=str_ireplace("La", "LA", $str1);
    echo '<p>'.$len6.'</p>';
}
LA($str1);

function supp($str1){
    $len7=str_replace("est un avantage sérieux et utile.","", $str1);
    echo '<p>' .$len7. '</p>';
}
supp($str1);


?>
