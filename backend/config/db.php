<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ums');

define('JWT_SECRET', 'ChangeThisToALongRandomSecretKey123456');
define('JWT_ISSUER', 'UMS');
define('JWT_AUDIENCE', 'UMS_CLIENT');
define('JWT_EXPIRE', 3600); // 1 hour

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>