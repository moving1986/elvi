<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DB", "elvi");


$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die ("Нет соеденения с базой данных");
mysqli_set_charset($connection,"utf8") or die ("Не установлена кодировка");
