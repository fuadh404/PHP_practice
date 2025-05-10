<?php
/**
 * PHP ARRAYS PRACTICE SHEET
 * ========================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: ARRAY CREATION
// Task: Create arrays using different methods:
//       1. Using the array() function
//       2. Using the short array syntax []
//       3. Creating an array with a specific range of numbers
//       4. Creating an array by splitting a string
// Hint: range() and explode() can help with methods 3 and 4.

// Your code here

$fruits = array("Apple", "Banana", "Mango");

print_r($fruits);


$cars = ["BMW", "Corolla", "Tesla"];
print_r($cars);


$numbers = range(1, 10);

print_r($numbers);

$sentence = "I love programming in PHP";
$words = explode(" ", $sentence);
print_r($words);


// TASK 2: INDEXED ARRAYS
// Task: Create an indexed array of your favorite books.
//       Access and modify elements using their index.
//       Add new elements to the end and to specific positions.
// Hint: Use $array[] to add to the end, and $array[index] = value to add at a specific position.

// Your code here

$books = ["Moner Shokti", "Do what you are", "Rich Dad, Poor Dad"];

echo "My favourite book is: $books[0] \n";

$books[1] = "1 minit rules";

echo $books[1];

$books[] = "Dopamin Detox";

print_r($books);

$books[10] = "positive Thinking";

print_r($books);




// TASK 3: ASSOCIATIVE ARRAYS
// Task: Create an associative array that represents a person (name, age, email, etc.).
//       Access and modify values using their keys.
//       Add new key-value pairs to the array.
// Hint: Use $array['key'] = value to add or modify key-value pairs.

// Your code here

$person = [
    "name" => "John Doe",
    "age" => 25,
    "email" => "john@gmail.com",
];

echo "Name: " . $person["name"] . "\n";
echo "Age: " . $person["age"] . "\n";
echo "Email: " . $person["email"] . "\n";

$person["age"] = 26;

$person["country"] = "Bangladesh";
$person["Occupation"] = "Developer";

print_r($person);



// TASK 4: MULTIDIMENSIONAL ARRAYS
// Task: Create a multidimensional array that represents:
//       1. A school with different classes
//       2. Each class with multiple students
//       3. Each student with name, grades, and attendance
//       Access and modify deeply nested values.
// Hint: Use $array[index1][index2][index3] for accessing nested elements.

// Your code here

$school_mgmt = [

    "Class 5" => 
    [
        [
            "name" => "Alason",
            "grades" => [90, 92, 95],
            "attendance" => 92
        ],
        [
            "name" => "Burgers",
            "grades" => [88, 92, 98],
            "attendance" => 87
        ]   
    ],

    "class 6" =>
    [
        [
            "name" => "Kika",
            "grades" => [71, 76, 79],
            "attendance" => 78
        ],
        [
            "name" => "Kim",
            "grades" => [74, 82, 87],
            "attendance" => 82
        ]
    ]
        ];

echo "First Student of Class 5: " . $school_mgmt["Class 5"][0]["name"];

$school_mgmt ["class 6"][0]["attendance"] = 100;

$school_mgmt["Class 6"][] = [
    "name" => "Eva",
    "grades" => [80, 85, 82],
    "attendance" => 90
];

print_r($school_mgmt);

echo "---------------------------- \n";

// TASK 5: ARRAY ITERATION
// Task: Demonstrate different ways to iterate through arrays:
//       1. Using for loops with indices
//       2. Using foreach loops
//       3. Using foreach with key => value syntax
//       4. Using array_walk()
// Hint: foreach ($array as $key => $value) gives you both keys and values.

// Your code here

$gadgets = ["smartwatch", "mouse", "mechanical keyboard"];

for ($z = 0; $z < count($gadgets); $z++) {
    echo "Index $z: $gadgets[$z] \n";
};

foreach ($gadgets as $gadget) {
    echo "$gadget \n";
}


foreach ($gadgets as $index => $gadget) {
    echo "$index: $gadget \n";
}


array_walk($gadgets, function($value, $key) {
    echo "$key: $value \n";
});
// TASK 6: ARRAY FUNCTIONS - ADDING AND REMOVING ELEMENTS
// Task: Demonstrate these array operations:
//       1. Adding elements to the beginning (array_unshift)
//       2. Adding elements to the end (array_push)
//       3. Removing elements from the beginning (array_shift)
//       4. Removing elements from the end (array_pop)
//       5. Removing elements by index or key (unset)
// Hint: Many of these functions modify the original array and return the affected elements.

// Your code here

$company = ["Google", "Microsoft", "Adobe"];

array_unshift($company, "Meta");

print_r($company);

array_push($company, "Amazon");

print_r($company);

array_shift($company);

array_pop($company);

unset($company[1]);

print_r($company);


// TASK 7: ARRAY FUNCTIONS - SLICING AND SPLICING
// Task: Create an array and demonstrate:
//       1. Extracting a portion with array_slice()
//       2. Removing and replacing elements with array_splice()
// Hint: array_slice() doesn't modify the original array; array_splice() does.

// Your code here

$colors = ["red", "green", "blue", "yellow", "purple", "orange"];

// 1️⃣ array_slice(): index 1 থেকে 3 টা মান নিই (green, blue, yellow)
$sliced = array_slice($colors, 1, 3);
echo "Sliced Portion:\n";
print_r($sliced);

echo "Original array after slice:\n";
print_r($colors);

array_splice($colors, 2, 2, ["black", "white"]);
echo "Array after splice (replaced blue & yellow):\n";
print_r($colors);


// TASK 8: ARRAY FUNCTIONS - MERGING AND COMBINING
// Task: Create multiple arrays and demonstrate:
//       1. Merging arrays with array_merge()
//       2. Combining arrays with the + operator
//       3. Combining arrays with array_combine()
//       4. Appending arrays with array_push()
// Hint: Each method handles duplicate keys differently.

// Your code here

$fruits1 = ["apple", "banana"];
$fruits2 = ["mango", "orange"];

$merged = array_merge($fruits1, $fruits2);
print_r($merged);

$a1 = ["a" => 1, "b" => 2];
$a2 = ["b" => 3, "c" => 4];

$combined = $a1 + $a2;  // left-side value retains if key duplicates
print_r($combined);

$keys = ["name", "age", "email"];
$values = ["Alice", 25, "alice@example.com"];

$person = array_combine($keys, $values);
print_r($person);

$items = ["pen", "pencil"];
array_push($items, "eraser", "sharpener");

print_r($items);


// TASK 9: ARRAY FUNCTIONS - KEYS AND VALUES
// Task: Create an associative array and demonstrate:
//       1. Getting all keys with array_keys()
//       2. Getting all values with array_values()
//       3. Checking if a key exists with array_key_exists()
//       4. Checking if a value exists with in_array()
//       5. Finding a key by value with array_search()
// Hint: Some of these functions have optional parameters to modify their behavior.

// Your code here

$user = [
    "name" => "Alice",
    "email" => "alice@example.com",
    "age" => 25,
    "country" => "Bangladesh"
];

$keys = array_keys($user);
echo "All Keys:\n";
print_r($keys);

$values = array_values($user);
echo "All Values:\n";
print_r($values);

if (array_key_exists("email", $user)) {
    echo "Email key exists! \n"; 
};

if (in_array("Bangladesh", $user)) {
    echo "✅ Value 'Bangladesh' found in the array.\n";
}


$key = array_search("Alice", $user);

if ($key !== false) {
    echo "The key of value 'Alice' is exists \n";
}

// TASK 10: ARRAY FUNCTIONS - FILTERING AND MAPPING
// Task: Create an array of numbers and demonstrate:
//       1. Filtering elements based on a condition with array_filter()
//       2. Transforming elements with array_map()
//       3. Reducing an array to a single value with array_reduce()
// Hint: These functions often use callbacks or anonymous functions.

// Your code here

$numbers = [5, 12, 8, 21, 3, 18, 7];

$filtered = array_filter($numbers, function ($num) {
    return $num > 10;
});

print_r($filtered);

$mapped = array_map(function($num) {
    return $num * 2;
}, $numbers);

print_r($mapped);

$sum = array_reduce($numbers, function($carry, $num){
    return $carry + $num;
}, 0);

echo $sum;





// TASK 11: ARRAY FUNCTIONS - SORTING
// Task: Create arrays and demonstrate different sorting methods:
//       1. Basic sorting with sort(), rsort()
//       2. Associative array sorting with asort(), arsort(), ksort(), krsort()
//       3. Custom sorting with usort(), uasort(), uksort()
//       4. Natural order sorting with natsort(), natcasesort()
// Hint: Custom sorting functions require a comparison callback function.

// Your code here

$numbers = [12, 5, 8, 21, 3];

sort($numbers);
echo "Sorted (sort): ";
print_r($numbers);

rsort($numbers); // Descending
echo "Reverse Sorted (rsort):\n";
print_r($numbers);

$person = [
    "name" => "Alice",
    "age" => 25,
    "email" => "alice@example.com"
];


asort($person); // Value-based ascending
echo "Associative sort by value (asort):\n";
print_r($person);

arsort($person); // Value-based descending
echo "Associative reverse sort by value (arsort):\n";
print_r($person);


ksort($person); // Key-based ascending
echo "Associative sort by key (ksort):\n";
print_r($person);


krsort($person); // Key-based descending
echo "Associative reverse sort by key (krsort):\n";
print_r($person);


$marks = [65, 90, 40, 75];

usort($marks, function($a, $b) {
    return $b <=> $a; // descending
});

echo "Custom sorted marks (usort):\n";
print_r($marks);

$files = ["img12.png", "img10.png", "img2.png", "img1.png"];

natsort($files); // Sorts in natural order
echo "Natural order (natsort):\n";
print_r($files);


natcasesort($files); // Case-insensitive natural order
echo "Natural order (case-insensitive):\n";
print_r($files);


// TASK 13: ARRAY FUNCTIONS - COUNTING AND STATISTICS
// Task: Create arrays and demonstrate:
//       1. Counting elements with count() and sizeof()
//       2. Counting values with array_count_values()
//       3. Getting the sum of elements with array_sum()
//       4. Getting the product of elements with array_product()
// Hint: array_count_values() returns an associative array with values as keys and counts as values.

// Your code here


$numbers = [2, 3, 5, 2, 3, 3, 4];

// 1️⃣ Counting elements → count() / sizeof()
echo "Total elements (count): " . count($numbers) . "\n";
echo "Total elements (sizeof): " . sizeof($numbers) . "\n";

$counts = array_count_values($numbers);
echo "Count of each value:\n";
print_r($counts);

$sum = array_sum($numbers);
echo "Sum of all elements: $sum\n";

$product = array_product($numbers);
echo "Product of all elements: $product\n";

?>