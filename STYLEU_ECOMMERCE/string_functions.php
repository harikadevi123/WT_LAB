<?php

echo "<h2>String Functions</h2>";

$str = " learning php is fun ";

$username = "harika123";

// strlen
echo "Length: " . strlen($str) . "<br>";

// str_word_count
echo "Word Count: " . str_word_count($str) . "<br>";

// strrev
echo "Reverse: " . strrev($str) . "<br>";

// strtoupper
echo "Upper: " . strtoupper($str) . "<br>";

// strtolower
echo "Lower: " . strtolower($str) . "<br>";

// ucfirst
echo "Ucfirst: " . ucfirst($str) . "<br>";

// ucwords
echo "Ucwords: " . ucwords($str) . "<br>";

// strpos
echo "Position of php: " . strpos($str, "php") . "<br>";

// str_replace
echo "Replace: " . str_replace("php", "Java", $str) . "<br>";

// substr
echo "Substring: " . substr($str, 1, 10) . "<br>";

// trim
echo "Trim: '" . trim($str) . "'<br>";

// ltrim
echo "Ltrim: '" . ltrim($str) . "'<br>";

// rtrim
echo "Rtrim: '" . rtrim($str) . "'<br>";

// strcmp
echo "Compare: " . strcmp("abc", "ABC") . "<br>";

// strcasecmp
echo "Compare Ignore Case: " . strcasecmp("abc", "ABC") . "<br>";

// htmlspecialchars
$html = "<h1>Hello</h1>";
echo "HTML Safe: " . htmlspecialchars($html) . "<br>";

// addslashes
$quote = "I'm learning PHP";
echo "Addslashes: " . addslashes($quote) . "<br>";

?>
