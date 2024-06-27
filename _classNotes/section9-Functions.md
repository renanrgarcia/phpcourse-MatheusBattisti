# Functions
## Structure
- Example: `function functionName($param1, $param2) { // code }`
- Calling a function: `functionName(param1, param2);`
- There are two types of functions: built-in and user-defined
- You must declare the functions at the beginning of the script

## Return
- Example: `function functionName($param1, $param2) { return $param1 + $param2; }`

## Default parameters
- Example: `function functionName($param1, $param2 = 10) { // code }`
- If you don't pass a value for the parameter, the default value will be used
- It's a good practice to put the default value at the end of the parameter list

## Discovering args
- `func_get_args()` - Returns an array of arguments passed to the function
- `func_num_args()` - Returns the number of arguments passed to the function

## Return multiple values
- Example: `return [$a, $b, $c];`

## Debugging values
- `var_dump($value);`: Prints a human-readable version of the variable < Preferable
- `print_r($value);`: Prints a human-readable version of the variable