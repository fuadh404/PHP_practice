<?php
/**
 * PHP OPERATORS PRACTICE SHEET
 * ===========================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: ARITHMETIC OPERATORS
// Task: Demonstrate all arithmetic operators (+, -, *, /, %, **) with different numeric types (integers and floats).
//       Show examples of operator precedence and how parentheses affect the order of operations.
// Hint: The ** operator is for exponentiation and % is the modulo operator for remainder after division.

// Your code here

// 🔹 Integer operations
$a = 10;
$b = 3;

echo "Addition: " . ($a + $b) . "\n";         // 13
echo "Subtraction: " . ($a - $b) . "\n";      // 7
echo "Multiplication: " . ($a * $b) . "\n";   // 30
echo "Division: " . ($a / $b) . "\n";         // 3.333...
echo "Modulus (remainder): " . ($a % $b) . "\n"; // 1
echo "Exponentiation: " . ($a ** $b) . "\n";  // 10^3 = 1000

// 🔸 Float operations
$x = 5.5;
$y = 2.0;

echo "\nFloat Division: " . ($x / $y) . "\n";       // 2.75
echo "Float Power: " . ($x ** $y) . "\n";           // 5.5^2 = 30.25

// 🔹 Operator precedence example
$result1 = 10 + 3 * 2;         // 10 + (3*2) = 16
$result2 = (10 + 3) * 2;       // (10+3) * 2 = 26

echo "\nWithout Parentheses: 10 + 3 * 2 = $result1\n";
echo "With Parentheses: (10 + 3) * 2 = $result2\n";


echo "----------------------------- \n";
// TASK 2: ASSIGNMENT OPERATORS
// Task: Use all assignment operators (=, +=, -=, *=, /=, %=, **=, .=) in examples.
//       Explain the difference between simple assignment and compound assignments.
// Hint: Compound assignment operators perform an operation and assign in one step. The .= operator is for string concatenation.

// Your code here

$a += 5;
echo $a . "\n";

$a -= 3; // a = a - 3
echo "After -= : $a\n";

$a *= 2; // a = a * 2
echo "After *= : $a\n";

$a /= 4; // a = a / 4
echo "After /= : $a\n";

$a %= 4; // a = a % 4
echo "After %= : $a\n";

$a = 2;
$a **= 3; // a = a ** 3 (2^3 = 8)
echo "After **= : $a\n";

$text = "Hello";
$text .= " World"; // text = text . " World"
echo "After .= : $text\n";


// TASK 3: STRING OPERATORS
// Task: Demonstrate string concatenation using the dot (.) operator and the concatenating assignment (.=) operator.
//       Show string interpolation within double quotes as an alternative.
// Hint: The dot operator joins strings, while variable interpolation works only in double quotes.

// Your code here

$gree = "Hello";
$gree .= " World,";
$gree .= " Bye.";

echo $gree;

//interpolation

echo "Greetings is: $gree \n";

echo 'Greetings is: $gree \n'; //variable not work in stirng single quote


// TASK 4: INCREMENT/DECREMENT OPERATORS
// Task: Demonstrate both pre-increment (++$var), post-increment ($var++), pre-decrement (--$var), and post-decrement ($var--).
//       Show examples of these operators in expressions to highlight the difference between pre and post operations.
// Hint: Pre-increment changes the value before using it in the expression; post-increment uses the original value in the expression.

// Your code here


// Initial value
$x = 5;

// 1️⃣ Post-increment ($x++)
echo "Post-increment:\n";
echo "Before: " . $x++ . "\n";  // Show 5, then becomes 6
echo "After: " . $x . "\n\n";   // Now it's 6

// 2️⃣ Pre-increment (++$x)
$y = 5;
echo "Pre-increment:\n";
echo "Before: " . ++$y . "\n";  // First becomes 6, then show 6
echo "After: " . $y . "\n\n";   // Still 6

// 3️⃣ Post-decrement ($x--)
$a = 5;
echo "Post-decrement:\n";
echo "Before: " . $a-- . "\n";  // Show 5, then becomes 4
echo "After: " . $a . "\n\n";   // Now it's 4

// 4️⃣ Pre-decrement (--$x)
$b = 5;
echo "Pre-decrement:\n";
echo "Before: " . --$b . "\n";  // First becomes 4, then show 4
echo "After: " . $b . "\n";



// TASK 5: COMPARISON OPERATORS
// Task: Use all comparison operators (==, ===, !=, <>, !==, <, >, <=, >=, <=>) with different data types.
//       Explain the difference between loose (==) and strict (===) comparison.
// Hint: Strict comparison (===, !==) checks both value and type; loose comparison (==, !=) only checks value.

// Your code here


//Already done before


// TASK 6: LOGICAL OPERATORS
// Task: Demonstrate the use of logical operators (&&/AND, ||/OR, !/NOT, XOR) in different conditions.
//       Show operator precedence and short-circuit evaluation with examples.
// Hint: Short-circuit evaluation means the second condition may not be evaluated if the first condition determines the result.

// Your code here


$a = true;
$b = false;

// 1️⃣ AND / && → দুইটা সত্য হলে তবেই true
echo "AND (&&): ";
var_dump($a && $b); // false

// 2️⃣ OR / || → যেকোনো একটা সত্য হলেই true
echo "OR (||): ";
var_dump($a || $b); // true

// 3️⃣ NOT (!) → মান উল্টে দেয়
echo "NOT (!a): ";
var_dump(!$a); // false

// 4️⃣ XOR → ঠিক একটাই true হলে true, না হলে false
echo "XOR: ";
var_dump($a xor $b); // true
var_dump($a xor $a); // false

// 5️⃣ Precedence difference (&& > =)
$result1 = false || true; // evaluated as (false || true) → true
$result2 = false or true; // evaluated as (false) or true → but assignment happens first → $result2 = false

echo "false || true: ";
var_dump($result1); // true

echo "false or true: ";
var_dump($result2); // false

// 6️⃣ Short-circuit example
function check1() {
    echo "check1 called\n";
    return false;
}

function check2() {
    echo "check2 called\n";
    return true;
}

echo "Short-circuit with AND:\n";
if (check1() && check2()) {
    echo "Both true\n";
} else {
    echo "Not both true\n"; // check2 never called
}

echo "Short-circuit with OR:\n";
if (check2() || check1()) {
    echo "At least one is true\n"; // check1 never called
}



?>