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

## Extra:
- `header("Content-type: text/plain");` // This will tell the browser what kind of content we're sending. In this case, we're sending plain text.
