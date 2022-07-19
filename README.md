# PHP Umask Sample

Umask subtracts permissions for files and directories on creation.

Permission values:
- **0** = --- no permission
- **1** = --x execute
- **2** = -w- write
- **3** = -wx write and execute
- **4** = r-- read
- **5** = r-x read and execute
- **6** = rw- read and write
- **7** = rwx read, write and execute

Sample:
```php
<?php

// default 0644 = rw-r--r--
// we want 0400 = r--------
// 0777 - 0400 = 0377
umask(0377);

// The file will be created with permissions 0400
fopen('test.txt', 'w');
```
[Go To Sample](https://github.com/grn-it/php-umask-sample/blob/main/src/umask.php)
