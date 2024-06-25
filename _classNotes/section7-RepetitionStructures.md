# Repetition Structures
## Extra
- count(array): Returns the number of elements in an array

## While 
``` php
while (condition) {
  // code
}
```

Ex: 
``` php
// Definition of counter $i
$i = 0;

// While loop
while ($i < 10) {
  echo $i;
  // Increment or decrement counter. Can be with other operators, like: $i *= 2;
  $i++;
}
```

- break: Terminates the current loop. Ex: 
  ```php
  while ($i < 10) {
    echo $i;
    if ($i === 5) {
      break;
    }
    $i++;
  }
  ```

## Do while
- Example:
  ```php
  $i = 0;
  do {
    echo $i;
    $i++;
  } while ($i < 10);
  ```

## For
- Example:
  ```php
  for ($i = 0; $i < 10; $i++) {
    echo $i;
  }
  ```

### Continue
- continue: Skips the rest of the current iteration.
- Example:
  ```php
  for ($i = 0; $i < 10; $i++) {
    if ($i == 5 || $i == 7) {
      continue;
    }
    echo $i;
  }
  ```

### Nested loops
- Example:
  ```php
  for ($i = 0; $i < 10; $i++) {
    echo $i;
    for ($j = 0; $j < 10; $j++) {
      echo $j;
    }
  }
  ```

### Infinite loop
- Occurs when a condition is not met.

## Foreach
- Example:
  ```php
  $numbers = [1, 2, 3, 4, 5];
  foreach ($numbers as $number) {
    echo $number;
  }
  ```