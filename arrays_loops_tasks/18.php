<?php
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
    if($val=="Saturday" || $val=='Sunday'){
        echo "<strong>$val</strong><br>";

    }else{
        echo $val."<br>";
    }
}