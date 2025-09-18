<?php

$con = mysqli_connect("localhost", "root", "",);

mysqli_select_db($con, "MCA_sample_1");

// if ($con) {
//     // $q = "create database MCA_sample_1";
//     $q = "create table registration (
//     fullname char(50),
//     email varchar(50),
//     password varchar(25),
//     gender char(6),
//     mobile bigint(10),
//     profile_picture varchar(100),
//     address text,
//     status char(8) default 'Inactive',
//     role char(10) default 'User'
//     )";
//     if (mysqli_query($con, $q)) {
//         echo "Table Created";
//     } else {
//         echo "Error in creating table";
//     }
    // echo "Connceted to Database";
// } else {
//     echo "Error in connection";
// }
