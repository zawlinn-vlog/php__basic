[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.youtube.com/@zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

### Why we use Session & Cookie

- Session => Store on Server

- Cookie => Store User's Browser

```php
    setCookie(name, value, expire, path, domain, security); # name is key and value is data
```

| Name     | Description                                                                     |
| -------- | ------------------------------------------------------------------------------- |
| name     | sets the name of the cookie                                                     |
|          | stored in an enviroment variable (HTTP_COOKIE_VARS)                             |
| value    | sets the value                                                                  |
| expire   | sets cookie life in seconds (time from 00:00:00 GMT on 1<sup>st</sup> jan 1970) |
| path     | sets folder that cookie valid, set/for cookie valid for all directories         |
| domain   | Set domain which is valid for cookie, use two preiod at least                   |
| security | 1 for HTTPS, 0 for HTTP                                                         |

### printf() vs fprintf() &mdash;

```php
    $num = 50000000;
    $str = 'Yangon';

    printf("There are %d people in %s", $num, $str);
```

| Symbol   | Describe                                           |
| -------- | -------------------------------------------------- |
| %%       | Returns a percent sign                             |
| %b       | Binary Number                                      |
| %c       | The character according to the ASCII value         |
| %d or %i | Signed decimal number (negative, zero or positive) |
| %e or %E | Scientific notation using a lowercase (eg.1.2e+2)  |
| %u       | Unsigned Integer(equal to or greather than zero)   |
| %f       | Floating-point number (local settings aware)       |
| %s       | The String Data                                    |
| %o       | Octal number                                       |
| %x or %X | Hexadecimal                                        |

### String Methods &mdash;

| method                          | Description                                                                      |
| ------------------------------- | -------------------------------------------------------------------------------- |
| lcfirst($str)                   | Converts to first letter to uppercase                                            |
| ucwords($str)                   | converts to first letter of each word to uppercase                               |
| strtoupper($str)                | covert to all of letter to uppercase                                             |
| strtolower($str)                | convert to all of letter to lowercase                                            |
| ltrim($str)                     | removes whitespace or other predefined characters from the left side of a string |
| rtrim($str)                     | removes whitespace or other predefined characters from the left side of a string |
| trim($str)                      | removes whitespace or other predefined characters from both sides of a string    |
| strlen($str)                    | returns the length of a string                                                   |
| strpos($str, 'word')            | finds the position of the first occurrence of a string                           |
| strrpos($str, 'word')           | finds the postition of the last occurrence of a string                           |
| stripos($str, 'word')           | finds the position of the first occurrence of a string (case insensitive)        |
| strripos($str, 'word')          | finds the position of the last occurrence of a string (case insensitive)         |
| str_word_count($str)            | Return number of words found in the string                                       |
| substr(String, return, char)    | cut length of string                                                             |
| chunk_split($str, numword, '-') | Split string into chunks                                                         |
| md5($str, true/false)           | MD5 hash of the string                                                           |
| sha1($str, true/false)          | SHA-1 hash of the string                                                         |
| crypt($str, 'abcd')             | Return hashed string using DES, Blowfish or D5 Algorithms                        |

```php
md5(string, raw);
#raw - Optional, Specifies hex or binary output format
#TRUE - Raw 16 character binary format
#FLASE - Default 32 character hex number


sha1(string, raw);
#TRUE - Raw 20 character binary format
#FLASE - Default 40 character hex number
```

#### String Compare &mdash;

```php
    strcmp(arg1, arg2);

    # 0 - if the two strings are equal
    # <0 - if string1 is less than string2
    # >0 - if string1 is greater than string2
```

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
