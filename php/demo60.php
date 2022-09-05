<?php
    if(isset($_POST['sin']))
    {
        $no1=$_POST['text1'];

        echo sin($no1);
    }
    if(isset($_POST['cos']))
    {
        $no1=$_POST['text1'];

        echo cos($no1);
    }
    if(isset($_POST['tan']))
    {
        $no1=$_POST['text1'];

        echo tan($no1);
    }
?>
<html>
    <body>
        <form method="post">
            no1: <input type="text" name="text1"/>
            <input type="submit" value="sin" name="sin"/>
            <input type="submit" value="cos" name="cos"/>
            <input type="submit" value="tan" name="tan"/>
        </form>
    </body>
</html>