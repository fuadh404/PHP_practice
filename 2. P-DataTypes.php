<?php
/**
 * PHP DATA TYPES PRACTICE SHEET
 * =============================
 * 
 * Created for: MeSilicon7
 * Date: 2025-05-04
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to see your results
 */

// TASK 1: SCALAR TYPES - INTEGERS
// Task: Create variables using different ways to represent integers (decimal, hexadecimal, octal, binary).
//       Then display them and verify they're all integers using var_dump().
// Hint: Use 0x prefix for hexadecimal, 0 prefix for octal, and 0b prefix for binary.

// Your code here

$decimal = 100;
$hexadecimal = 0x24;
$octal = 0112;
$binary = 0b1011101;

var_dump($decimal);
var_dump($hexadecimal);
var_dump($octal);
var_dump($binary);


// TASK 2: SCALAR TYPES - FLOATING POINT NUMBERS
// Task: Create variables with floating point numbers using scientific notation and regular notation.
//       Then demonstrate a common floating point precision issue with a calculation.
// Hint: Use e notation for scientific representation (e.g., 1.2e3)

// Your code here

$regular = 12.34;
$scientific = 1.2e3;

$sum = 1.2 + 3.4;

echo "Regular Float: " . $regular . '\n';
echo "Scientific Float: " . $scientific . '\n';
echo "1.2 + 3.4 = " . $sum . '\n';

var_dump($sum);

echo "------------------------ \n";


// TASK 3: SCALAR TYPES - BOOLEAN
// Task: Create boolean variables with both true and false values.
//       Then demonstrate which non-boolean values evaluate to true or false when converted to boolean.
// Hint: 0, empty string, null, and empty array evaluate to false; almost everything else evaluates to true.

// Your code here

$boolTrue = true;
$boolFalse = false;

$zero = 0;
$emptyString = "";
$nullValues = null;
$emptyArray = [];
$nonEmptyString = "Hello";
$positiveNumber = 10;
$negativeNumber = -4;
$nonEmptyArray = [1,2,3];

var_dump($boolTrue);
var_dump($boolFalse);

var_dump((bool)$zero);
var_dump((bool)$emptyString);
var_dump((bool)$nullValues);
var_dump((bool)$emptyArray);
var_dump((bool)$nonEmptyString);
var_dump((bool)$positiveNumber);
var_dump((bool)$negativeNumber);
var_dump((bool)$nonEmptyArray);


echo "------------------------ \n";

// TASK 4: SCALAR TYPES - STRING
// Task: Create strings using different quoting methods (single quotes, double quotes, heredoc, nowdoc).
//       Demonstrate the differences between them regarding variable interpolation.
// Hint: Heredoc uses <<< identifier and nowdoc uses <<<'identifier'

// Your code here

$name = "Alpine Swift";
$singleQuote = 'Hello, $name'; //single quote e variable detect kore na
$doubleQuote = "Hello, $name"; 

$heredoc = <<<TEXT
This is Heredoc.
Hello, $name!
TEXT;

//nowdoc ew variable detect kore na.. 
$nowdoc = <<<'TEXT'
This is nowdoc.
Hello, $name!
TEXT;

echo $singleQuote . "\n";
echo $doubleQuote . "\n";
echo $heredoc . "\n";
echo $nowdoc . "\n";

echo "------------------------ \n";

// TASK 5: COMPOUND TYPES - INDEXED ARRAYS
// Task: Create an indexed array of your favorite foods and loop through it to display each item.
// Hint: Use array() or [] syntax, and access elements by their index number.

// Your code here

$fav_food = ["biriany", "meat", "yoghurt"];

$number = count($fav_food);

for($i = 0; $i < $number; $i++) {
    echo $fav_food[$i]."\n";
}

echo "------------------------ \n";

// TASK 6: COMPOUND TYPES - ASSOCIATIVE ARRAYS
// Task: Create an associative array representing a person's details (name, age, job, etc.)
//       Then loop through it to display both keys and values.
// Hint: Associative arrays use custom keys instead of numeric indexes.

// Your code here

$ass_arr = [

    "Person_1" => [
        "name" => "john",
        "age" => 21,
        "job" => "student"
    ], 
    "person_2" => [
        "name" => "Doe",
        "age" => 28,
        "job" => "Software Engineer"
    ]

    ];

    foreach($ass_arr as $key => $info){
        echo "$key: \n \n" ;
        foreach($info as $k => $i) {
            echo "$k is $i" . "\n";
        }

        echo "\n \n";
    }
   


// TASK 7: COMPOUND TYPES - MULTIDIMENSIONAL ARRAYS
// Task: Create a multidimensional array representing a small classroom with students and their scores in different subjects.
//       Access and display specific values from the array.
// Hint: Multidimensional arrays are arrays within arrays.

// Your code here


// TASK 8: COMPOUND TYPES - OBJECTS
// Task: Create a simple class with properties and methods, then instantiate an object from it.
//       Display the object properties and call its methods.
// Hint: Use class, public properties, and methods to define object structure.

// Your code here


// TASK 9: SPECIAL TYPES - NULL
// Task: Demonstrate the difference between null, undefined variable, and empty string.
//       Use isset() and empty() functions to check their status.
// Hint: isset() checks if a variable is declared and not null, empty() checks if a value is empty-like.

// Your code here


// TASK 10: SPECIAL TYPES - RESOURCE
// Task: Open a file as a resource, and demonstrate how to check if a variable is a resource type.
// Hint: Use fopen() to create a resource and get_resource_type() to check its type.

// Your code here


// TASK 11: TYPE JUGGLING AND CONVERSION
// Task: Demonstrate PHP's automatic type juggling with examples of different types in operations.
//       Then show explicit type conversion using casting.
// Hint: PHP automatically converts between types in operations, but you can also explicitly cast using (type).

// Your code here


// TASK 12: TYPE CHECKING
// Task: Write code that demonstrates different ways to check a variable's type (is_int, is_string, gettype, instanceof).
// Hint: PHP provides various functions to check variable types.

// Your code here


// BONUS CHALLENGE: WORKING WITH MIXED TYPES
// Task: Create a function that accepts any type of data and returns information about what type it is,
//       its length or size if applicable, and other relevant properties depending on the type.
// Hint: Use conditional statements with type checking functions to handle different types differently.

// Your code here

?>