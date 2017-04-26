<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key =>$val){
    $en[]=$key;
    $ru[]=$val;
}
var_dump($en);
var_dump($ru);