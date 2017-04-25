<html>

<form action="#" method="post">
   first number <input type="text" name="first" title="first"><br>
    second number <input type="text" name="second" title="second"><br>
    <span>‘+’ или ‘-’ или ‘/’ или ‘*’ или '%'</span><input type="text" name="operator" title="operator"><br>
    <input type="submit" value="Result">
</form>
</html>

<?php

$fist= $_POST['first'];
$second= $_POST['second'];
$operator= $_POST['operator'];
if(($operator=="/" or($operator=="%"))and $second==0){
    echo "на 0 делить нельзя";
}else{
    switch($operator){
    case "+": echo $fist+$second;
        break;
        case "-": echo $fist-$second;
                break;
        case "*": echo $fist*$second;
                break;
        case "/": echo $fist/$second;
                break;
        case "%": echo $fist%$second;
                break;
}

}
