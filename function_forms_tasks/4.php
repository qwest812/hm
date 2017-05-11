<html>
<form action="" method="post">
    <input type="text" name="direct" title="direct" placeholder="direct">
    <br>
    <input type="submit" title="send" >
</form>
</html>

<?php
$direct =trim(htmlspecialchars($_POST['direct']));
$direct=scandir($direct);
?>
<pre>
<?php
var_dump($direct);

?>
    </pre>

