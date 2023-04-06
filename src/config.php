<?php
define('DB_SERVER','mysql-server');
define('DB_USERNAME','root');
define('DB_PASSWORD','secret');
define('DB_NAME','mydb');
// trying connecting to database
$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
// CHECK THE CONNECTION
if($conn==false)
{
    dir('Error: Cannot connect');
}
?>