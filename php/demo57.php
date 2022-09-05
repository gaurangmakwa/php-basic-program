<?php
    if(isset($_POST['min']))
    {
        $no1= $_POST['text1'];
        $no2=$_POST['text2'];
        $no3=$_POST['text3'];
        $no4=$_POST['text4'];
        $no5=$_POST['text5'];
        $no6=$_POST['text6'];
        $no7=$_POST['text7'];
        $no8=$_POST['text8'];
        $no9=$_POST['text9'];
        $no10=$_POST['text10'];

        echo min($no1,$no2,$no3,$no4,$no5,$no6,$no7,$no8,$no9,$no10);
    }
    if(isset($_POST['max']))
    {
        $no1= $_POST['text1'];
        $no2=$_POST['text2'];
        $no3=$_POST['text3'];
        $no4=$_POST['text4'];
        $no5=$_POST['text5'];
        $no6=$_POST['text6'];
        $no7=$_POST['text7'];
        $no8=$_POST['text8'];
        $no9=$_POST['text9'];
        $no10=$_POST['text10'];

        echo max($no1,$no2,$no3,$no4,$no5,$no6,$no7,$no8,$no9,$no10);
    }
?>
<html>
    <form method="post">
        no1 : <input type="text" name="text1"/>
        no2 : <input type="text" name="text2"/>
        no3 : <input type="text" name="text3"/>
        no4 : <input type="text" name="text4"/>
        no5 : <input type="text" name="text5"/>
        no6 : <input type="text" name="text6"/>
        no7 : <input type="text" name="text7"/>
        no8 : <input type="text" name="text8"/>
        no9 : <input type="text" name="text9"/>
        no10 : <input type="text" name="text10"/>
        <input type="submit" value="min" name="min"/>
        <input type="submit" value="max" name="max"/>
    </form>
</html>