<?php
session_start();
?>

<pre>
    <?php var_dump(array_values($_SESSION["users"])); ?> 
</pre>