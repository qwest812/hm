<form action="#" method="post">
    <input type="text" name="rownumber" title="rownumber" placeholder="Row of number">
    <input type="text" name="number" title="number" placeholder="Number">
    <input type="submit" title="result" value="result">
</form>

<?php
$number = (int)$_POST['number'];
$rownumber= (int)$_POST['rownumber'];

$result = 0;
if (((!empty($_POST['number']) && ($number != 0)))&&((!empty($_POST['rownumber']) && ($rownumber != 0)))) {

    $q = strlen($rownumber);
    $new = str_split($rownumber);
    for ($i = 0, $j = $q; $i < $j; $i++) {
         if($new[$i]==$number){
             $result++;
         }
    }
}
echo $result;