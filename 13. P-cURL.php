<?php
/**
 * PHP cURL PRACTICE SHEET
 * =====================
 * 
 * Instructions:
 * 1. Read each task carefully
 * 2. Complete the tasks in the marked sections
 * 3. Run this file to check your results
 */

// TASK 1: BASIC cURL INITIALIZATION AND EXECUTION
// Task: Create a simple cURL request to fetch the content of a website.
//       Initialize, execute, and close a cURL session properly.
// Hint: Use curl_init(), curl_exec(), and curl_close() functions.

// Your code here


// TASK 2: SETTING BASIC cURL OPTIONS
// Task: Fetch a web page using cURL with various basic options:
//       1. Set a user agent
//       2. Follow redirects
//       3. Set a timeout
//       4. Return the transfer as a string instead of outputting it directly
// Hint: Use curl_setopt() with options like CURLOPT_USERAGENT, CURLOPT_FOLLOWLOCATION, etc.

// Your code here


// TASK 3: HANDLING cURL RESPONSES
// Task: Make a cURL request and handle different aspects of the response:
//       1. Get the response body
//       2. Get response headers
//       3. Get response status code
//       4. Get content type
// Hint: Use CURLOPT_RETURNTRANSFER and CURLOPT_HEADER, then parse the response.

// Your code here


// TASK 4: ERROR HANDLING WITH cURL
// Task: Implement proper error handling for cURL requests:
//       1. Check for cURL initialization errors
//       2. Catch and display cURL execution errors
//       3. Handle HTTP error status codes (4xx, 5xx)
//       4. Implement timeout handling
// Hint: Use curl_error(), curl_errno(), and check HTTP status codes.

// Your code here


// TASK 5: MAKING HTTP POST REQUESTS
// Task: Make a POST request to a form processing endpoint or API:
//       1. Send form data (application/x-www-form-urlencoded)
//       2. Send JSON data (application/json)
//       3. Handle and display the response
// Hint: Use CURLOPT_POST and CURLOPT_POSTFIELDS, and set appropriate Content-Type headers.

// Your code here


// TASK 6: WORKING WITH HTTP HEADERS
// Task: Demonstrate how to:
//       1. Set custom request headers
//       2. Retrieve response headers
//       3. Parse specific headers from the response
//       4. Work with cookies in headers
// Hint: Use CURLOPT_HTTPHEADER for setting headers and CURLOPT_HEADERFUNCTION for processing received headers.

// Your code here


// TASK 7: FILE UPLOADS WITH cURL
// Task: Create a script that uploads a file using cURL:
//       1. Upload using multipart/form-data
//       2. Upload a file directly from disk
//       3. Handle the server response
// Hint: Use CURLFile for file uploads with CURLOPT_POSTFIELDS.

// Your code here


// TASK 8: DOWNLOADING FILES WITH cURL
// Task: Create a script that downloads files from a server:
//       1. Download a file and save it to disk
//       2. Show download progress
//       3. Resume a partial download
// Hint: Use CURLOPT_FILE with a file handle and CURLOPT_PROGRESSFUNCTION for progress updates.

// Your code here


// TASK 9: WORKING WITH COOKIES
// Task: Demonstrate cookie handling with cURL:
//       1. Send cookies with a request
//       2. Store received cookies
//       3. Use a cookie jar file
//       4. Maintain a session across multiple requests
// Hint: Use CURLOPT_COOKIE, CURLOPT_COOKIEFILE, and CURLOPT_COOKIEJAR.

// Your code here


// TASK 10: HANDLING AUTHENTICATION
// Task: Make requests to resources that require authentication:
//       1. HTTP Basic authentication
//       2. HTTP Digest authentication
//       3. OAuth 1.0 authentication (simpler example)
//       4. OAuth 2.0 bearer token (simpler example)
// Hint: Use CURLOPT_USERPWD for basic auth, or construct appropriate headers for OAuth.

// Your code here


// TASK 11: WORKING WITH PROXIES
// Task: Configure cURL to work with a proxy:
//       1. HTTP proxy
//       2. SOCKS proxy
//       3. Proxy with authentication
// Hint: Use options like CURLOPT_PROXY, CURLOPT_PROXYTYPE, and CURLOPT_PROXYUSERPWD.

// Your code here


// TASK 12: HANDLING REDIRECTS
// Task: Demonstrate handling of HTTP redirects:
//       1. Enable automatic following of redirects
//       2. Limit the number of redirects to follow
//       3. Retrieve information about the redirect chain
// Hint: Use CURLOPT_FOLLOWLOCATION, CURLOPT_MAXREDIRS, and CURLOPT_HEADERFUNCTION.

// Your code here


// TASK 13: CURL MULTI INTERFACE FOR PARALLEL REQUESTS
// Task: Use the cURL multi interface to make multiple requests in parallel:
//       1. Initialize multiple cURL handles
//       2. Add them to a multi handle
//       3. Execute them in parallel
//       4. Process all responses
// Hint: Use curl_multi_init(), curl_multi_add_handle(), and curl_multi_exec().

// Your code here


// TASK 14: WORKING WITH RESTful APIS
// Task: Create functions for interacting with a RESTful API:
//       1. GET request to retrieve data
//       2. POST request to create a resource
//       3. PUT request to update a resource
//       4. DELETE request to remove a resource
// Hint: Use CURLOPT_CUSTOMREQUEST for PUT and DELETE methods.

// Your code here


// TASK 15: SSL/TLS CONFIGURATION
// Task: Configure cURL for secure connections:
//       1. Enable SSL certificate verification
//       2. Use a custom certificate authority file
//       3. Handle self-signed certificates
//       4. Set specific SSL/TLS version
// Hint: Use options like CURLOPT_SSL_VERIFYPEER, CURLOPT_CAINFO, and CURLOPT_SSLVERSION.

// Your code here


// TASK 16: CURL PERFORMANCE OPTIMIZATION
// Task: Implement techniques to optimize cURL performance:
//       1. Keep-alive connections
//       2. DNS caching
//       3. Disabling features you don't need
//       4. Measure and compare performance differences
// Hint: Use options like CURLOPT_TCP_KEEPALIVE, CURLOPT_DNS_CACHE_TIMEOUT, and microtime() for measuring.

// Your code here


// TASK 17: CURL DEBUGGING AND TROUBLESHOOTING
// Task: Implement debugging techniques for cURL:
//       1. Enable verbose output
//       2. Log connection details to a file
//       3. Analyze timing data for request stages
//       4. Create a reusable debugging function
// Hint: CURLOPT_VERBOSE, CURLOPT_STDERR, and CURLINFO_* options for timing data.

// Your code here


// BONUS CHALLENGE: WEB SCRAPING PROJECT
// Task: Create a web scraper that:
//       1. Fetches a web page using cURL
//       2. Parses the HTML to extract specific information (e.g., titles, links, prices)
//       3. Follows pagination links to scrape multiple pages
//       4. Implements polite scraping practices (delays, respecting robots.txt)
// Hint: Combine cURL with DOMDocument or a parsing library to extract information from HTML.

// Your code here

?>