<?php
    $arr= array(
        "banana"=>"yellow",
        "apple"=>"red",
        "mango"=>"green");
    ksort($arr);
    foreach ($arr as $key =>$value){
        echo "<br/>$key - $value";
    }
?>