<?php
    $arr= range("11","20");
    foreach($arr as $key=>$value)
    {
        echo"<br/>$key-$value";
    }
    echo"</br>";
     $a=range('a','z');
    foreach($a as $key=>$value)
    {
        echo"<br/>$key-$value";
    }
    echo"</br>";
    $year = range(1900,2020);

    echo "<select>";
    foreach ($year as $value)
    {
        echo
        "<option>$value</option>";
    }
    echo "</select>";

    
?>