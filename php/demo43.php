<?php
    $arr= array(
        "banana"=>"yellow",
        "apple"=>"red",
        "mango"=>"green");

    $uppercase= array_change_key_case($arr,CASE_UPPER);
    print_r($uppercase);
?>