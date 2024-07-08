# POO Introduction
## Objects - Concepts
- Properties: Object attributes, variables
- Methods: Object functions

## Classes - Concepts
- Classes are blueprints for creating objects
- Objects are instances of classes
- Declaring a class:
  - `class ClassName { ... }` // PascalCase
- Initializing an object:
  - `$object = new ClassName;`

## Methods - Functions
- Declaring a method:
  - `function methodName() { ... }` // camelCase
- Using a method in an object:
  - `$object->methodName();`

## Properties - Variables
- Declaring a property:
  - `public $propertyName = value;` // camelCase, initial value can be empty
- Using a property in an object:
  - `$object->propertyName;`
- Changing the property value:
  - `$object->propertyName = newValue;`

### Using $this
- When using a property in a method, use `$this` instead of `$object`
- Examples:
  - `$this->propertyName = newValue;`
  - `$this->methodName()` // $this is the object that the method is being called on
  
## Constants
- Constants are defined with the `const` keyword.
- Their value don't change.
  - Example: `const CONSTANT_NAME = "value";`
- Accessing a constant of an object:
  - `$object::CONSTANT_NAME`
- Accessing a constant inside a class method:
  - `self::CONSTANT_NAME`

## Visibility
- Public: `public` - can be accessed from everywhere.
- Private: `private` - can be accessed only from inside the class. Cannot be accessed from objects either.
- Protected: `protected` - can be accessed only from inside the class and from the subclasses.

## Inheritance
- An class can inherit properties and methods from another class.
  - `class ClassName extends ParentClassName { ... }`

## Ancestors
- The ancestors of a class are the classes that inherit it. It works to subclasses in relationship with the ancestors.
  - `$object instanceof ClassName` <- true if $object is an instance of ClassName

## Interfaces
- It is a mechanism to define behaviors that can be applied to a class. 
- It is a way of defining a set of abstract methods that a class must implement.
  - `interface InterfaceName { ... }`
- To implement an interface, a class must inherit it.
  - `class ClassName implements InterfaceName { ... }`
- It is possible access constants from an interface.

## Traits
- It is a way of defining a set of methods and properties that can be used in multiple classes.
- Important to reuse code.
  - `trait TraitName { ... }`
- To use a trait, do this:
  - ```php
      class ClassName { 
        use TraitName;
      }
    ```

## Abstract classes
- It is a class that cannot be instantiated.
- It is a way of defining a set of methods that can be used in multiple classes.
- Important to reuse code.
  - `abstract class ClassName { ... }`
- To call a method from an abstract class, do this:
  - `ClassName::functionName();`
- You can have abstract methods as well:
  - `abstract function functionName();` < Needs to be implemented

## Static methods
- Belongs to the class itself, rather than an instance of the class. It does not require an instance to be called and can be invoked directly on the class.
  - `static function functionName();`
- Calling a static method:
  - `ClassName::functionName();`

## Constructors
- It is a special method that is called when an object is created.
- It is used to initialize the object.
  - ```php 
      class ClassName { 
      public $param1;
      public $param2;
      
      function __construct($param1, $param2) { 
        $this->param1 = $param1; 
        $this->param2 = $param2; 
        }
      }

      $object = new ClassName(1, 2);
    ```

## Anonymous classes
- It is created in a variable.
- It is a way to create a class that has no name.
  - `$anonymous = new class() { ... }`

## Verifing classes
- `class_exists()`: Checks if a class exists.
- `get_class_methods()`: Returns an array with the methods of a class. 
- `get_class_vars()`: Returns an array with the properties of a class.

## Verifing objects
- `is_object()`: Checks if an object is an object.
- `get_class()`: Returns the class of an object.
- `method_exists()`: Checks if a method exists in an object.
