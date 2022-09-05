<?php
    $myarray =array("football","baseball","hockey","tennis","boxing");

    shuffle($myarray);
    foreach ($myarray as $key=>$value){
        echo "<br/>$value";
    }
?>