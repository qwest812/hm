
<?php
$lang=$_GET['lang'];
if($lang==""  || $lang!='eng'){
    $lang="ru";
}

include_once "menu.php";
include_once "lang.php";
include_once "menu_view.php";
/*
header('Content-Type: text/html; charset=utf-8');

include "lang.php";
include "menu.php";
include "menu_view.php";
*/
/*
 * 2.1 Перевырити на наявнысть $_GET['page'] якщо ыснуэ
 * така змынна тоды include $_GET['page'].".php";
 * 2.2
 * Додати перевырку на наявнысть файлу $_GET['page'].".php"; (file_exists http://php.net/manual/ru/function.file-exists.php)
 */
if($_GET['page']){
    $page=$_GET['page'].".php";

    if(file_exists($page)){
        include_once $page;
    }else{
        echo"file doesn't exist";
    }

}

