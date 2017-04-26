<?php
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($arr as $key=> $val){
    if($key%3==0){
        echo"<br>";
    }
    echo $val." ";

}