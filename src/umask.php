<?php

// default 0644 = rw-r--r--
// we want 0400 = r--------
// 0777 - 0400 = 0377
umask(0377);

// The file will be created with permissions 0400
fopen('test.txt', 'w');
