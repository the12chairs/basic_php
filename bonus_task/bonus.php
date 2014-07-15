<?php

    $days =  date('t'); #num of days
    $today = date("j");  # Today;
    for($i = 1; $i <= $days; $i++){
        if($i == $today)
            echo "!$i!"; # Let's mark today
        else
            echo "$i ";

        if($i%7 == 0) echo "\n"; # Formatting like real calendar
    }
    echo "\n";
            
?>
