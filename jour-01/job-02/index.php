<?php
function my_str_reverse(string $string) : string {
    $reversed = '';
    $length = strlen($string); 
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}

echo my_str_reverse('Hello');
?>
