<?php
    $name=$_POST["text1"];

    for($i=1;$i<=20;$i++){
        echo $name,"*",$i,"=",$name*$i,"<br>";
    }
?>