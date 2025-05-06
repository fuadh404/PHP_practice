<?php
/**
 * PHP STRING PRACTICE SHEET
 * =========================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: STRING CREATION AND QUOTING
// Task: Create strings using different quoting methods (single quotes, double quotes, heredoc, nowdoc)
//       and explain the differences between them.
// Hint: Single quotes don't interpolate variables, double quotes do. Heredoc and nowdoc are useful for multi-line strings.

// Your code here

$var = "pen";

$message1 = 'This is a $var'; //single quotes can't interpolate variable
$message2 = "This is a $var"; //double quotes can interpolate variable

//haredoc can interpolate variable
$message3 = <<<TEXT
Hi.
This is a $var;
TEXT; 

//nowdoc can't interpolate variable
$message4 = <<<'TEXT'
Hi.
THis is a $var;
TEXT; 

echo $message1 . "\n";
echo $message2 . "\n";
echo $message3 . "\n";
echo $message4 . "\n";


// TASK 2: STRING CONCATENATION
// Task: Create two string variables and demonstrate at least three different ways to concatenate them.
// Hint: Try using the dot (.) operator, .= operator, and string interpolation with double quotes.

// Your code here

$str1 = "Hello";
$str2 = "World";

echo $str1 ." ". $str2. "\n";

$fullName = "Alpine ";
$fullName .= "Swift";

echo $fullName . "\n";

$strAdd = "$str1 $str2";
echo "Using Interpolation: $strAdd" . "\n";


// TASK 3: STRING LENGTH
// Task: Create strings with regular characters and multibyte characters (like emojis or Chinese characters).
//       Calculate their lengths using both strlen() and mb_strlen() and explain the difference.
// Hint: strlen() counts bytes while mb_strlen() counts characters, important for non-ASCII characters.

// Your code here

$str01 = "Software Developement";
$str02 = "Software 软件开发 تطوير البرمجيات 💻";

echo strlen($str01) . "\n";
echo mb_strlen($str01) . "\n";

echo strlen($str02) . "\n";
echo mb_strlen($str02) . "\n";

// TASK 4: SUBSTRING EXTRACTION
// Task: Create a long string and extract different parts of it using substr() and mb_substr().
//       Try both positive and negative positions and lengths.
// Hint: substr(string, start, [length]) - negative start counts from the end of string.

// Your code here


$text = "I will be a Software Engineer, InshAllah";

echo substr($text, 2, 4) . "\n";
echo substr($text, -9, 9) . "\n";

// TASK 5: STRING SEARCHING
// Task: Create a string and use different functions to search for substrings within it:
//       - strpos() / stripos()
//       - strstr() / stristr()
//       - strrchr()
// Hint: The "i" versions are case-insensitive. Check for false returns when nothing is found.

// Your code here

$content = "I will be a Software Engineer, InshAllah";

//strpos match word er index number ber kore with case sensitive
$pos1 = strpos($content, "software"); 
echo "strpos: ";
echo ($pos1 !== false) ? "Found at $pos1 \n" : "Not found \n";

//stripos match word er index number ber kore with case insensitive
$pos2 = stripos($content, "software");
echo "stripos: ";
echo ($pos2 !== false) ? "Found at $pos2 \n" : "Not found \n";

//strstr jekhan theke match hoy shekhan theke full sentence dhore with case sensitive
$part1 = strstr($content, "engineer");
echo "strstr: $part1\n";

//strstr jekhan theke match hoy shekhan theke full sentence dhore with case insensitive
$part2 = stristr($text, "engineer");
echo "stristr: $part2\n";

//last match letter theke print kore baki ta... tobe eta shudhu letter shorte pare word na
$lastPart = strrchr($text, "a");
echo "strrchr: $lastPart\n";


// TASK 6: STRING REPLACEMENT
// Task: Create a string and demonstrate different replacement techniques:
//       - str_replace() / str_ireplace() for simple replacements
//       - substr_replace() for position-based replacement
//       - strtr() for character-by-character translation
// Hint: str_replace() can accept arrays for search and replace parameters.

// Your code here

$index = "Software Engineering is very nice";

$rep1 = str_replace("Software Engineering", "Cyber Security", $index);
echo "str_replace: $rep1 \n";

$rep2 = str_ireplace("software engineering", "Data science", $index);
echo "str_ireplace: $rep2 \n";

$rep3 = substr_replace($index, "Robotics", 0, 20);
echo "substr_replace: $rep3 \n";

$rep4 = strtr($index, "aeiou", 12345);
echo "strstr(vowel -> number): $rep4 \n";

// TASK 7: CASE MANIPULATION
// Task: Create a string with mixed case and demonstrate these case manipulation functions:
//       - strtoupper() & strtolower()
//       - ucfirst() & lcfirst()
//       - ucwords()
//       - mb_strtoupper() for multibyte characters
// Hint: Case functions on regular strings may not work properly with special characters.

// Your code here

$sentence = "hElLo world! আমি বাংলা লিখি.";

echo "strtoupper: " . strtoupper($sentence). "\n";
echo "strtolowerr: " . strtolower($sentence). "\n";

echo "strtoupper: " . ucfirst(strtolower($sentence)). "\n";
echo "strtoupper: " . lcfirst(strtoupper($sentence)). "\n";

echo "strtoupper: " . ucwords(strtolower($sentence)). "\n";

echo "mb_strtoupper (with bangla) : " . mb_strtoupper($sentence, "UTF-8") . "\n";

?>