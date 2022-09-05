<?php
    $name=$_POST["text1"];
    $age=$_POST["text2"];

    echo"my name is $name and age is $age";
    echo"<table border='1'>";
    for($i=0;$i<$age;$i++){
        echo"<tr>";
        echo"<td>$i</td>";
        if($i%2==0){
            echo"<td style='background-color:yellow;'>$name</td>";
        }else{
            echo"<td bgcolor='red'>$name</td>";
        }
        echo"<td>happy birthday</td>";
        echo"</tr>";
    }
    echo"</table>";

?>