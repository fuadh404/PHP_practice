<?php
/**
 * PHP FUNCTIONS PRACTICE SHEET
 * ===========================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: BASIC FUNCTION DECLARATION AND CALLING
// Task: Create a simple function that displays a greeting message.
//       Then call this function multiple times with different parameters.
// Hint: function functionName(parameters) { code_to_execute; }

// Your code here

function greetings() {
    return "Hello";
}

echo greetings() . ", How are you \n";

echo greetings() . ". what about you? \n";

echo "----------------------------- \n";

function greet($name) {
    return "Hello, $name";
}

echo greet("Alpine") . "\n";


// TASK 2: FUNCTION PARAMETERS AND DEFAULT VALUES
// Task: Create a function that calculates the total price of items, including tax.
//       Make the tax rate a parameter with a default value of 8.25%.
// Hint: function calculateTotal($price, $taxRate = 0.0825) { ... }

// Your code here

function calculateTotal($price, $taxRate = 0.0825) {
    $total = $price + ($price * $taxRate);
    return round($total, 2);
}

echo "Total (default tax): " . calculateTotal(100) . "\n";

echo "Total (custom tax): " . calculateTotal(100, 0.10) . "\n";


// TASK 3: RETURN VALUES
// Task: Write a function that calculates the area of a rectangle.
//       The function should accept width and height parameters and return the calculated area.
// Hint: Use the 'return' keyword to send a value back from the function.

// Your code here

function area($width, $height) {
    return $width*$height;
}

echo "Area: " . area(10, 20) . "\n";


// TASK 4: MULTIPLE RETURN VALUES USING ARRAYS
// Task: Create a function that calculates statistical values (min, max, average) from an array of numbers.
//       Return all three values as an array or associative array.
// Hint: You can return multiple values by putting them in an array: return ['min' => $min, 'max' => $max, 'avg' => $avg];

// Your code here

function calculateStates($numbers) {
    $min = min($numbers);
    $max  = max($numbers);
    $avg = array_sum($numbers) / count($numbers);

    return [
        'min' => $min,
        'max' => $max,
        'avg' => $avg
    ];
}

$data = [23, 12, 36, 4, 5];

$stats = calculateStates($data);

echo "Minimum: {$stats['min']}\n";
echo "Minimum: {$stats['max']}\n";
echo "Minimum: {$stats['avg']}\n";

echo "----------------------------- \n";

// TASK 5: VARIABLE SCOPE
// Task: Demonstrate variable scope by creating:
//       1. A function that tries to access a variable defined outside the function
//       2. A function that defines a variable inside and tries to access it after the function call
//       3. A function that properly uses global variables
// Hint: Variables defined inside functions are local by default. Use the 'global' keyword to access global variables.

// Your code here

//function er bairer variable vitore kaj kore na

/*$country = "Bangladesh";

function visit() {
    return "I will visit to $country";
}

echo visit(); */


function visits() {
    $country = "Malaysia";
    return "I will visit $country \n";
}

echo visits();

// echo "I will visit $country \n";  //eta kaj korbe na karone ay vaiable ta function er vitore call kora


//function er bairer variable use korte hobe function er vitor global variable use korte hobe
$country = "Bangladesh";

function visit() {
    global $country;
    return "I will visit to $country";
}

echo visit(); 


?>