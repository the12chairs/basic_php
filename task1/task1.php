<?php

    $ids = array(1, 2, 3, 4);
    

    $sql = 'SELECT * FROM `table` WHERE `id` IN ('. implode (", ", $ids) . ');'; # Bit cooler than loops
    echo "$sql\n";
?>
