<?php
    //numerical array
    //method 1
    $a[0]=10;
    $a[1]=20;
    $a[2]="gaurang";
    $a[3]="c";
    echo $a[2];
    //method 2 blank array/daynamic array
    $a[]=10;
    $a[]=20;
    $a[]="gaurang";
    $a[]="c";
    echo"</br> $a[3]";
    //method 3
    //always use this method to create an array
    $a=array(10,20,30,40,"gaurang");
    //print aray
    echo"</br>$a[0]";
    //print using loop while and dowhile
    for($i=0;$i<count($a);$i++){
            echo "</br> $a[$i]";
    }
        //associative array
        //key=value
        //method 1
        $a[10]=10;
        $a['z']="gaurang";
        $a[20]=20;
        //print
        echo"</br>" .$a['z'];
        
        //foreach loop
        foreach ($a as $value){
                echo"</br> $value";
        }
        foreach ($a as $key=>$value){
                echo"</br> $value";
        }
        //3 inbuilt functions to debug an array
        echo "<pre>";
        print_r($a);
        var_dump($a);
        var_export($a);


?>