<?php
    $n1=10;
    $n2=20;
    $n3=5;

    if($n1 < $n2 && $n1 < $n3|| $n2 < $n3 && $n2 < $n1 ){
        if(true){
           echo("n2 is smallest");
        }
        else{
            echo("n1 is smallest ");
        }
    }
    else{
        echo("n3 is smallest");
    }

?>