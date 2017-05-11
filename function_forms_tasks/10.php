<form action="" method="post">
    <input type="text" name="text">
    <br>
    <input type="submit" name="submit">
</form>

<?php
function numberUniqueWord(){
    $arr= explode(" ", $_POST['text']);
    foreach ($arr as $key=>$value){
        foreach ($arr as $key2=> $value2){
                if($key==$key2){
                    continue;
                }else{
                    if($value==$value2){
                        unset($arr[$key]);
                    }
                }
        }
    }
    return $arr;
}
$q=numberUniqueWord();
$count=count($q);
echo $count;
