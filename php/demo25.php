<?php
    //array function
    //count function
    $arr = array('php','c','c++','java','android');
    echo count($arr);

    //array_count_values
    $arr = array ("C","php","c","androide","php","java");
    $newarr=array_count_values($arr);

    foreach ($newarr as $key=>$value){
        echo "</br>$key- <strong>$value</strong>";
        }
?>