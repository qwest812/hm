<?php
$arr= array(2, 5, 9, 15, 0, 4);
foreach($arr as $val){
    if((3<$val) && ($val<10)){
        echo $val."<br>";
    }
}