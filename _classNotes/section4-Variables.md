# Variables
- To create a variable, use `$`
  - Examples: `a`, `$b`, `$_c`
- To print a variable, use `echo`
- On PHP is used camelCase

## Variable of variable
- `$var1 = "name";`
- `$$var1 = "Renan";`
- `echo $name;` > "Renan"

## Variable of reference
- `$x = 2;`
- `$y =& $x;`: y is a reference to x when pointing to the memory address. When one is changed, the other is also changed.

## Scope
- Global scope: outside a function
  - You can call global variables inside a function: `global $var;`
- Local scope: inside a function
- Static scope: variable value is saved between function calls
  - `static $var;`
- Function parameters: passed by reference to the function