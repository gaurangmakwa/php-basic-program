<?php
    if(isset($_POST['year']))
    {
        $no1=$_POST['text1'];
       if($no1%4==0){
        echo " leap year";
       }else{
        echo "not a leap year";
       }
    }

?>
<html>
    <body>
        <form method="post">
            no1: <input type="text" name="text1"/>
            <input type="submit" value="year" name="year"/>
        </form>
    </body>
</html>