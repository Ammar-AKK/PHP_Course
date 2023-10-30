<?php


    function add($x, $y){
        return $x + $y;

    }

    echo add(5, 10);
    echo "<br>";

 function hello($x){
    $user = $x;

    if($user=== "Ammar"){
        echo "Hello ". $user;
    }else{
        echo "Bye " . $user;
    }

 }

 hello("Anas");
 echo "<br>";
 hello("Nour");





?>