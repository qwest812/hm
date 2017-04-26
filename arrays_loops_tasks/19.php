<?php
$day="Monday";
$arr = array(
    "Monday",
    "Tuesday",
    " Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday"
);

foreach($arr as $val){
    if($val==$day){
        echo "<strong>$val</strong><br>";

    }else{
        echo $val."<br>";
    }
}