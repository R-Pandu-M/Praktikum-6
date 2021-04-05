<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tartali";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connection
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    //create table
    $sql = "CREATE TABLE liga (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion INT(3)) ";

    if(mysqli_query($conn, $sql)){
        echo "table created successfully";
    }
    else{
        echo "Error creating table: ". mysqli_error($conn);
    }

    //input data
    $sql = "INSERT INTO liga (kode, negara, champion)
    VALUE ('Jer', 'Jerman', '4')";

    $sql = "INSERT INTO liga (kode, negara, champion)
    VALUE ('Spa', 'Spanyol', '3')";

    $sql = "INSERT INTO liga (kode, negara, champion)
    VALUE ('Eng', 'England', '4')";

    if(mysqli_query($conn, $sql)){
        echo "successfully inserting data";
    }
    else{
        echo "Error inserting data: ". $sql."<br>". mysqli_error($conn);
    }

    mysqli_close($conn);
?>