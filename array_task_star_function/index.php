
<?php

include_once "func.php";

menuItem();
changeLang();

$lang=checkLanguage();
menu($lang);
$menu= menulink();
view($menu);
fileExist();

