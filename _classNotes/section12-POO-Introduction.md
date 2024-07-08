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