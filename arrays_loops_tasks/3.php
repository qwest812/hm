<?php
$mass=array(26, 17, 136, 12, 79, 15);
$result=0;
foreach ($mass as $val){
    $result= $result+$val*$val;

}
echo $result;