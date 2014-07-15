<?php
    
    $id = 8738;                 # What we going to convert
    $article = strval($id);     # Result

    if(strlen($article) >= 6)   # For big strings
        die("Nothing to do\n");
    else                        # For normal strings
        do {
            $article = "0" . $article;
        }
        while(strlen($article) < 6);

    echo "$article\n";
?>
