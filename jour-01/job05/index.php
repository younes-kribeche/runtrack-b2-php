<?php
function my_is_prime(int $number) : bool {
  if ($number <= 1) {
    return false;
  }
  if ($number == 2) {
    return true;
  }
  if ($number % 2 == 0) {
    return false;
  }
  
  $i = 3;
  while ($i * $i <= $number) {
    if ($number % $i == 0) {
      return false;
    }
    $i += 2;
  }

  return true;
}

echo my_is_prime(11) ? 'true' : 'false';
?>
