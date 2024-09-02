<?php
function my_fizz_buzz(int $length) : array {
    $array = [];
    for ($i = 1; $i <= $length; $i++) {
        if ($i % 5 == 0 && $i % 3 == 0) {
            $array[] = 'FizzBuzz';
        } elseif ($i % 3 == 0) {
            $array[] = 'Fizz';
        } elseif ($i % 5 == 0) {
            $array[] = 'Buzz';
        } else {
            $array[] = $i;
        }
    }
    return $array;
}

$result = my_fizz_buzz(15);
foreach ($result as $value) {
    echo $value . "\n";
}
?>
