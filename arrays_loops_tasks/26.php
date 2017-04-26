<?php

for($i=0; $i<100;$i++){
 $arr[]=rand(1,100);
}
$result=0;
foreach($arr as $key=>$val){
    if($val>0 && ($key%2==0)){
        $result=$result*$val;
    }
    if($val>0 &&($key%2!=0)){
        echo $key."-".$val."<br>";
    }

}