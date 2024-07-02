# Arrays
- Printing an array: `print_r($array);`
- `count($array)`: Returns the number of elements in an array. Including associative arrays.

## Adding elements
- `$array[index] = value;`: Adds an element to an array on a specific index. 
- `$assoc[key] = value;`: Adds an element to an array on a specific key.
- You can modify a value in an array: `$array[index] += value;`, for example.
- Add at the end of the array: `$array[] = value;`

## Removing elements
- `array_splice($array, $start, $end, $preserve_keys)`: Removes elements from an array.

## Range function
- `range($start, $end, $step)`: Returns an array with a range of numbers. If $step is omitted, it defaults to 1.

## Multi-dimensional arrays
- `$arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];`: Creating a multi-dimensional array.
- `$element = $arr[row][column];`: Accessing an element in a multi-dimensional array.
- `$arr[row][column] = value;`: Modifying an element in a multi-dimensional array.

## Break up an array into variables
- On simple arrays: `list($first, $second, $third) = $array;`: Extracts values from an array into variables.
- On multi-dimensional arrays: `extract($array);`: Extracts values from an array into variables.

## Create an array from variables
- `compact($var1, $var2, $var3)`: Creates an array from variables.

## Array slicing
- `$slice = array_slice($array, $start, $end, $preserve_keys);`: Returns a slice of an array.
  - If $end is omitted, it defaults to the end of the array.
  - If $preserve_keys is true, it preserves the keys of the array.

## Dividing arrays
- `array_chunk($array, $size, $preserve_keys);`: Divides an array into chunks.

## Keys and values
- `array_keys($array)`: Returns an array with the keys of an array.
- `array_values($array)`: Returns an array with the values of an array.
- `array_key_exists($key, $array)`: Checks if a key exists in an array.
  - Or `isset($array[$key])`: Checks if a key or a value exists in an array.

## Foreach 
- `foreach ($array as $key => $value) { echo $key . "<br>"; echo $value . "<br>";}`: Iterates over an array.

## Reduce an array
- `array_reduce($array, $callbackFunction);`: Reduces an array to a single value.

## Search an array
- `in_array($needle, $haystack);`: Checks if a value exists in an array.

## Sort an array
- `sort($array);`: Sorts an array in ascending order.
- `rsort($array);`: Sorts an array in descending order.
- `asort($array);`: Sorts an associative array in ascending order by value.
- `arsort($array);`: Sorts an associative array in descending order by value.
- `ksort($array);`: Sorts an associative array in descending order by key.
- `krsort($array);`: Sorts an associative array in descending order by key.

## Reverse an array
- `array_reverse($array, $preserve_keys);`: Reverses an array.

## Shuffle an array
- `shuffle($array);`: Shuffles an array.

## Sum an array
- `array_sum($array);`: Returns the sum of an array.

## Merge arrays
- `array_merge($array1, $array2, $array3);`: Merges multiple arrays.

## Difference between arrays values
- `array_diff($array1, $array2);`: Returns the different values between two arrays. Elements in $array1 that are not in $array2 will be returned.

## Exclude a value from an array
- To exclude one item from an array: 