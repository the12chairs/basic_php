<?php

    function do_something($param1, $param2){
        printf("Line: %s, in file: %s, in function: %s\n", __LINE__, __FILE__, __FUNCTION__); # So simple
        $args = func_num_args(); # Get args
        for($i=0; $i < $args; $i++)
            printf("Arg № %d = %s \n", $i, func_get_arg($i)); # View values
        return true;
    }
    
    do_something(4, 5); # Check
?>
