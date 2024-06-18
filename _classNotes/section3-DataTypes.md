# Data Types
## Integers
- Whole numbers, including negatives

### Checking integers
- `is_int($value)`

## Floats
- Decimal numbers, including negatives

### Checking floats
- `is_float($value)`

# Strings
- Can use single or double quotes
  - Double quotes interpret variables within the string

## Checking strings
- `is_string($value)`

# Booleans
- `true` or `false`
- Considered falses: `0`, `""`, `"0"`, `0.0`, `null`, `NaN`, `undefined`, `[]`, `false`

## Checking booleans
- `is_bool($value)`

# Arrays
- Collection of values
- Syntax: `$a = [1, 2, 3];`
- `print_r($a);`: prints out the array

## Associative arrays
- Arrays with keys
- `$arr = ['a' => 1, 'b' => 2, 'c' => 3];`
- `print_r($arr);`: prints out the array
- `$arr['a']`: returns the value associated with the key

# Objects
- POO
- Syntax: `$obj = new stdClass();`

# Null
- On PHP: `NULL`

# Checking null
- `is_null($value)`