<?php
/**
 * PHP cURL PRACTICE SHEET (Beginner-Friendly Version)
 * ===================================================
 * 
 * Instructions:
 * ✅ Use predefined test URLs provided in each task.
 * ✅ Don't change the API or URL unless you're confident.
 * ✅ Read the task description and complete the code where marked.
 * ✅ Run the file in a local or online PHP environment to test.
 * 
 * Base Test API: https://jsonplaceholder.typicode.com/
 * - This is a free fake REST API for testing.
 * - Safe, public, no login needed.
 */


// TASK 1: BASIC cURL INITIALIZATION AND EXECUTION
// URL to use: https://jsonplaceholder.typicode.com/posts/1
// Task: Create a simple cURL request to fetch the content of a website.
//       Initialize, execute, and close a cURL session properly.
// Hint: Use curl_init(), curl_exec(), and curl_close() functions.


// Your code here



// TASK 2: SETTING BASIC cURL OPTIONS
// URL to use: https://jsonplaceholder.typicode.com/posts/2
// - Set User-Agent to "MyCurlBot/1.0"
// - Follow redirects
// - Set timeout of 10 seconds
// - Return output as string

// Your code here



// TASK 3: HANDLING cURL RESPONSES
// URL to use: https://jsonplaceholder.typicode.com/posts/3
// - Display: body, status code, content type, and headers

// Your code here



// TASK 4: ERROR HANDLING WITH cURL
// URL to use: https://jsonplaceholder.typicode.com/invalid-url
// - Show cURL error if any
// - Show HTTP error status (400-599)

// Your code here



// TASK 5: MAKING HTTP POST REQUESTS
// URL to use: https://jsonplaceholder.typicode.com/posts
// - Send form data: title, body, userId
// - Send JSON data: title, body, userId

// Your code here



// TASK 6: WORKING WITH HTTP HEADERS
// URL to use: https://jsonplaceholder.typicode.com/posts/4
// - Set a custom header: "X-Test-Header: BeginnerPractice"
// - Print response headers

// Your code here



// TASK 7: FILE UPLOADS WITH cURL
// NOTE: This task is simulated. Use this echo endpoint:
// URL: https://httpbin.org/post
// - Upload a local file (e.g., test.txt)

// Your code here



// TASK 8: DOWNLOADING FILES WITH cURL
// URL to use: https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf
// - Save the file as "downloaded.pdf" in your folder

// Your code here



// TASK 9: WORKING WITH COOKIES
// URL to use: https://httpbin.org/cookies
// - Send and store cookies using a file "cookie.txt"

// Your code here



// TASK 10: HANDLING AUTHENTICATION
// URL to use: https://httpbin.org/basic-auth/user/passwd
// - Username: user
// - Password: passwd

// Your code here






// TASK 12: HANDLING REDIRECTS
// URL to use: https://httpbin.org/redirect/2
// - Follow redirects and print final response URL

// Your code here



// TASK 13: CURL MULTI INTERFACE FOR PARALLEL REQUESTS
// URLs to use:
// - https://jsonplaceholder.typicode.com/posts/1
// - https://jsonplaceholder.typicode.com/posts/2
// - https://jsonplaceholder.typicode.com/posts/3

// Your code here



// TASK 14: WORKING WITH RESTful APIs (If api response not understanable, skip it)
// API: https://jsonplaceholder.typicode.com/posts
// - GET: Get post 1
// - POST: Add new post
// - PUT: Update post 1
// - DELETE: Delete post 1

// Your code here



// TASK 15: SSL/TLS CONFIGURATION (If api response not understanable, skip it )
// URL to use: https://jsonplaceholder.typicode.com/posts/1
// - Enable SSL peer verification
// - Try disabling it and compare

// Your code here





// BONUS CHALLENGE: SIMPLE WEB SCRAPER
// URL: https://example.com
// - Fetch homepage
// - Parse title and links using regex (or DOMDocument if known)

// Your code here




?>
