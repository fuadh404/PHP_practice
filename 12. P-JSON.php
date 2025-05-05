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


// TASK 2: BASIC JSON DECODING
// Task: Create several JSON strings representing different data types and use json_decode() to convert them back to PHP values.
//       Demonstrate both object and array decoding options.
// Hint: json_decode() with second parameter as TRUE returns arrays instead of objects.

// Your code here


// TASK 3: HANDLING COMPLEX DATA STRUCTURES
// Task: Create a complex nested PHP array/object with multiple levels and data types.
//       Convert it to JSON and back to PHP, showing that the structure is preserved.
// Hint: JSON can represent nested arrays and objects, maintaining their hierarchy.

// Your code here


// TASK 4: JSON ENCODING OPTIONS
// Task: Demonstrate the effect of different json_encode() options:
//       1. JSON_PRETTY_PRINT for formatted output
//       2. JSON_NUMERIC_CHECK to convert numeric strings to numbers
//       3. JSON_UNESCAPED_UNICODE for handling non-ASCII characters
//       4. JSON_UNESCAPED_SLASHES to prevent escaping forward slashes
//       5. JSON_FORCE_OBJECT to force array encoding as objects
// Hint: Multiple options can be combined using the bitwise OR operator (|).

// Your code here


// TASK 5: JSON DECODING OPTIONS
// Task: Create JSON strings and demonstrate the effect of json_decode() options:
//       1. Second parameter (assoc) for array vs object return type
//       2. Third parameter (depth) for controlling nesting level
//       3. Fourth parameter (options) for error behavior
// Hint: Try exceeding the depth limit to demonstrate its effect.

// Your code here


// TASK 6: ERROR HANDLING IN JSON OPERATIONS
// Task: Create scenarios that cause JSON errors (invalid JSON syntax, too deeply nested structures, etc.)
//       and demonstrate how to handle these errors using:
//       1. json_last_error() and json_last_error_msg()
//       2. Try-catch blocks with JSON exception handling
// Hint: Malformed JSON with syntax errors will cause json_decode() to return NULL.

// Your code here


// TASK 8: JSON AND ASSOCIATIVE ARRAYS
// Task: Demonstrate the relationship between PHP associative arrays and JSON objects:
//       1. Convert an associative array to a JSON object
//       2. Convert a JSON object to an associative array
//       3. Show how indexed arrays are handled differently from associative arrays
// Hint: JSON objects use key-value pairs similar to PHP associative arrays.

// Your code here


// TASK 10: CUSTOM JSON SERIALIZATION
// Task: Implement the JsonSerializable interface in a class to customize how objects
//       of that class are serialized to JSON. Demonstrate this with a complex object.
// Hint: The jsonSerialize() method should return data that is JSON-serializable.

// Your code here


?>