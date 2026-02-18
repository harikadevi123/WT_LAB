<?php

// ---------- Datatypes ----------
$name = "Harika";      // string
$age = 19;             // integer
$cgpa = 8.5;            // float
$isStudent = true;     // boolean
$skills = array("C", "Java", "PHP"); // array

echo "<h3>Datatypes</h3>";
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "CGPA: $cgpa <br>";
echo "Student: $isStudent <br>";
echo "Skills: ";
print_r($skills);
echo "<br><br>";


// ---------- Local Scope ----------
function localTest() {
    $x = 10; // local variable
    echo "Local variable: $x <br>";
}
localTest();


// ---------- Global Scope ----------
$y = 20;

function globalTest() {
    global $y;
    echo "Global variable: $y <br>";
}
globalTest();


// ---------- Static Scope ----------
function staticTest() {
    static $count = 0;
    $count++;
    echo "Static Count: $count <br>";
}

echo "<br><h3>Static Variable Test</h3>";
staticTest();
staticTest();
staticTest();

?>
