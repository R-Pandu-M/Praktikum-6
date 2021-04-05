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

    //input data
    $sql = "INSERT INTO tamu (id_bt, nama, email, isi)
    VALUE ('001', 'Albedo', 'kreideprinz@gmail.com', 'Menggabut')";

    $sql = "INSERT INTO tamu (id_bt, nama, email, isi)
    VALUE ('002', 'Tartaglia', 'ajaxganteng@gmail.com', 'Ngapel')";

    $sql = "INSERT INTO tamu (id_bt, nama, email, isi)
    VALUE ('003', 'Xiao', 'emoyaksha@gmail.com', 'Ngusir Tartaglia')";
    
    if(mysqli_query($conn, $sql)){
        echo "successfully inserting data";
    }
    else{
        echo "Error inserting data: ". $sql."<br>". mysqli_error($conn);
    }

    mysqli_close($conn);
?>