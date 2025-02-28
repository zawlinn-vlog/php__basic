[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.github.com/zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

### File Create, Written, Read and Applied &mdash;

#### Create File &mdash;

```php
    $filepath = "./assets/doc/comment.txt";

    if(file_exists($file)){
        fopen($filepath, "w"); # WRITE MODE
    }
```

#### Written Data on File &mdash;

```php
    if(file_exists($file)){
        $handler = fopen($file, 'w');
        fwrite($handler, $commentsData);
        $dataString = 'File is Written.';
        fclose($handler);
    }
```

#### Read Data on File &mdash;

```php
  if(file_exists($file)){
    $filepath = "./assets/doc/comment.txt";
    $fsize = filesize($filepath);
    $handler = fopen($filepath, "r"); # READ MODE
    $data = fread($handler, $fsize);
    echo $data;
  }
```

or

```php
    if(isset($_REQUEST["open"])){
        if(file_exists($file)){
            $dataString = file_get_contents($file);
        }
    }
```

#### Applied Data on File &mdash;

```php
  if(file_exists($file)){
    $filepath = "./assets/doc/comment.txt";
    $handler = fopen($filepath, "a"); # APPLY MODE
    fwrite($handler, "Data String");
    fclose($handler);
  }
```

<br>

<!-- ![Screenshot of Project](./s1.png) -->

What I use packages are &mdash;

[![My Skills](https://skillicons.dev/icons?i=mysql,npm,git,github,vscode,php&perline=3)](https://skillicons.dev)

<br>

[![PHP PREPROCESSOR: Introduction](https://img.shields.io/badge/PHP_PREPROCESSOR_—-000?style=for-the-badge—=ko-fi—=white)](#)

📫 Reach me out!

[![Facebook Badge](https://img.shields.io/badge/-@zawlinn_vlog-1ca0f1?style=flat&labelColor=1ca0f1&logo=facebook&logoColor=white&link=https://faebook.com/zawlinn_profile)](https://facebook.com/zawlinn.vlog)
[![youtube Badge](https://img.shields.io/badge/-zawlinn_vlog-c0392b?style=flat&labelColor=c0392b&logo=youtube&logoColor=white)](https://youtube.com/@zawlinn-vlog)
[![Gamil Badge](https://img.shields.io/badge/-zawlinn.profile-c0392b?style=flat&labelColor=c0392b&logo=gmail&logoColor=white)](mailto:zawlinn.profile@gmail.com)

<!-- TODO: Add last video link -->

<details>
    <summary>
        My Portfolio &mdash;
    </summary>
    <br/>

- :earth_asia: I’m currently working at @Mae Sot Market as a sale staff
- :computer: Most used line of code git commit -m "Initial Commit"
- :brain: I’m looking for help with Outstanding Video ideas.
- :mailbox_with_mail: How to reach me: zawlinn.profile@gmail.com.
- :heart: In a relationship with React
</details>
