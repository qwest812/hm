<form action="#" method="post">
    <input type="text" name="number" title="number">
    <input type="submit" title="result" value="result">
</form>

<?php
$f=(int)$_POST['number'];

$result=0;
var_dump($f);
if((!empty($_POST['number'])&& ($f!=0))) {
    $q=strlen($f);
    $new =str_split($f);
    for ($i = 0, $j = $q; $i < $j; $i++) {
        $result=$result+$new[$i];
//        var_dump($new[$j]);
    }
}
echo $result;