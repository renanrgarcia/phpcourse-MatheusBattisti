# DAO - Data Access Object

- Used to persist data
- Only used on POO approches
- There is a class that is responsible for interacting with the database
  - Separe it from the business logic
- Makes possible the change of the database/connection model

## Initial classes (User example)

- `UserDAO`: manipulate the database (CRUD)
- `User`: actions that don't require a database
- `CreateUser`: prepare a user with the database fields, UserDAO receives it and sends it to the database

## DAO Interface

- Creates the methods that the database will use (CRUD)
  - The interface can be implemented on different databases
