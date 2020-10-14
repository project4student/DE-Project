<?php
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password);
if(!$conn){
    die("Connection Error:".mysqli_conn_error());
}

$sql="CREATE DATABASE IF NOT EXISTS `bbms`";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error:".mysqli_error($conn);
}

$database="bbms";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Connection Error:".mysqli_conn_error());
}

$sql="CREATE TABLE IF NOT EXISTS `bbms`.`user02` ( `Email` VARCHAR(50) NOT NULL , `Name` VARCHAR(40) NOT NULL , `Mobile No.` VARCHAR(10) NOT NULL , `Gender` VARCHAR(10) NOT NULL , `Blood Group` VARCHAR(6) NOT NULL , `DOB` DATE NOT NULL , `Password` VARCHAR(40) NOT NULL , `Time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, UNIQUE (`Email`), UNIQUE (`Mobile No.`)) ENGINE = InnoDB";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error:".mysqli_error($conn);
}

?>