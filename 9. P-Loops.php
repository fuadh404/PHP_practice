<?php
/**
 * PHP LOOPS PRACTICE SHEET
 * =======================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: BASIC FOR LOOP
// Task: Use a for loop to display all numbers from 1 to 10, along with their squares.
//       Format the output to look like "Number: X, Square: Y"
// Hint: for (initialization; condition; increment/decrement) { code_to_execute; }

// Your code here

for ($i = 0; $i < 9; $i++) {
    $suqare = $i * $i;
    echo "Number: $i, Square: $suqare \n";
}


// TASK 2: FOR LOOP WITH STEP VALUE
// Task: Use a for loop to display all even numbers between 1 and 20.
//       Then modify it to display all odd numbers between 1 and 20.
// Hint: You can adjust the initialization and increment expressions to start at different values and skip numbers.

// Your code here

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    } 
}

echo "------------------- \n";

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 1) {
        echo $i . "\n";
    } 
}

echo "------------------- \n";

echo "Chatgpt's answer: \n";


// 🔹 Even numbers from 1 to 20
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "\n";
}

echo "------------------- \n";

// 🔸 Odd numbers from 1 to 20
for ($i = 1; $i <= 20; $i += 2) {
    echo $i . "\n";
}


// TASK 3: NESTED FOR LOOPS
// Task: Create a multiplication table for numbers 1-5 using nested for loops.
//       Format the output in a readable table format.
// Hint: You need one loop inside another, where the outer loop represents rows and the inner loop represents columns.

// Your code here


for ($a = 1; $a <= 5; $a++) {
    for($b = 1; $b <= 5; $b++){
        $result = $a * $b;
        echo "$a * $b = $result \t";
    }
    echo "\n";
}

// TASK 4: BASIC WHILE LOOP
// Task: Create a counter variable and use a while loop to display and increment it
//       until a certain condition is met (e.g., counter reaches 10).
// Hint: while (condition) { code_to_execute; increment_counter; }

// Your code here

$counter = 1;

while($counter <= 10) {
    echo "Counter = $counter \n";
    $counter++;
}


// TASK 5: DO-WHILE LOOP
// Task: Use a do-while loop to implement a simple number guessing game where
//       the computer picks a number and gives "higher" or "lower" hints to the user.
//       (Simulate user input by setting a variable for each iteration)
// Hint: do { code_to_execute; } while (condition); -- code always executes at least once.

// Your code here

$i = 10;

do {
    echo "Do-While: $i\n";
} while($i < 5);

echo "-------------- \n";

$target = 7;  // কম্পিউটার যেটা ধরে রেখেছে
$guess = 0;   // শুরুতে user ভুল guess করবে
$attempt = 1; // কতো বার চেষ্টা করছে

// Simulated guesses (তুমি চাইলে একে random করে ফেলতে পারো)
$guesses = [3, 5, 8, 6, 7];  // শেষেরটা সঠিক

$index = 0;

do {
    $guess = $guesses[$index];
    echo "Attempt $attempt: You guessed $guess — ";

    if ($guess < $target) {
        echo "Higher!\n";
    } elseif ($guess > $target) {
        echo "Lower!\n";
    } else {
        echo "🎉 Correct!\n";
    }

    $index++;
    $attempt++;

} while ($guess != $target);



// TASK 6: FOREACH LOOP WITH INDEXED ARRAYS
// Task: Create an indexed array of colors and use foreach to display each color
//       along with its position in the array.
// Hint: foreach ($array as $value) { code_to_execute; }

// Your code here

$colors = ["Red", "Green", "Blue"];

foreach ($colors as $index => $color) {
    echo "Position: $index, Color: $color \n";
}


// TASK 7: FOREACH LOOP WITH ASSOCIATIVE ARRAYS
// Task: Create an associative array representing a person (name, age, job, etc.)
//       and use foreach to display each property and its value.
// Hint: foreach ($array as $key => $value) { code_to_execute; }

// Your code here

$person = [
    "name" => "john doe",
    "age" => 20,
    "job" => "Software Engineer",
    "city" => "Dhaka"
];

foreach($person as $key => $value) {
    echo ucfirst($key) . ": $value \n";
}


// TASK 8: FOREACH WITH NESTED ARRAYS
// Task: Create a multidimensional array (e.g., students with courses and grades)
//       and use nested foreach loops to display all the data in a structured format.
// Hint: You'll need a foreach inside another foreach to iterate through the nested structures.

// Your code here


$students = [
    "Alice" => [
        "Bangla" => 21,
        "English" => 22,
        "Math" => 23
    ],

    "Bob" => [
        "Bangla" => 23,
        "English" => 22,
        "Math" => 21
    ],

    "Cat" => [
        "Bangla" => 21,
        "English" => 24,
        "Math" => 23
    ]

    ];


    foreach ($students as $name => $subjects) {
        echo"Student: $name \n";
        foreach ($subjects as $subject => $marks) {
            echo "$subject: $marks \n";
        }

        echo "\n";
    }


// TASK 9: LOOP CONTROL - BREAK
// Task: Create a loop that's supposed to run 100 times, but use the break statement
//       to exit the loop when a specific condition is met (e.g., a random number is generated).
// Hint: break; immediately exits the loop it's inside.

// Your code here

for($c = 1; $c <= 100; $c++) {
    $random = rand(1, 10);
    echo "Attempt $c: Generated $random\n";

    if($random === 7) {
        echo "Luckry Number 7 found! Break \n";
        break;
    }
}


// TASK 10: LOOP CONTROL - CONTINUE
// Task: Create a loop that iterates from 1 to 20, but use the continue statement
//       to skip certain iterations based on a condition (e.g., skip multiples of 3).
// Hint: continue; skips the rest of the current iteration and jumps to the next one.

// Your code here

for($d = 0; $d < 100; $d++) {
    if($d % 3 == 0) {
        continue;
    }
    echo "Number = $d \n";
}

// TASK 11: LABELED BREAKS AND CONTINUES
// Task: Create nested loops and use labeled break/continue to control the outer loop
//       from within the inner loop.
// Hint: break 2; or continue 2; affects the loop that is 2 levels up.

// Your code here

outerloop:
    for ($row = 0; $row <= 3; $row++) {
        for($col = 0; $col <= 5; $col++) {
            echo "Row = $row, Col = $col \n";
        
            if($col == 3) {
                echo "Found Col-3. Breaking out the both loop \n";
                break 2; // break 1 = inner loop break and break 2 = both loop break
            }
        }
    }

// TASK 12: INFINITE LOOPS WITH CONDITIONAL BREAKS
// Task: Create an intentional infinite loop (while(true) or for(;;)) and use conditional
//       break statements to exit the loop when appropriate.
//       Demonstrate a practical use case for this pattern.
// Hint: Infinite loops can be useful when the exit condition is complex or unknown in advance.

// Your code here


$attempt = 1;

while (true) {
    $guess = rand(1, 10);
    echo "Attempt $attempt: Guessed $guess\n";

    if ($guess === 7) {
        echo "🎉 Lucky number 7 found! Exiting loop.\n";
        break;
    }

    $attempt++;
}



?>