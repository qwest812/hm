<form action="" method="post">
    <input type="text" name="text">
    <br>
    <input type="submit" name="submit">
</form>


<?php
function changeText(){

    $res=array();
    $arr=explode(".",$_POST['text']);
    $count= count($arr);
    for($i=$count;$i>=0;$i--){
        $res[]=$arr[$i];
    }
    return  $res;
}
$q=changeText();
var_dump($q);