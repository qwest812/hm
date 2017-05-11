<form action="" method="post">
    <input type="text" name="text">
    <br>
    <input type="submit" name="submit">
</form>

<?php
if($_POST['submit']){
    if($_POST['text']=="xxx"){
        echo "<div style='color:red'>Bad comment</div>";
        $arr = explode(":", file_get_contents("comment.txt"));
        foreach ($arr as $value) {
            if($value=="xxx"){
                continue;
            }else {
                echo $value . "<br>";
            }
        }
    }else {
        $text=strip_tags($_POST['text']);
        file_put_contents("comment.txt", $text. ":", FILE_APPEND);
        $arr = explode(":", file_get_contents("comment.txt"));
        foreach ($arr as $value) {
            if($value=="xxx"){
                continue;
            }else {
                echo $value . "<br>";
            }
        }
    }

}
