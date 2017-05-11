<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function numberUniqueWord($string){
    $arr= explode(" ", $string);
    foreach ($arr as $key=>$value){
        foreach ($arr as $key2=> $value2){
            if($key==$key2){
                continue;
            }else{
                if($value==$value2){
                    unset($arr[$key]);
                }
            }
        }
    }
    return $arr;
}
$q=numberUniqueWord($string);

function countWordInString($string, array $arr){
    foreach ($arr as $ky=>$val){

        $newArr[]=$val;
    }
    $arr2= explode(" ", $string);
    $countArr=count($newArr);
    $count=array();
    $j=0;
    for($i=0; $i<=$countArr;$i++){
        foreach ($arr2 as  $value){
            if($value==$newArr[$i]){
                $j++;
            }
        }
        $count[$newArr[$i]]=$j;
        $j=0;
    }
    var_dump($count);
    array_pop($count);
    return $count;

}
$w=countWordInString($string, $q);
foreach ($w as  $key =>$value){
    echo $key."--".$value,"<br>";
}