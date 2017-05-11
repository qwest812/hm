<form action="" method="post">
    <input type="text" name="text">
    <br>
    <input type="submit" name="submit">
</form>

<?php
function coutEnter(){
    $count= substr_count($_POST['text'], ".");
    return $count;
}
function upperCase($count,$text){
    for($i=0;$i<=$count;$i++){
        $number=strpos($text,".",$i);

    }
}

function test(){

    $arr=explode(".",$_POST['text']);


    foreach ($arr as $key=>$value){
        echo $value."<br>";
        $arr[$key]=ucfirst($value);
//        echo $arr[$key];

    }
    $res=implode(". ",$arr);
    return $res;
}
 echo $result=test();
