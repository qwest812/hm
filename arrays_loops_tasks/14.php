<?php
$arr= array(4, 2, 5, 19, 13, 0, 10);
$e=array(2,3,4);
$n=0;
foreach($arr as $val){
    foreach($e as $eval){
        if($val==$eval) {
            $n++;
        }
    }
}
if($n==0){
    echo"No";
}else{
    echo "Yes";
}