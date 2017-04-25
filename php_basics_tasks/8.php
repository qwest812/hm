<?php
$age=23;
if(($age<1) or (is_float($age))){
    echo "Неизвестный возраст";
}elseif(18<$age){
    echo "Вам еще рано работать";
}elseif($age<59){
    echo "Вам еще работать и работать";
}elseif($age>59){
    echo "Вам пора на пенсию";
}