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
