<?php

    $days = date('t'); # All days in mounth
    $day_count = 1; # Day counter
    $num = 0; # The number of week day mon - 1, thu - 2 etc

    # Get the first day of week in this mounth
    for($i = 0; $i < 7; $i++) {
        $dayweek = date('w', mktime(0, 0, 0, date('m'), $day_count, date('Y')));
        $dayweek = $dayweek - 1;
        if($dayweek == -1) $dayweek = 6;
            if($dayweek == $i){
                $week[$num][$i] = $day_count;
                $day_count++;
            }
        else{
            $week[$num][$i] = "";
        }
    }
    # In this loop we push all days in their week
    while(true){
        $num++;
        for($i = 0; $i < 7; $i++){
            $week[$num][$i] = $day_count;
            $day_count++;
            if($day_count > $days) break;
        }
        if($day_count > $days) break;
    }
    echo date("\t\tj of F\n");
    echo "Mon\tTue\tWed\tThu\tFri\tSat\tSun\n"; # Marking string
    for($i = 0; $i < count($week); $i++){
        for($j = 0; $j < 7; $j++){;
            if(!empty($week[$i][$j])){
                echo $week[$i][$j]."\t";
            }
            else echo "\t";
        }
        echo "\n";
    }
?>
