<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'php_test';


$conn = mysqli_connect($host,$username,$password,$db) or die(mysqli_errno(1));
if($conn){

}else{
    echo 'db error';
    return;
}






?>