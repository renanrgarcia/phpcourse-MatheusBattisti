# PHP on Web
## Intro to HTTP
- Request HTTP and response HTTP can have a body content
- The response has a header with: method (GET, POST), archive/path (/index.php), HTTP version (HTTP/1.x)

## HTTP Methods
- GET: Request a resource from the server
- POST: Send data to the server
- PUT: Update a resource
- DELETE: Delete a resource
- PATCH: Partially update a resource

## Global variables
- $_ENV: Environment variables
- $_SERVER: Server info
- $_COOKIE: Cookies values
- $_FILES: Files uploaded info
- $_GET: parameters sended by GET request 
- $_POST: parameters sended by POST request

### $_SERVER
- SERVER_NAME: Hostname, DNS or Server IP
- SERVER_SOFTWARE: Server Identifier
- SERVER_PROTOCOL: Server Protocol
- SERVER_PORT: Server Port
- QUERY_STRING: Query string after the question mark in the URL

## Forms
- Two ways: GET/POST
  - GET: processing parameters in the query string on URL
    - Example: Searchs
  - POST: processing parameters in the body of the request (Form data)
    - Example: Registration

## Self-processment
- $_SERVER['REQUEST_METHOD'] // GET or POST
  - You can process both requests on the same page using `if` statement

## Form filling
- After checking if there is data sent and received from the form, you can use it on the value of the input
  - Example: `<input type="text" value="<?php echo $name ?>">`

## Multivalue parameters
- Multiple values can be sent in the same parameter
  - Example: `<input type="checkbox" name="ingredients[]" value="Tomato"> Tomato`

## File upload
- You have to change the `enctype` to `multipart/form-data` in the form
  - Example: `<form method="POST" enctype="multipart/form-data">`
- Add the file `input` in the form
  - Example: `<input type="file" name="image">`
- After the upload, you can access its information by using `$_FILES`

## Form validation
- You can validate on HTML or JS, but is better to do this on backend

## Stateless requests
- HTTP requests are stateless, for each request, a new session is created
- To avoid this, you can use cookies. But some servers do not allow cookies or disable them

## Cookies
- Cookies are stored on the server
- `setcookie('name', 'value', time() + 3600)`: set a cookie with an expiration time
  - Need to be called before the <body>, sent data as header
- You can access it using `$_COOKIE`

## Sessions
- You can create a variable that persists between requests, for different pages and visits
- Uses cookies resources by default, if disabled, uses URLs 
- Examples: authentication, shopping cart, payment
- They are stored on the server or on the client (PC or mobile)
  - See on php.ini: session.save_path
- Initiate: `session_start()`
- Define a variable: `$_SESSION['name'] = 'value'`
- On another session page: `print_r($_SESSION)` to see all session variables

## SSL (Secure Socket Layer)
- PHP doesn't use SSL by default and doesn't have leverage on it
- But we must enshure that the data are encrypted
- We must use HTTPS on forms and URLs