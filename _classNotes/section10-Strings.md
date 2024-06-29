# Strings
## Variables interpolation
- Example: `"Hello ${name}, that have ${age} years"` or `"Hello $name, that have $age years"`. It's the same.

## Escaping characters
- Use double quotes on the string to escape characters
- `\t`- tab
- `\n` - new line
- `\\` - backslash
- `\$` - dollar sign 

## Print function
- Example: `print("Hello World");`. Is analogous to `echo`.

## Printf function
- Example: `printf("Hello %s", "World");`. Where %s is a placeholder for a string.
  - %s - string
  - %d - integer
  - %.2f - float with 2 decimal places

## String length
- Example: `strlen("Hello World");`. Returns the number of characters in the string.

## String looping
- Example: `for ($i = 0; $i < strlen($str); $i++) { echo $str[$i]; }`.

## Cleaning string
- `trim($str, " ");`: Removes leading and trailing spaces.
- `ltrim($str, " ");`: Removes leading spaces.
- `rtrim($str, " ");`: Removes trailing spaces.

## Change case
- `strtolower($str)`: Converts a string to lowercase.
- `strtoupper($str)`: Converts a string to uppercase.
- `ucfirst($str)`: Converts the first character of a string to uppercase.
- `ucwords($str)`: Converts the first character of each word in a string to uppercase.

## Remove HTML tags
- `strip_tags($str)`: Removes HTML tags from a string.

## Getting substrings
- `substr($str, $start, $length)`: Returns a substring of a string.
  - Omitted $length will return from $start to the end of the string.
  - Negative $length will remove the value from the end of the string.

## Reverse string
- `strrev($str)`: Reverses a string.

## Repeat string
- `str_repeat($str, $times)`: Repeats a string $times times.

## String to array
- `explode($delimiter, $str)`: Splits a string into an array based on the delimiter.

## Array to string
- `implode($delimiter, $array)`: Joins an array into a string based on the delimiter.

## Finding substring
- `strpos($str, $needle)`: Returns the position of the first occurrence of a string in a string.
- `strrpos($str, $needle)`: Returns the position of the last occurrence of a string in a string.
- `strstr($haystack, $needle)`: Returns the portion of a string before the first occurrence of a string.

## Decomposing URL
- `parse_url($url)`: Decomposes a URL into its component parts. Components: scheme, host, path, query, fragment.

## Extra:
- `header("Content-type: text/plain");` // This will tell the browser what kind of content we're sending. In this case, we're sending plain text.
