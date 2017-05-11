<html>
<form action="" method="post">
    <input type="text" name="direct" title="direct" placeholder="direct">
    <br>
    <input type="text" name="word" title="word" placeholder="word">
    <br>
    <input type="submit" title="send" >
</form>
</html>

<?php
$direct =trim(htmlspecialchars($_POST['direct']));
$direct=scandir($direct);
$word=$_POST['word'];
$direct=searchByWord($direct, $word);
?>
<pre>
<?php
var_dump($direct);

?>
    </pre>

<?php
function searchByWord(array $arr, $word){

    foreach ($arr as $key=>$value){
        if(strpos($value,$word)!=0){
            $q[]=$value;
        }
    }
    if($q[0]==''){
        return false;
    }else{
        return $q;
    }

}