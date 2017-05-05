<?php
function fileExist(){
    if($_GET['page']){
        $page=$_GET['page'].".php";

        if(file_exists($page)){
            include_once $page;
        }else{
            echo"file doesn't exist";
        }

    }
}
function menulink(){
    if($_GET['lang']=="eng"){
        $arr=array("index.php?lang=eng&page=index"=>"MAIN","index.php?lang=eng&page=aboutus"=>"ABOUTUS");
        return $arr;
    }else{
        $arr=array("index.php?lang=ru&page=index"=>"MAIN","index.php?lang=ru&page=aboutus"=>"ABOUTUS");
        return $arr;
    }
}
function view( array $arr){
    include_once "menu_view.php";

}

function menuItem(){
    include_once ("lang.php");
}
function checkLanguage(){
    $lang=$_GET['lang'];
    if($lang==""  || $lang!='eng'){
        $lang="ru";
    }
        return $lang;
}
function menu($lang){
    if($lang=="eng"){

        define("MAIN","Main");
        define("ABOUTUS","about us");
        define("CONTACTS","Contact");
    }else{
        define("MAIN","Главная");
        define("ABOUTUS","О нас");
        define("CONTACTS","Контакты");
}

}

function changeLang(){
    $lang=$_POST['lang'];

    if($lang=="change lang"){
        var_dump($_GET);
        if($_GET['lang']=="ru"){
             $_GET['lang']="eng";
        }else{
            $_GET['lang']="ru";
            echo  23433;
        }
    }
}

function vButtonChangeLang(){
    include_once("buttonView.php");

}