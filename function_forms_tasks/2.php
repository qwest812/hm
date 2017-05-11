<html>
<form action="" method="post">
    <input type="text" name="first" title="first" placeholder="text">
    <br>
    <input type="text" name="num" title="num" placeholder="number">

    </input>
    <br>
    <input type="submit" name="send" value="send" title="send">
</form>
</html>
<?php
$first=explode(" ", $_POST['first']);
$num=(int) ($_POST['num']);
var_dump($num);
?>
<pre>
    <?php

var_dump(maxString($num,$first));
    ?>
</pre>
<?php
function asLongString(array  $arr){
    $max=0;
    for($i=0; $i<3; $i++){
        foreach ($arr as $key=>$value){
            if(strlen($max)<strlen($value)){
                $max=$value;
            }

        }
    }
    return $max;
}
function dellElement(array  $arr, $value){
    foreach ($arr as $key=> $item) {
        if ($arr[$key]==$value){
            unset($arr[$key]);
        }

    }
    return $arr;
}
function maxString( $num,array $arr){

    for($i=0; $i<$num;$i++){
        $max=asLongString($arr);
        $arr=dellElement($arr,$max);
        if($max !=''){
        $result[]=$max;
        }

    }

    return $result;
}
