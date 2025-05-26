<?php
$a = 12;
$b = 7;
$c = 25;

if ($a <= $b && $a <= $c) {
    echo "The smallest number is $a";
} elseif ($b <= $a && $b <= $c) {
    echo "The smallest number is $b";
} else {
    echo "The smallest number is $c";
}
?>
