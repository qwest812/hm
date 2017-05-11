<form action="" method="post">
    <input type="text" name="text">
    <br>
    <input type="submit" name="submit">
</form>


<?php

$q=strrev ($_POST['text']);
echo $q;