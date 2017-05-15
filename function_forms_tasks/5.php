<html>
<form action="" method="post">
    <input type="text" name="direct" title="direct" placeholder="direct">
    <br>
    <input type="text" name="word" title="word" placeholder="word">
    <br>
    <input type="submit" title="send">
</form>
</html>

<?php

if ($_POST['direct'] && $_POST['word']){
$direct = trim(htmlspecialchars($_POST['direct']));
$direct = scandir($direct);
$word = $_POST['word'];
$direct = searchByWord($direct, $word);
result($direct);
?>
<pre>
    <?php

    }else{
        echo"<div style='color: red'>Одно из полей не заполнено</div>";
    }
    ?>

   </pre>

<?php
function searchByWord(array $arr, $word)
{
    $q=array();
   foreach ($arr as $key => $value) {
//        echo $value."---".$word."<br>";
        if($value==$word){
            $q[]=$value;
        }
    }
    return $q;

}
function result(array $arr){
    if($arr[0]==0){
        echo "По данному запросу ничего не найдено";
    }else{
    foreach ($arr as $key => $value) {
            echo $value."<br>";
        }
    }
}

