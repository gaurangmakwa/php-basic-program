<?php
    $arr= array(
        "banana"=>"yellow",
        "apple"=>"red",
        "mango"=>"green");
    krsort($arr);
    foreach ($arr as $key =>$value){
        echo "<br/>$key - $value";
    }
?>