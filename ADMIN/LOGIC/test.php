<?php
$haystack = "Hello, world!";
$needle = "l";

$lastPos = strrpos($haystack, $needle);
if ($lastPos === false) {
    echo "The character '$needle' was not found in the string '$haystack'.";
} else {
    $rightPart = substr($haystack, $lastPos);
    echo "The right part of the string '$haystack' after the last occurrence of the character '$needle' is: '$rightPart'";
}

$string = "Hello, world!";
$newString = substr($string, 0);

echo "The original string is: '$string'";
echo "The modified string is: '$newString'";