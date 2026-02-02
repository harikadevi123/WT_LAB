<?php

$str = "hello world";


$length = strlen($str); 
echo "Length of string is $length <br>";


$rev = strrev($str); 
echo "Reverse of string '$str' is $rev <br>";


$upper = strtoupper($str); 
echo "Uppercase of '$str' is $upper <br>";

$lower = strtolower($str);
echo "Lowercase of '$str' is $lower <br>";


$uc = ucfirst($str); 
echo "First letter uppercase: $uc <br>";


$ucw = ucwords($str); 
echo "Each word capitalized: $ucw <br>";


$pos = strpos($str, "world"); 
echo "'world' position in string: $pos <br>";

$re = str_replace("world", "people", $str);
echo "After replacing: $re <br>";


$sub = substr($str, 0, 5); 
echo "Extracted string: $sub <br>";


echo "Trim: '" . trim("    hello   ") . "' <br>";
echo "Left Trim: '" . ltrim("    hello   ") . "' <br>";
echo "Right Trim: '" . rtrim("    hello   ") . "' <br>";


$cmp = strcmp("hello", "hello");

if ($cmp == 0) {
    echo "STRING IS SAME <br>";
} else {
    echo "NOT SAME <br>";
}


$wordcount = str_word_count($str); 
echo "Number of words in '$str' is $wordcount <br>";


$arr = array("apple", "banana", "mango");

$arrtostr = implode("-", $arr);

echo "Array is: ";
print_r($arr);
echo "<br>";

echo "Array converted to string: $arrtostr <br>";


$strtoarr = explode("-", $arrtostr);

echo "String converted to array: ";
print_r($strtoarr);

?>
