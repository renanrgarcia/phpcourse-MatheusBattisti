# Dates
## Date function
- `date()`: Returns the current date
- `date(format)`: Returns the current date in the specified format. Ex: `date("Y-m-d")`

## strtotime
- `strtotime(date)`: Converts a date to a Unix timestamp
- `strtotime(date, timestamp)`: Adds or subtracts days from a Unix timestamp
  - `strtotime("Y-m-d", "+1 day")` // Add 1 day to the current date
  - `strtotime("Y-m-d", "-1 month")` // Subtract 1 month from the current date
  - `strtotime("Y-m-d", "plus 2 years")` // Add 2 years to the current date

## mktime
- `mktime(hour, minute, second, month, day, year)`: Creates a Unix timestamp

## Datetime Object
- `new DateTime()`: Creates a new DateTime object
  - On print_r: `DateTime Object (19) { ... }`
- The properties aren't accessible directly from object (`$object->property`) or array (`$array['property']`)

## Format and modify methods
- `$date->format(format)`: Returns the date in the specified format
- `$date->modify("+1 day")`: Adds or subtracts days from the date

## setDate and setTime
- `$date->setDate(year, month, day)`: Sets the date
- `$date->setTime(hour, minute, second)`: Sets the time

## diff
- `$date->diff($date2)`: Returns the difference between two dates. Generates an new DateTime object with the difference

## Comparing dates
- Examples:
  - `$date1 == $date2`: Returns true if the dates are the same
  - `$date1 > $date2`: Returns true if the date1 is after date2
  - `$date1 < $date2`: Returns true if the date1 is before date2

## Altering datetime
- Default: PC or server timezone
- `date_default_timezone_set("America/Sao_Paulo")`: Sets the default timezone