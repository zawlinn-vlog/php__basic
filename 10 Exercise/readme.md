[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.github.com/zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

- Send plain text mail to single user
- Send plain text mail to multiple user
- Send html mail to multiple user # Local Mail / Online Server Mail

```php
    mail(to, subject, message, header, parameters);

    # to, subject, message, header - important
```

| Options    | Descriptions                       |
| ---------- | ---------------------------------- |
| to         | to which email the message is sent |
| subject    | Title of the message               |
| message    | Text/html data to send             |
| headers    | content type                       |
| parameters |                                    |

```php
    $ary = ['Waifer@localhost', 'biber@localhost', 'tester@localhost']; # 'waifer@localhost', 'biber@localhost'
    $to = implode(',', $ary);
    $subject = "PHP Mail Test";
    $message = "This is just testin php mail server.";
    $header = "From: MMPHPTuto@gmail.com\r\n";
    $header .= "Content-Type:text/html";

    $bol = mail($to, $subject, $message, $header);

    echo $bol ? "Success": "Fail";
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
