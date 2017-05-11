<form action="" method="post">
    <input type="text" name="text">
    <br>
    <input type="submit" name="submit">
</form>

<?php
if($_POST['submit']){
    file_put_contents ("comment.txt",$_POST['text'].":",FILE_APPEND);
    $arr=explode(":",file_get_contents("comment.txt"));
    foreach ($arr as $value){
        echo $value."<br>";
    }

}
