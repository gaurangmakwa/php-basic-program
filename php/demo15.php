<?php
    $n1=60;
    $n2=20;
    $n3=30;

    if($n1>$n3&&$n1>$n2||$n2>$n3&&$n2>$n1){
        if(true){
            echo"n1 is greatest";
        }else{
            echo"n2 is greatest";
        }
    }
    else{
        echo"n3 is greatest";
    }
?>