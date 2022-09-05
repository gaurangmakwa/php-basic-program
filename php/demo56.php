<?php
    if(isset($_POST['binary']))
    {
        $no1=$_POST['text1'];
        echo decbin($no1);
    }
    if(isset($_POST['decimal']))
    {
        $no2=$_POST['text2'];
        echo bindec($no2);
    }
    if(isset($_POST['oct']))
    {
        $no3=$_POST['text3'];
        echo decoct($no3);
    }
?>
<html>
    <form method="post">
        no1:<input type="text" name="text1"/>
        no2:<input type="text" name =" text2"/>
        no3:<input type="text" name =" text3"/>
        <input type="submit" value="binary" name="binary"/>
        <input type="submit" value="decimal" name="decimal"/>
        <input type="submit" value="oct" name="oct"/>
    </form>
</html>