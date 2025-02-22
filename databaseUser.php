<?php
  $hostName="localhost";
  $userName="root";
  $password="";
  $db="roomrent";
  $conn=new mysqli($hostName,$userName,$password,$db);
  $userDB="CREATE TABLE userdetails(
    id int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(220),
    MiddleName VARCHAR(220),
    LastName VARCHAR(220),
    email VARCHAR(220),
    userName VARCHAR(220),
    password VARCHAR(220)
  );";
//   $executeUserDB=mysqli_query($conn,$userDB);
$ownerDB="CREATE TABLE ownerdetails(
    id int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(220),
    MiddleName VARCHAR(220),
    LastName VARCHAR(220),
    email VARCHAR(220),
    userName VARCHAR(220),
    password VARCHAR(220)
  );";
//   $executeUserDB=mysqli_query($conn,$ownerDB);
?>