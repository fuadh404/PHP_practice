<?php
/**
 * PHP CONSTANTS PRACTICE SHEET
 * ============================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: DEFINING CONSTANTS USING DEFINE()
// Task: Define several constants using the define() function with different data types 
//       (string, number, boolean, array). Display their values using echo/print.
// Hint: define('CONSTANT_NAME', value, case_insensitive) - third parameter is optional and defaults to false.

// Your code here

define ("SITE_NAME", "LearnPHP");
echo "Site: " . SITE_NAME . "\n";

define ("MAX_USER", 100 );
echo "Max User: " . MAX_USER . "\n";

define("IS_ACTIVE", true);
echo "Is Active? " . (IS_ACTIVE ? "yes" : "no") . "\n";

define ("COLORS", ["red", "green", "blue"]);
print_r (COLORS);




// TASK 2: DEFINING CONSTANTS USING CONST KEYWORD
// Task: Define constants using the const keyword and explain when to use const vs define().
//       Try defining constants with expressions and variables using both methods.
// Hint: const can only be used in the global scope or inside class definitions, not inside functions or conditionals.

// Your code here

const SITE = "LearnPHP";
const VERSION = 1.1;
const DEBUG_MODE = true;

echo "Site: " . SITE . "\n";
echo "Version: " . VERSION . "\n";
echo "Debug? " . (DEBUG_MODE ? "Yes" : "No") . "\n";


const COUNT = 10;
const TOTAL = COUNT * 2;

echo TOTAL . "\n"; 

//Const er moddhe variable use kora jay na, tobe varisble er moddhe const use kora jay

/* $count = 20;
const TOTAL_COUNT = $count * 10;
echo TOTAL_COUNT; */



// TASK 3: PREDEFINED CONSTANTS
// Task: Display and explain the purpose of at least five PHP predefined constants
//       (e.g., PHP_VERSION, PHP_OS, __FILE__, __LINE__, __DIR__).
// Hint: Predefined constants are built into PHP and provide information about the PHP environment.

// Your code here

echo "PHP_VERSION: " . PHP_VERSION . "\n";
echo "PHP_OS: " . PHP_OS . "\n";
echo "__FILE__: " . __FILE__ . "\n";
echo "__LINE__: " . __LINE__ . "\n";
echo "__DIR__:" . __DIR__ . "\n";

// TASK 4: MAGIC CONSTANTS
// Task: Demonstrate the use of PHP's magic constants 
//       (__LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__, __METHOD__, __NAMESPACE__).
//       Show how their values change in different contexts.
// Hint: Magic constants' values change depending on where they are used.

// Your code here






// TASK 5: CONSTANT ARRAYS
// Task: Create constant arrays using both define() and const. 
//       Access and display individual elements of the arrays.
// Hint: PHP 7+ allows arrays as constants with both define() and const.

// Your code here

define ("FRUITS", ["apple", "banana", "mango"]);

echo "First Fruit is: " . FRUITS[0] . "\n";
echo "Last Fruit is: " . FRUITS[2] . "\n";

const COLOURS = ["red", "green", "Blue"];

echo "First Colour is: " . COLOURS[0] . "\n";
echo "Second Colour is: " . COLOURS[1] . "\n";

?>