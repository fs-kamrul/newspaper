<?php

$dbhost = "localhost";

$dbuser = "kamrul";

$dbpass = "12345678";

$dbname = "code_newspaper";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysqli_select_db($conn,$dbname) or die ('Unable to select database!');

?>
