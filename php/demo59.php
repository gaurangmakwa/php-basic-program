<?php
    if(isset($_POST['add']))
    {
        $no1=$_POST['text1'];
        $no2=$_POST['text2'];

        $c=$no1 + $no2;
        echo"sum is $c";
    }
    if(isset($_POST['sub']))
    {
        $no1=$_POST['text1'];
        $no2=$_POST['text2'];

        $c=$no1 - $no2;
        echo"sub is $c";
    }
    if(isset($_POST['multi']))
    {
        $no1=$_POST['text1'];
        $no2=$_POST['text2'];

        $c=$no1 * $no2;
        echo"multi is $c";
    }
    if(isset($_POST['div']))
    {
        $no1=$_POST['text1'];
        $no2=$_POST['text2'];

        $c=$no1 / $no2;
        echo"div is $c";
    }
?>
<html>
    <body>
        <form method="post">
            no1: <input type="text" name="text1"/>
            no2: <input type="text" name="text2"/>
            <input type="submit" value="add" name="add"/>
            <input type="submit" value="sub" name="sub"/>
            <input type="submit" value="multi" name="multi"/>
            <input type="submit" value="div" name="div"/>
        </form>
    </body>
</html>