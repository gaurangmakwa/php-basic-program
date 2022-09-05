<?php
    //abs function
    echo abs(8);
    echo abs(8.5)."<br>";
    echo abs(-7.9)."<br>";

    //ceil function
    echo ceil(0.10)."<br>";
    echo ceil(0.90)."<br>";
    echo ceil(0.6)."<br>";
    echo ceil(0.02)."<br>";
     
    //floor function
    echo floor(25.4)."<br>";
    echo floor(25.04)."<br>";
    echo floor(25.99)."<br>";
    echo floor(11.5)."<br>";

    //round function
    echo round(13.6)."<br>";
    echo round(13.6,0)."<br>";
    echo round(7.89543,2)."<br>";
    echo round(354.83543,-2)."<br>";
    echo round(4.054,2)."<br>";
    echo round(9.066,2)."<br>";
    
    //min function
    echo min(4,24,3,5,11,7)."<br>";
    echo min(10,99,65,8,87)."<br>";

    //max function
    echo max(54,-54,2,5,77)."<br>";

    //Rand function
    echo rand()."<br>";

    echo "Random value=".rand(10,100)."<br>";

    //getrandmax
    echo(getrandmax())."<br>";

    //mt_rand
    echo mt_rand()."<br>";
    echo mt_rand(1001,2000)."<br>";

    //mt_getrandmax
    echo mt_getrandmax()."<br>";

    //fmod function
    $a= fmod(2018,2)."<br>";
    echo $a;

    //pow function
    echo pow(5,2)."<br>";

    //sqrt function
    echo sqrt(25)."<br>";

    //sin function
    echo sin(10.5)."<br>";

    //cos function
    echo cos(10.5)."<br>";

    //tan function
    echo tan(10.5)."<br>";

    //pi function
    echo pi()."<br>";

    //bindec fuction
    echo bindec('101')."<br>";
    echo bindec('10101')."<br>";

    //decbin function
    echo decbin(5)."<br>";
    echo decbin(21)."<br>";

    //dechex function
    echo dechex(21)."<br>";

     //decoct
     echo decoct(21)."<br>";


?>