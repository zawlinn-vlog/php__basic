[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.github.com/zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

```sql
    SELECT
        ur.name AS User_Name,
        ur.id AS User_id,
        COUNT(tuto.id) AS Total_Tutorial,
        (
            CASE WHEN
                COUNT(tuto.id) <= 30
            THEN
                'Armature'
            ELSE
                'Genius'
            END
        ) AS Teacher_type,
        SUM(tv.static_view) AS Total_Static_View,
        sub.name AS Subject
        FROM
            users AS ur
        JOIN
            tutorials AS tuto
        ON
            ur.id=tuto.created_by
        JOIN
            tutorials_views AS tv
        ON
            tuto.id=tv.id
        JOIN
            subjects AS sub
        ON
            tuto.subject_id=sub.id
        WHERE
            ur.creator=3
        GROUP BY
            sub.id;
```

### Regular Expression &mdash;

- Sequence or pattern of characters
- Pattern-matching
- Search a particular string inside another string
- Replace one string by another string
- Split a string into many chunks

### Anchors &mdash;

```php

    $var = "Zawlinn";

    $res = preg_match("/zaw/", $var);


    # Delimiter & Case Sensitive

    # "/    /"        "%    %"
    # "+    +"        "!    !"
    # "#    #"        "@    @"

    # i - insensitive


    // preg_match("![a-z]!", $var);


    # range could be [0-9] [a-z] [A-Z] [a-Z]


    # $res = preg_replace(pattern, replace, variable);

    # \s - Spacebar include or not

    # "/p\w{2}p/i" at least 2 character follow by p

    # preg_match("/[a-zA-z]+@[a-z]+\.[a-z]{2,3}+[a-z]*$/", $var);


    $var = "Brighter Myanmar Copyright @ in 2009.";

    $res = preg_replace(
        array('/copyright/i', '/[0-9]/+'),
        array('Computer Class', '2021'),
        $var

    );

    $res = preg_replace("/[[:alpha:]]/", "", $var); # put out only number;


    # preg_split(pattern, subject, limit, flags); limit and flag are options


    # input string       PREG_SPLIT_NO_EMPTY
    # limit NULL         PREG_SPLIT_DELIM_CAPTURE
    # flags NULL         PREG_SPLIT_OFFSET_CAPTURE


    $bol = preg_match("!([.])!", $str); # find dot(.) character
    $bol = preg_match("!([^.])!", $str); # not dot(.) character


```

| Patterns     | Descriptions                                                    |
| ------------ | --------------------------------------------------------------- |
| zaw          | check if zaw contain in string                                  |
| ^zaw         | check if wai at the start of string                             |
| linn$        | cherck if linn at the end of string                             |
| ^zawlinn$    | check if zawlinn is only string                                 |
| p+           | matches any string containing at leaset one p.                  |
| p\*          | matches any string containing zero or more p's.                 |
| p?           | matches any string containing zero or more p's                  |
| p{N}         | matches any string containing a sequence of N p's               |
| p{2,3}       | containing a sequence of two or three p's                       |
| [[:alpha:]]  | containing alphabetic characters aA through zZ                  |
| [[:digit:]]  | containing numerical digits 0 through 9                         |
| [[:alnum:]]  | containing alphanumeric character aA through zZ and 0 through 9 |
| [[:space:]]  | matches any string containing a space                           |
| p.p          | containing p, followed by any character, and another p.         |
| ^.{2}$       | containing exactly two characters.                              |
| <b>(.\*)</b> | matches enclosed withiin <b> and </b>                           |
| p(hp)\*      | containing a `p` followed by zero or more sequence hp.          |
| \d           | only digit                                                      |
| \D           | none digit                                                      |
| \s           | white space                                                     |
| \S           | none white space                                                |
| \w           | a word character(a-z,A-Z, 0-9,\_)                               |
| \W           | a non-word character                                            |
| ^$           | matches empty string                                            |

```php
    #preg_match_all(pattern, subject, matches, flags);

    $str = "we are open 7:40 am and open 5:30 pm";
    preg_match_all('!(\d+:+\d+)\s*(am|pm)!', $str, $matches, PREG_SET_ORDER);
    preg_match_all('!(\d+:+\d+)\s*(am|pm)!', $str, $matches, PREG_PATTERN_ORDER);

    echo "<pre>" . print_r($matches, true) . "</pre>";

```

| Patterns | Description                        |
| -------- | ---------------------------------- |
| pattern  | Reg pattern to search for          |
| subject  | String or paragraph to match       |
| matches  | Array where all match are assigned |
| flags    | Define result order                |
|          | PREG_PATTERN_ORDER                 |
|          | PREG_SET_ORDER                     |

```php
    # \ + * ? [ ^ ] $ ( ) { } = ! < > : -
    preg_quote($str)
```

```php
    # positive Look ahead

    preg_match('/A(?=C)/', $str);
    preg_match('/A(?=\d)/', $str);
    preg_match('/A(?=\w)/', $str);

    # Positive look behind

    preg_match('/(?<=@)B/', $str);

    # Negative look ahead

    preg_match('/A(?!@)/', $str);

    # Negative look ahead

    preg_match('/(?!@)C/', $str);


    preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[\w]))/', $passwrod);

```

### Date Function &mdash;

```php
    date_default_timezone_set('Asia/Rangoon')

    getdate();

    time();

    NOW();

    $date = date('', time());
```

| Options | Descriptions                                                |
| ------- | ----------------------------------------------------------- |
| a       | 'am' or 'pm' lowercase pm                                   |
| A       | 'AM' or 'PM' uppercase PM                                   |
| d       | Day of month, a number with leading zero - 20               |
| D       | Day of week (three letters) Thu                             |
| F       | Month name january                                          |
| h       | Hour (12 hour format - leading zero) 12                     |
| H       | Hour (24 hour format - leading zero) 22                     |
| g       | Hour (12 hour format - no leading zero) 12                  |
| G       | Hour (24 hour format - no leading zero) 22                  |
| i       | Minute (0 - 59) 23                                          |
| j       | Day of the month (no leading zero) 20                       |
| l       | (Lower 'L') Day of week Thursday                            |
| L       | Leap year ('1' for yes, '0' for no)                         |
| m       | Month of year (number - leading zero)                       |
| M       | Month of year (number - no leading zero)                    |
| r       | The RFC 2022 formatted date Thu, 21 Dec 2000 16:01:07 +0200 |
| n       | Month of year (number - no leading zero)                    |
| s       | Seconds of hour                                             |
| U       | Time Stamp                                                  |
| y       | Year (two digit)                                            |
| Y       | Year (four digit)                                           |
| z       | Day of year (0 - 365)                                       |
| Z       | Offset in seconds from GMT +5                               |

<br/>

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
