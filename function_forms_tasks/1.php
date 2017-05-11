<html>
<form action="" method="post">
    <textarea name="first" title="first">

    </textarea>
    <br>
    <textarea name="second" title="second">

    </textarea>
    <br>
    <input type="submit" name="send" value="send" title="send">
</form>
</html>

<?php
$first=explode(" ", $_POST['first']);
//var_dump($first);
$second=explode( " ", $_POST['second']);

$result= array_intersect($first,$second);

var_dump($result);