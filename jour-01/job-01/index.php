<?php
function my_str_search(string $haystack, string $needle) : int {
    $count = 0;
    $needle_length = strlen($needle); 
    
    for ($i = 0; $i <= strlen($haystack) - $needle_length; $i++) {
        if (substr($haystack, $i, $needle_length) === $needle) {
            $count++;
        }
    }
    
    return $count;
}

echo my_str_search('La Plateforme', 'a');
?>
