<?php
$char = 'm';
$char = strtolower($char); // Convert to lowercase for easier checking

if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
    echo "$char is a vowel.";
} else {
    echo "$char is a consonant.";
}
?>
