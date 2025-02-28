[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.github.com/zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

### PHP Lessons &mdash;

#### OUTPUT &mdash;

- `echo` - multiple output allow, but with branket multiple output doesn't allow and return after output

- `print` - multiple output doesn't allow with or withour branket but return value after output

#### CONCAT &mdash;

```php
    $fullname = $firstname . $lastname;

    echo "my name is $fullname";
```

#### COMMENT &mdash;

```php
      // single line comment // or #

      // multi line comment /* */
```

<hr />

#### DATA TYPEs &mdash;

Variables can store data of different types, and different data types can do different things.

PHP supports the following data types: &mdash;

- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource

<hr/>

### Strings

Strings in PHP are surrounded by either double quotation marks, or single quotation marks.

- strtoupper($str)
- strtolower($str)
- strrev($str)
- trim($str)
- strlen($str)
- str_word_count($str)
- strpos($str, findletter)
- str_replace('old world', 'new world', $str)
- explode(' ', $str) // return an array;
- substr($str, startpoint, length) // Slicing String

<hr/>

### Numbers &mdash;

    - Integer
    - Float
    - Nuber String

IN Addition &mdash;

    - Infinity
    - NaN

### Integer &mdash;

2, 256, -256, 10358, -179567 are all integers.

An integer is a number without any decimal part.

An integer data type is a non-decimal number between `-2147483648` and `2147483647` in `32 bit` systems, and between `-9223372036854775808` and `9223372036854775807` in `64 bit` systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

> Note: Another important thing to know is that even if `4 \* 2.5` is `10`, the result is stored as float, because one of the operands is a float `(2.5)`.

Here are some rules for integers:

- An integer must have at least one digit
- An integer must NOT have a decimal point
- An integer can be either positive or negative
  Integers can be specified in three formats: `decimal (base 10)`, `hexadecimal (base 16 - prefixed with 0x)`, `octal (base 8 - prefixed with 0)` or `binary (base 2 - prefixed with 0b)`

  <br/>

PHP has the following predefined constants for integers:

- `PHP_INT_MAX` - The largest integer supported
- `PHP_INT_MIN` - The smallest integer supported
- `PHP_INT_SIZE` - The size of an integer in bytes

<br/>

> PHP has the following functions to check if the type of a variable is integer:

  <br/>

- `is_int()`
- `is_integer()` - alias of is_int()
- `is_long()` - alias of is_int()

<hr/>

### FLOAT &mdash;

A float is a number with a decimal point or a number in exponential form.

`2.0`, `256.4`, `10.358`, `7.64E+5`, `5.56E-5` are all floats.

The float data type can commonly store a value up to `1.7976931348623E+308` (platform dependent), and have a `maximum precision of 14 digits`.

PHP has the following predefined constants for floats `(from PHP 7.2)`:

- `PHP_FLOAT_MAX` - The largest representable floating point number
- `PHP_FLOAT_MIN` - The smallest representable positive floating point number
- `PHP_FLOAT_DIG` - The number of decimal digits that can be rounded into a float and back without precision loss
- `PHP_FLOAT_EPSILON` - The smallest representable positive number` x, so that x + 1.0 != 1.0`

<br/>

> PHP has the following functions to check if the type of a variable is float:

- `is_float()`
- `is_double()` - alias of is_float()

<hr/>

### Infinity &mdash;

A numeric value that is larger than `PHP_FLOAT_MAX` is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

- `is_finite()`
- `is_infinite()`

  However, the PHP `var_dump()` function returns the data type and value:

<hr/>

### NaN &mdash;

`NaN` stands for Not a Number.

`NaN` is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

- `is_nan()`

However, the PHP `var_dump()` function returns the data type and value:

<hr/>

### PHP Numerical Strings &mdash;

The PHP `is_numeric()` function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

> Note: From PHP 7.0: The `is_numeric()` function will return `FALSE` for numeric strings in hexadecimal form (e.g. `0xf4c3b00c`), as they are no longer considered as numeric strings

<hr/>

### PHP Casting Strings and Floats to Integers &mdash;

Sometimes you need to cast a numerical value into another data type.

The `(int)`, `(integer)`, and `intval()` functions are often used to convert a value to an integer

eg.

```php
    $strnum = '10px';
    echo (int)$strnum;
```

<hr/>

### CASTING &mdash;

Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.

#### Change Data Type &mdash;

Casting in PHP is done with these statements:

- `(string)` - Converts to data type String
- `(int)` - Converts to data type Integer
- `(float)` - Converts to data type Float
- `(bool)` - Converts to data type Boolean
- `(array)` - Converts to data type Array
- `(object)` - Converts to data type Object
- `(unset)` - Converts to data type NULL

#### (bool) $str &mdash;

> If a value is `0`, `NULL`, `false`, or `empty`, the (`bool`) converts it into `false`, otherwise `true`. Even `-1` converts to `true`.

<hr/>

#### PHP Constants &mdash;

A constant is an identifier (`name`) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no `$` sign before the `constant` name).

Constants are automatically global and can be used across the entire script.

> Note: Unlike variables, constants are automatically global across the entire script.

```php
    define('USERNAME', 'root');

    echo USERNAME;
```

#### const vs. define() &mdash;

`const` cannot be created inside another `block scope,` like inside a function or inside an if statement.
`define` can be created inside another `block scope`.

<br>

<!-- ![Screenshot of Project](./s1.png) -->

What I use packages are &mdash;

[![My Skills](https://skillicons.dev/icons?i=mysql,npm,git,github,vscode&perline=3)](https://skillicons.dev)

<br>

[![PHP PREPROCESSOR: Introduction](https://img.shields.io/badge/PHP_PREPROCESSOR_—-000?style=for-the-badge—=ko-fi—=white)](#)

📫 Reach me out!

[![Facebook Badge](https://img.shields.io/badge/-@zawlinn_vlog-1ca0f1?style=flat&labelColor=1ca0f1&logo=facebook&logoColor=white&link=https://faebook.com/zawlinn_profile)](https://facebook.com/zawlinn.vlog)
[![youtube Badge](https://img.shields.io/badge/-zawlinn_vlog-c0392b?style=flat&labelColor=c0392b&logo=youtube&logoColor=white)](https://youtube.com/@zawlinn-vlog)
[![Gamil Badge](https://img.shields.io/badge/-zawlinn.profile-c0392b?style=flat&labelColor=c0392b&logo=gmail&logoColor=white)](mailto:zawlinn.profile@gmail.com)

<!-- TODO: Add last video link -->

<details>
    <summary>
        My Portfolio
    </summary>
    <br/>

- :earth_asia: I’m currently working at @Mae Sot Market as a sale staff
- :computer: Most used line of code git commit -m "Initial Commit"
- :brain: I’m looking for help with Outstanding Video ideas.
- :mailbox_with_mail: How to reach me: zawlinn.profile@gmail.com.
- :heart: In a relationship with React
</details>
