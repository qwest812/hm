<?php

$arr = array('green'=>'�������', 'red'=>'�������','blue'=>'�������');
foreach ($arr as $key =>$val){
    $en[]=$key;
    $ru[]=$val;
}
var_dump($en);
var_dump($ru);