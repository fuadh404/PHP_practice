<?php
/**
 * PHP VARIABLE PRACTICE SHEET
 * ==========================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Try to complete the task before looking at the solution
 * 3. Run this file to see your results
 */

// TASK 1: BASIC VARIABLE DECLARATION
// Task: Create a variable called $name and assign your name to it. Then display it using echo.
// Hint: Variables in PHP start with $ symbol and are case-sensitive.

// Your code here

$name = "Fuad Hasan";
echo $name . "\n";

echo "------------------------ \n";

// TASK 2: DIFFERENT VARIABLE TYPES
// Task: Create variables of different types (string, integer, float, boolean) and display them.
// Hint: PHP automatically determines the data type based on the value you assign.

// Your code here

$str = "Alpine Swift";
$int = 100;
$float = 12.29;
$bool = true;


echo $str."\n", $int."\n", $float."\n", $bool."\n";

echo "------------------------ \n";

// TASK 3: DATE AND TIME VARIABLES
// Task: Create variables to store the current date and time in different formats.
// Hint: Use the date() function with different format parameters.

// Your code here

$date = date("Y-m-d");
echo $date."\n";

$time = date("H:i:s");
echo $time."\n";

$fullDateTime = date("l, F j, Y - h:i A");
echo $fullDateTime."\n";

$MonthYear = date("F Y");
echo $MonthYear. "\n";

echo "------------------------ \n";

// TASK 4: VARIABLE OPERATIONS
// Task: Create two number variables and perform basic math operations (addition, subtraction, multiplication, division).
// Hint: You can use +, -, *, / operators with numeric variables.

// Your code here

$num1 = 11;
$num2 = 9;

$add = $num1 + $num2;
$subs = $num1 - $num2;
$multi = $num1 * $num2;
$div = $num1 / $num2;

echo $add . "\n", $subs . "\n", $multi . "\n", $div . "\n";

echo "------------------------ \n";

// TASK 5: STRING CONCATENATION
// Task: Create variables for first name and last name, then concatenate them to create a full name.
// Hint: You can use the dot (.) operator to join strings together.

// Your code here

$firstName = "Alpine";
$lastName = "Swift";

echo $firstName . " " . $lastName . "\n";

echo "------------------------ \n";

// TASK 6: USER INFORMATION VARIABLES
// Task: Create variables to store user information like username, login time, and status.
// Hint: Variables can store any kind of data, including predefined values.

// Your code here

$username = "user 1";
$loginTime = date("Y:m:d H:i:s");
$isActive = true;

echo "Username:" . $username . "\n";
echo "Login Time:" . $loginTime . "\n";
echo "User Active:" . $isActive . "\n";

echo "------------------------ \n";

// TASK 8: VARIABLE REASSIGNMENT
// Task: Create a variable with an initial value, then change it and display both values.
// Hint: Variables can be reassigned new values at any time.

// Your code here

$var = "PHP";
echo $var . "\n";

$var = "Laravel";
echo $var . "\n";

echo "------------------------ \n";


// TASK 9: USING VARIABLES IN CALCULATIONS
// Task: Calculate the area of a rectangle using length and width variables.
// Hint: Area of a rectangle = length × width

// Your code here

$length = 10;
$width = 20;

echo $area = $length * $width . "\n";

echo "------------------------ \n";

// TASK 10: VARIABLE TYPE CONVERSION
// Task: Convert between different variable types (string to number, number to string, etc.).
// Hint: PHP can automatically convert types in many cases, but you can also use explicit conversion with (int), (string), etc.

// Your code here

$srtNumber = "123";
$realNumber = 12.34;
$boolValue = true;

$toInt = (int)$srtNumber;
$toStr = (string)$realNumber;
$toBool = (bool)$srtNumber;
$toFloat = (float)"78.98";
$numToStr = (string)1000;

echo "String To Integer: " . $toInt . "\n";
echo "float To Integer: " . $toStr . "\n";
echo "String To Boolean: " . $toBool . "\n";
echo "String To Float: " . $toFloat . "\n";
echo "Integer To Srting: " . $numToStr . "\n";

echo "------------------------ \n";

// TASK 11: VARIABLE SCOPE
// Task: Create a variable outside a function and try to access it inside the function.
// Hint: By default, variables declared outside functions cannot be accessed inside functions unless you use the 'global' keyword or pass them as parameters.

// Your code here

$message = "Hello from Outside";

function showMsg() {
    global $message;
    echo $message . "\n";
}

showMsg();

echo "------------------------ \n";

//Another Way

function showMessage($msg) {
    echo $msg . "\n";
}

showMessage($message);

echo "------------------------ \n";

// TASK 12: CONSTANTS
// Task: Create a constant and try to change its value.
// Hint: Constants are like variables except their values cannot be changed after they are defined. Use the define() function or const keyword.

// Your code here

define("BRANDNAME", "Tesla");
echo BRANDNAME . "\n";

/* define("BRANDNAME", "SpaceX");
echo BRANDNAME . "\n"; */

echo "------------------------ \n";

// BONUS CHALLENGE: FUN WITH VARIABLES
// Task: Create a 'Mad Libs' style game using variables for nouns, verbs, adjectives, etc.
// Hint: Create variables for different parts of speech and use them in a story template.

// Your code here

$noun1 = "dragon";
$noun2 = "castle";
$verb1 = "fly";
$verb2 = "scream";
$adjective1 = "brave";
$adjective2 = "terrifying";
$adverb = "quickly";

$story = "Once upon a time, a $adjective1 $noun1 decided to $verb1 accross the sky. ";
$story .= "It landed near a $adjective2 $noun2 and started to $verb2 $adverb. ";
$story .= "Everyone in the village was amazed  by the creature's courage.";

echo $story;

?>