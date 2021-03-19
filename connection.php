<?php
    $host="localhost";
    $user="";
    $password="";
    $dbName="payment";
    $conn=mysqli_connect($host,$user,$password,$dbName) or die("Can't able to connect database");
    $table1="CREATE table IF NOT EXISTS add_details(id INT(11) primary key AUTO_INCREMENT,card_number int(11) not null)";
    mysqli_query($conn,$table1);
    $table2="CREATE TABLE if not exists transactions(id INT(11) PRIMARY KEY AUTO_INCREMENT,payment_method varchar(40) not null,card_name varchar(50) not null,card_number int(11) not null,expiry_date date not null,cvv_code int(7) not null,Amount int(11))";
    mysqli_query($conn,$table2);
    $insert1="INSERT INTO `add_details` (`id`, `card_number`) VALUES ('1', '23948533'),('2', '365746353');";
    mysqli_query($conn,$insert1);
?>