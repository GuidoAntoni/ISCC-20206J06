<?php
//Compter while//
function compter($x){
    while($x<=10){
        echo ''.$x.'<br>';
        $x=$x + 1;
    }
}
//rendu//
compter($x);

//Compter for//
function compter_for($y){
    for($y=1; $y<=10; $y=$y + 1){
        echo ''.$y.'<br>';
    }
}
//Rendu//
compter_for($y);


?>