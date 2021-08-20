<?php

$host='localhost';
$username='root';
$password='';
$DB_name='bearingandmore';

$conn=mysqli_connect($host,$username,$password,$DB_name);

//mysqli_set_charset ($conn, "utf8");


if (!$conn){

echo mysqli_connect_error ("خطا فى عملية الاتصال") . mysqli_connect_errorno();

}

/*
function close_db(){
global $coon;
mysqli_close($coon);

}*/


  ?>