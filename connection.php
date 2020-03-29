<?php

 // configurasi
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "db_perjalanan";

 // koneksi
 $conn = new mysqli($host, $user, $pass, $db);

 //cek koneksi
 if ($conn->connect_errno) {
    die($conn->connect_errno);
 } 
 ?>
