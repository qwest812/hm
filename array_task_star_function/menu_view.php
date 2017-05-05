<ul>

    <?php
    foreach ($arr as $key => $val) {

        echo "<ul style='display: inline'>
<li style='display: inline'> <a href='" . $key . "'>" . constant($val) . "</a></li>
</ul>";
    }
    ?>
</ul>

