<?php

$host='localhost';
$username='root';
$password='';
$DB_name='r';

$conn=mysqli_connect($host,$username,$password,$DB_name);

mysqli_set_charset ($conn, "utf8");


if (!$conn){

echo mysqli_connect_error ("خطا فى عملية الاتصال");

}

/*
function close_db(){
global $coon;
mysqli_close($coon);

}*/


  ?>