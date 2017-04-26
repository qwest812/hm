<table border="1" style="border-collapse: collapse">
<!--    <tr>-->
<!--        <td>1</td>-->
<!--        <td>1</td>-->
<!--        <td>1</td>-->
<!--        <td>1</td>-->
<!--        <td>1</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--            <td>1</td>-->
<!--            <td>1</td>-->
<!--            <td>1</td>-->
<!--            <td>1</td>-->
<!--            <td>1</td>-->
<!--        </tr>-->
    <form method="post" action="#">
        <input type="text" name="row" title="row" placeholder="row">
        <input type="text" name="col" title="col" placeholder="col">
        <input type="submit" title="red" name="res">
    </form>
<?php

$colors = array('red','yellow','blue','gray','maroon','brown','green');
if($_POST['row']!=0 && $_POST['col']!=0){
    $row=$_POST['row'];
    $col=$_POST['col'];
    for($i=0;$i<$row;$i++){
        echo "<tr>";
        for($j=0;$j<$col;$j++){
            echo"<td style='height:20px; width:20px;background-color: ".$colors[rand(0,count($colors))]."'>".rand(0,100)."</td>";
        }
        echo"</tr>";

    }
}

?>
