<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "pegawai";
 
     //create connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
 
     //check connection
     if(!$conn){
         die("Connection failed: ". mysqli_connect_error());
     }
 
     //create table
     $sql = "CREATE TABLE pegawai (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
     nama VARCHAR(200) NOT NULL,
     email VARCHAR(50) NOT NULL,
     departemen TEXT NOT NULL) ";
 
     if(mysqli_query($conn, $sql)){
         echo "table created successfully";
     }
     else{
        echo "Error inserting data: ". $sql."<br>". mysqli_error($conn);
     }

     mysqli_close($conn);
?>