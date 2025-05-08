<?php
/**
 * PHP NUMBER PRACTICE SHEET
 * =========================
 * 
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: NUMBER TYPES AND DECLARATION
// Task: Create variables for different numeric types (integers, floats, scientific notation)
//       and use var_dump() to display their actual types and values.
// Hint: PHP supports decimal, hexadecimal (0x), octal (0), and binary (0b) integer notations.

// Your code here

$int = 10;
$float = 12.99;
$scientific = 1.2e4;
$hex = 0x23;
$octal = 023;
$binary = 0b11010100;

var_dump($int);
var_dump($float);
var_dump($scientific);
var_dump($hex);
var_dump($octal);
var_dump($binary);

echo "------------------------ \n";

// TASK 2: BASIC ARITHMETIC OPERATIONS
// Task: Create number variables and demonstrate all basic arithmetic operations:
//       addition, subtraction, multiplication, division, modulus, and exponentiation.
// Hint: Use +, -, *, /, %, and ** operators respectively.

// Your code here

$a = 10;
$b = 20;

$sum = $a + $b;
$subs = $a - $b;
$multi = $a * $b;
$div = $a / $b;
$mod = $b % $a;
$power = $b**$a;

echo $sum . "\n";
echo $subs. "\n";
echo $multi."\n";
echo $div. "\n";
echo $mod. "\n";
echo $power. "\n";

echo "------------------------ \n";

// TASK 3: ASSIGNMENT OPERATORS WITH NUMBERS
// Task: Demonstrate all arithmetic assignment operators (+=, -=, *=, /=, %=, **=).
// Hint: These operators perform an operation and assignment in one step.

// Your code here

echo $a += $b;
echo "\n";
echo $a -= $b;
echo "\n";
echo $a *= $b;
echo "\n";
echo $a /= $b;
echo "\n";
echo $a %= $b;
echo "\n";
echo $a **= $b;
echo "\n";

echo "------------------------ \n";

// TASK 4: INCREMENT AND DECREMENT
// Task: Demonstrate both prefix (++$x, --$x) and postfix ($x++, $x--) increment/decrement operators.
//       Show the difference in their behavior when used in expressions.
// Hint: Prefix changes the value before returning it; postfix returns the value first, then changes it.

// Your code here

$x = 100;
echo $x++ . "\n";
echo $x . "\n";


$y = 100;
echo $y-- . "\n";
echo $y . "\n";

$p = 100;
echo --$p . "\n";
echo $p . "\n";

$q = 100;
echo ++$q . "\n";
echo $q . "\n";

echo "------------------------ \n";

// TASK 5: COMPARISON OF NUMBERS
// Task: Compare numbers using various comparison operators (==, ===, !=, <>, !==, <, >, <=, >=, <=>)
//       and explain the results, especially the difference between == and ===.
// Hint: The === operator checks both value and type; the <=> (spaceship) operator returns -1, 0, or 1.

// Your code here

$e = 11;
$f = "11";

echo"$e == $f : ";
var_dump($e == $f) . "\n";

echo"$e === $f : ";
var_dump($e === $f) . "\n";

echo"$e != $f : ";
var_dump($e != $f) . "\n";

echo"$e <> $f : ";
var_dump($e <> $f) . "\n";

echo"$e == $f : ";
var_dump($e !== $f) . "\n";

echo"$e > $f : ";
var_dump($e > $f) . "\n";

echo"$e < $f : ";
var_dump($e < $f) . "\n";

echo"$e >= $f : ";
var_dump($e >= $f) . "\n";

echo"$e <= $f : ";
var_dump($e <= $f) . "\n";

$g = 1;
$h = 2;

echo"$g <=> $h : ";
var_dump($g <=> $h) . "\n";

echo"$g <=> $g : ";
var_dump($g <=> $g) . "\n";

echo"$h <=> $g : ";
var_dump($h <=> $g) . "\n";

echo "------------------------ \n";

// TASK 6: NUMBER PRECISION AND FLOATING-POINT ISSUES
// Task: Demonstrate floating-point precision issues in PHP with examples
//       (e.g., 0.1 + 0.2 != 0.3) and show how to handle them properly.
// Hint: Use number_format(), round(), or bcmath functions for more precise calculations.

// Your code here

$num1 = 0.1;
$num2 = 0.2;

$sum = $num1 + $num2;

if ($sum == 0.3) {
    echo "Equal to 0.3 \n";
} else {
    echo "Not equal to 0.3 \n";
    echo "So the sum is: $sum \n";
}


$sum2 = round($num1 + $num2, 1);
echo $sum2 . "\n";
if ($sum2 == 0.3) {
    echo "Now it matches 0.3\n";
}


$sum3 = $num1 + $num2;
if ($sum3 == 0.3) {
    echo "Equal to 0.3 \n"; 
} else {
    $num_for = number_format($sum3, 1);
    echo "Now equal to 0.3 after applying number format \n";
}

$sum4 = bcadd($num1 + $num2, 1);
echo "After applying bcadd is equal to 0.3 \n";

// TASK 7: FORMATTING NUMBERS
// Task: Format numbers using different methods:
//       - number_format() with various parameters
//       - printf() and sprintf() with number format specifiers
//       - money_format() (if available in your PHP version)
// Hint: number_format(number, decimals, decimal_point, thousands_separator)

// Your code here

$number = 127343.89375;

echo "number Format(default): " . number_format($number) . "\n";
echo "number Format(decimal): " . number_format($number, 2) . "\n";
echo "number Format(custom 1): " . number_format($number, 2, ',') . "\n";
echo "number Format(custom 2): " . number_format($number, 2, ',', ' ') . "\n";

//printf

printf("%.2f", $number);
echo "\n";
printf("%012.2f", $number);
echo "\n"; // "%012.2f" e 012 mane 12 ta caracter er kom hole bakigulo 0 diye puron koro

//sprintf return kore echo kore na
$formatted = sprintf("%.3f", $number);
echo $formatted . "\n";

echo "--------------------- \n";

// TASK 8: MATHEMATICAL FUNCTIONS - ROUNDING
// Task: Demonstrate these rounding functions with various examples:
//       - round() with different precisions and modes
//       - ceil() for rounding up
//       - floor() for rounding down
// Hint: round() can take a second parameter for precision and a third for mode.

// Your code here

$num1 = 4.3;
$num2 = 4.5;
$num3 = 4.7;
$num4 = -4.3;
$num5 = -4.7;

// 1️⃣ round() → সাধারন রাউন্ডিং (nearest whole number)
echo "round(4.3): " . round($num1) . "\n";      // 4
echo "round(4.5): " . round($num2) . "\n";      // 5
echo "round(4.7): " . round($num3) . "\n";      // 5

// 2️⃣ round() with precision (দশমিকের পরে কত ঘর)
echo "round(4.375, 2): " . round(4.375, 2) . "\n";  // 4.38

// 3️⃣ round() with mode
echo "round(4.5, 0, PHP_ROUND_HALF_UP): " . round(4.5, 0, PHP_ROUND_HALF_UP) . "\n";   // 5
echo "round(4.5, 0, PHP_ROUND_HALF_DOWN): " . round(4.5, 0, PHP_ROUND_HALF_DOWN) . "\n"; // 4
echo "round(4.5, 0, PHP_ROUND_HALF_EVEN): " . round(4.5, 0, PHP_ROUND_HALF_EVEN) . "\n"; // 4
echo "round(5.5, 0, PHP_ROUND_HALF_EVEN): " . round(5.5, 0, PHP_ROUND_HALF_EVEN) . "\n"; // 6

// 4️⃣ ceil() → সবসময় উপরের দিকে রাউন্ড করে
echo "ceil(4.3): " . ceil($num1) . "\n";        // 5
echo "ceil(-4.3): " . ceil($num4) . "\n";       // -4

// 5️⃣ floor() → সবসময় নিচের দিকে রাউন্ড করে
echo "floor(4.7): " . floor($num3) . "\n";      // 4
echo "floor(-4.7): " . floor($num5) . "\n";     // -5

// TASK 9: MATHEMATICAL FUNCTIONS - MIN, MAX, AND RANGES
// Task: Use min(), max(), and range() functions in various scenarios:
//       - Find min/max values in arrays
//       - Create number sequences with range()
//       - Use min/max with variable arguments
// Hint: Both min() and max() can accept arrays or variable numbers of arguments.

// Your code here

echo ("min: 3, 4, 5 is: ") . min(3,4,5). "\n";
echo ("max: 3, 4, 5 is: ") . max(3,4,5). "\n";

$numberr = [10,20,30];

echo ("Min Number is: ") . min($numberr) . "\n"; 
echo ("Max Number is: ") . max($numberr) . "\n";

$range1 = range(1, 10);
$range2 = range(0, 20, 5);

print_r($range1);
print_r($range2);

$letter_range = range('a', 'z');
print_r($letter_range);


// TASK 11: RANDOM NUMBER GENERATION
// Task: Generate random numbers using different methods:
//       - rand() and mt_rand() with and without ranges
//       - random_int() for cryptographically secure random integers
//       - lcg_value() for float between 0 and 1
// Hint: random_int() is more secure but slower than mt_rand().

// Your code here

echo "Random Number is: " . rand() . "\n";
echo "Random Number (1 - 100) is: " . rand(1,100) . "\n";

echo "mt_rand: " . mt_rand() . "\n";
echo "mt_rand with limit : " . mt_rand(1, 100) . "\n";

echo "randon_int: " . random_int(1,50) . "\n";





?>