<html>
<form action="" method="post">
    <input type="text" name="first" title="first" placeholder="text">
    <br>
    <input type="text" name="num" title="first" placeholder="num">

    <br>
    <input type="submit" name="send" value="send" title="send">
</form>
</html>

<?php
$first=explode(" ", $_POST['first']);
$num=(int) ($_POST['num']);
$result=dellWordAsLess($first,$num);
function dellWordAsLess(array $arr, $num){
    foreach ($arr as $key=>$value){
        if(mb_strlen($value)>$num){
            unset($arr[$key]);
        }
    }
    return $arr;
}

?>
<pre>
    <?php
    var_dump($result);
    ?>
</pre>
