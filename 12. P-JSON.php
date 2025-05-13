<?php
/**
 * PHP JSON PRACTICE SHEET
 * ======================
 *
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: BASIC JSON ENCODING
// Task: Create different PHP variables (string, number, boolean, array) and convert them to JSON format using json_encode().
//       Display the resulting JSON strings and explain their format.
// Hint: json_encode() converts PHP values into their JSON representation.

// Your code here

$name = "Alpine";
$age = 22;
$isStudent = "true";
$skills = ["PHP", "HTML", "CSS"];

$jsonName = json_encode($name);
$jsonAge = json_encode($age);
$jsonIsStudent = json_encode($isStudent);
$jsonSkills = json_encode($skills);

echo "JSON (String): $jsonName \n";
echo "JSON (Number): $jsonAge \n";
echo "JSON (Boolean): $jsonIsStudent \n";
echo "JSON (Array): $jsonSkills \n";

echo "---------------- \n";


// TASK 2: BASIC JSON DECODING
// Task: Create several JSON strings representing different data types and use json_decode() to convert them back to PHP values.
//       Demonstrate both object and array decoding options.
// Hint: json_decode() with second parameter as TRUE returns arrays instead of objects.

// Your code here

$jsonString1 = '"Shawn"';
$jsonString2 = '22'; 
$jsonString3 = 'true';   
$jsonString4 = '["PHP", "HTML", "CSS"]'; 
$jsonString5 = '{"name": "Shawn", "age": 22}';

$value1 = json_decode($jsonString1);
$value2 = json_decode($jsonString2);
$value3 = json_decode($jsonString3);
$value4_array = json_decode($jsonString4, true);
$value5_object = json_decode($jsonString5); 
$value5_array = json_decode($jsonString5, true);

echo "String: $value1\n";
echo "Number: $value2\n";

echo "Boolean: "; var_export($value3); echo "\n";

echo "Array (assoc): ";
print_r($value4_array);

echo "Object: ";
print_r($value5_object);


echo "Array: ";
print_r($value5_array);


// TASK 3: HANDLING COMPLEX DATA STRUCTURES
// Task: Create a complex nested PHP array/object with multiple levels and data types.
//       Convert it to JSON and back to PHP, showing that the structure is preserved.
// Hint: JSON can represent nested arrays and objects, maintaining their hierarchy.

// Your code here

$student = [
    "name" => "Shawn",
    "age" => 22,
    "isStudent" => true,
    "courses" => [
        ["code" => "PHP101", "title" => "Intro to PHP", "grade" => "A"],
        ["code" => "JS201", "title" => "JavaScript Basics", "grade" => "B+"]
    ],
    "contact" => [
        "email" => "shawn@example.com",
        "phone" => "0123456789"
    ]
];

// Step 2: Encode to JSON
$jsonData = json_encode($student, JSON_PRETTY_PRINT);  // pretty print for nice formatting
echo "✅ JSON ENCODED DATA:\n";
echo $jsonData . "\n\n";


$decodedObject = json_decode($jsonData);  // default: object
echo "✅ DECODED AS OBJECT:\n";
print_r($decodedObject);
echo "\n";

$decodedArray = json_decode($jsonData, true);  // decode as array
echo "✅ DECODED AS ARRAY:\n";
print_r($decodedArray);



// TASK 4: JSON ENCODING OPTIONS
// Task: Demonstrate the effect of different json_encode() options:
//       1. JSON_PRETTY_PRINT for formatted output
//       2. JSON_NUMERIC_CHECK to convert numeric strings to numbers
//       3. JSON_UNESCAPED_UNICODE for handling non-ASCII characters
//       4. JSON_UNESCAPED_SLASHES to prevent escaping forward slashes
//       5. JSON_FORCE_OBJECT to force array encoding as objects
// Hint: Multiple options can be combined using the bitwise OR operator (|).

// Your code here


$data = [
    "name" => "Shawn",
    "age" => "22",  // string, not number
    "languages" => ["বাংলা", "English", "Español"],
    "url" => "https://example.com",
    "emptyList" => []
];

// 1️⃣ JSON_PRETTY_PRINT - formatted JSON output
echo "🔹 ]JSON_PRETTY_PRINT:\n";
echo json_encode($data, JSON_PRETTY_PRINT);
echo "\n\n";

echo "🔹 JSON_NUMERIC_CHECK:\n";
echo json_encode($data, JSON_NUMERIC_CHECK);
echo "\n\n";

echo "🔹 JSON_UNESCAPED_UNICODE:\n";
echo json_encode($data, JSON_UNESCAPED_UNICODE);
echo "\n\n";

echo "🔹 JSON_UNESCAPED_SLASHES:\n";
echo json_encode($data, JSON_UNESCAPED_SLASHES);
echo "\n\n";

echo "🔹 JSON_FORCE_OBJECT:\n";
echo json_encode($data["languages"], JSON_FORCE_OBJECT);
echo "\n\n";

echo "🔹 COMBINED OPTIONS (PRETTY + UNICODE + SLASHES):\n";
echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
echo "\n";

// TASK 5: JSON DECODING OPTIONS
// Task: Create JSON strings and demonstrate the effect of json_decode() options:
//       1. Second parameter (assoc) for array vs object return type
//       2. Third parameter (depth) for controlling nesting level
//       3. Fourth parameter (options) for error behavior
// Hint: Try exceeding the depth limit to demonstrate its effect.

// Your code here

$json = '{
    "user": {
      "name": "Shawn",
      "profile": {
        "age": 22,
        "contact": {
          "email": "shawn@example.com",
          "address": {
            "city": "Dhaka",
            "zip": "1207"
          }
        }
      }
    }
  }';


  echo "🔹 Default (Object):\n";
  $decodedObject = json_decode($json);
  print_r($decodedObject);

  echo "\n🔹 Associative Array (assoc = true):\n";
$decodedArray = json_decode($json, true);
print_r($decodedArray);

echo "\n🔹 With depth = 2 (should fail):\n";
$shallow = json_decode($json, true, 2);  // only 2 levels allowed
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "⚠️ Error: " . json_last_error_msg() . "\n";
}


echo "\n🔹 With error handling:\n";
$invalidJson = '{"name": "Shawn", "age": 22';  // missing closing }

try {
    $data = json_decode($invalidJson, true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    echo "🚫 Exception Caught: " . $e->getMessage() . "\n";

}

echo "--------------------------- \n";

// TASK 6: ERROR HANDLING IN JSON OPERATIONS
// Task: Create scenarios that cause JSON errors (invalid JSON syntax, too deeply nested structures, etc.)
//       and demonstrate how to handle these errors using:
//       1. json_last_error() and json_last_error_msg()
//       2. Try-catch blocks with JSON exception handling
// Hint: Malformed JSON with syntax errors will cause json_decode() to return NULL.

// Your code here


echo "🔸 EXAMPLE 1: Invalid JSON Syntax (missing closing brace)\n";
$invalidJson = '{"name": "Shawn", "age": 22';  // ❌ syntax error (missing })

$result1 = json_decode($invalidJson, true);

if ($result1 === null) {
    echo "⚠️ Error detected (Method 1): " . json_last_error_msg() . "\n";
} else {
    print_r($result1);
}

echo "\n🔸 EXAMPLE 2: Too Deeply Nested JSON (depth = 3)\n";
$tooDeepJson = '{"a":{"b":{"c":{"d":{"e":"value"}}}}}';

$result2 = json_decode($tooDeepJson, true, 3); // depth limit set to 3

if ($result2 === null) {
    echo "⚠️ Error detected (Method 1): " . json_last_error_msg() . "\n";
} else {
    print_r($result2);
}


echo "\n🔸 EXAMPLE 3: Try-Catch with JSON_THROW_ON_ERROR\n";
$badJson = '{"lang": "PHP", "level": "intermediate"'; // ❌ missing closing brace


try {
    $result3 = json_decode($badJson, true, 512, JSON_THROW_ON_ERROR);
    print_r($result3);
} catch (JsonException $e) {
    echo "🚫 Exception caught (Method 2): " . $e->getMessage() . "\n";
}


// TASK 8: JSON AND ASSOCIATIVE ARRAYS
// Task: Demonstrate the relationship between PHP associative arrays and JSON objects:
//       1. Convert an associative array to a JSON object
//       2. Convert a JSON object to an associative array
//       3. Show how indexed arrays are handled differently from associative arrays
// Hint: JSON objects use key-value pairs similar to PHP associative arrays.

// Your code here


// 1️⃣ Associative array → JSON object
$assocArray = [
    "name" => "Shawn",
    "age" => 22,
    "email" => "shawn@example.com"
];

$jsonFromAssoc = json_encode($assocArray);
echo "🔸 Associative Array → JSON Object:\n";
echo $jsonFromAssoc . "\n\n";


// 2️⃣ JSON object → Associative array
$jsonString = '{"name":"Shawn","age":22,"email":"shawn@example.com"}';

$decodedAssoc = json_decode($jsonString, true); // true = associative array
echo "🔸 JSON Object → Associative Array:\n";
print_r($decodedAssoc);

$indexedArray = ["PHP", "HTML", "CSS"];
$jsonFromIndexed = json_encode($indexedArray);
echo "\n🔸 Indexed Array → JSON Array:\n";
echo $jsonFromIndexed . "\n";

$jsonForced = json_encode($indexedArray, JSON_FORCE_OBJECT);
echo "\n🔸 Indexed Array → Forced to JSON Object:\n";
echo $jsonForced . "\n";

?>