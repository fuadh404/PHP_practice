<?php
/**
 * PHP CONDITIONS PRACTICE SHEET
 * ============================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: BASIC IF STATEMENT
// Task: Create a variable with a numeric value and write an if statement that checks
//       if the number is positive. Display an appropriate message based on the result.
// Hint: Use the simple if syntax: if (condition) { code_to_execute; }

// Your code here


// TASK 2: IF-ELSE STATEMENT
// Task: Create a variable containing a person's age and write an if-else statement
//       that checks if they are old enough to vote (18 or older).
//       Display appropriate messages for both conditions.
// Hint: Use the if-else syntax: if (condition) { code_if_true; } else { code_if_false; }

// Your code here


// TASK 3: IF-ELSEIF-ELSE CHAIN
// Task: Create a variable containing a student's score (0-100) and use an if-elseif-else chain
//       to determine and display their letter grade: A (90-100), B (80-89), C (70-79), D (60-69), F (below 60).
// Hint: Multiple conditions can be checked using elseif between if and else.

// Your code here


// TASK 4: NESTED IF STATEMENTS
// Task: Create variables for weather conditions (is_raining, temperature) and write nested if statements
//       to provide clothing recommendations based on multiple conditions.
// Hint: You can place one if statement inside another to check conditions within conditions.

// Your code here

$is_raining = true;
$temperature = 15;

if ($is_raining) {
    echo "It is raining. \n";

    if($temperature < 20) {
        echo "ware a raincoat and warm cloath.\n";
    } else {
        echo "Just carry an umbrella \n";
    }
} else {
    echo "Its not raining. \n";

    if($temperature < 20) {
        echo "ware something warm \n";
    } else {
        echo "Dress carefully \n";
    }
}



// TASK 5: LOGICAL OPERATORS IN CONDITIONS
// Task: Create variables for a username and password. Write a condition using logical operators
//       that checks if both the username is valid (not empty) AND the password is at least 8 characters.
// Hint: Use && (AND), || (OR), and ! (NOT) to combine or negate conditions.

// Your code here

$username = "john";
$password = "pass123ww";

if(!empty($username) && strlen($password) >= 8) {
    echo "Login Successfully \n";
} else {
    echo "Invalid username and password! \n";
}

// TASK 6: SWITCH STATEMENT BASICS
// Task: Create a variable containing a day of the week (as a number 1-7).
//       Use a switch statement to display the name of the day.
// Hint: switch (variable) { case value: code; break; ... default: code; }

// Your code here


$day_number = 3; // তুমি এখানে 1 থেকে 7 এর মধ্যে যেকোনো সংখ্যা দিতে পারো

switch ($day_number) {
    case 1:
        echo "Sunday\n";
        break;
    case 2:
        echo "Monday\n";
        break;
    case 3:
        echo "Tuesday\n";
        break;
    case 4:
        echo "Wednesday\n";
        break;
    case 5:
        echo "Thursday\n";
        break;
    case 6:
        echo "Friday\n";
        break;
    case 7:
        echo "Saturday\n";
        break;
    default:
        echo "Invalid day number (must be 1-7)\n";
}



// TASK 7: SWITCH WITH MULTIPLE CASES
// Task: Create a variable containing a month (as a number 1-12).
//       Use a switch statement to determine and display the season.
//       (Dec-Feb: Winter, Mar-May: Spring, Jun-Aug: Summer, Sep-Nov: Fall)
// Hint: You can stack multiple 'case' statements without 'break' to handle multiple values the same way.

// Your code here


$month = 12; // তুমি এখানে 1-12 এর মধ্যে যেকোনো মান দিতে পারো

switch ($month) {
    case 12:
    case 1:
    case 2:
        echo "❄️ Season: Winter\n";
        break;

    case 3:
    case 4:
    case 5:
        echo "🌸 Season: Spring\n";
        break;

    case 6:
    case 7:
    case 8:
        echo "☀️ Season: Summer\n";
        break;

    case 9:
    case 10:
    case 11:
        echo "🍂 Season: Fall\n";
        break;

    default:
        echo "⚠️ Invalid month number! Please enter 1–12.\n";
}


// TASK 13: EMPTY AND ISSET CHECKS
// Task: Create variables with different states (set, unset, null, empty string, zero, etc.).
//       Write conditions using empty(), isset(), and is_null() to demonstrate their differences.
// Hint: empty() checks if a variable is empty (0, "", null, false, etc.), isset() checks if a variable is declared and not null.

// Your code here

// বিভিন্ন রকমের ভ্যারিয়েবল তৈরি করছি
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "Hello";
$f = [];      // empty array

// unset variable
// $g is never declared

echo "----- isset() -----\n";
var_dump(isset($a));  // ✅ true (set and not null)
var_dump(isset($b));  // ✅ true
var_dump(isset($c));  // ❌ false (set but null)
var_dump(isset($g));  // ❌ false (never declared)

echo "\n----- empty() -----\n";
var_dump(empty($a));  // ✅ true (0 is considered empty)
var_dump(empty($b));  // ✅ true ("" is empty)
var_dump(empty($c));  // ✅ true (null is empty)
var_dump(empty($d));  // ✅ true (false is empty)
var_dump(empty($e));  // ❌ false ("Hello" is not empty)
var_dump(empty($f));  // ✅ true (empty array)
var_dump(empty($g));  // ✅ true (even undeclared is empty)

echo "\n----- is_null() -----\n";
var_dump(is_null($a));  // ❌ false
var_dump(is_null($b));  // ❌ false
var_dump(is_null($c));  // ✅ true
// var_dump(is_null($g)); // ⚠️ Error: undefined variable (so we won't call this)




// TASK 15: CONDITIONAL ASSIGNMENTS
// Task: Create different scenarios where you need to conditionally assign values to variables.
//       Implement these using if-else statements, ternary operators, null coalescing, and other approaches.
//       Compare the readability and effectiveness of each approach.
// Hint: Different conditional assignment techniques are appropriate for different situations.

// Your code here

$age = 20;
$status = "";

if ($age >= 18) {
    $status = "Adult";
} else {
    $status = "Minor";
}

echo "Status (if-else): $status\n";


echo $stat = ($age >= 18) ? "Adult" : "Minor" . "\n";


echo "------------------ \n";

$username = $username ?? "Guest"; // যদি না পাওয়া যায়, তাহলে "Guest"

echo "Hello, $username!\n";

echo "------------------ \n";

$input = "";
$output = $input ?: "Default Value"; // যদি $input ফাঁকা হয়, তাহলে "Default Value"

echo "Output (shorthand): $output\n";





// TASK 16: ERROR HANDLING CONDITIONS
// Task: Write a script that performs operations that might produce errors (file operations, division).
//       Use conditions to check for potential error conditions before they occur
//       and handle them gracefully.
// Hint: Check if a file exists before opening it, check for zero before dividing by a variable.

// Your code here


?>