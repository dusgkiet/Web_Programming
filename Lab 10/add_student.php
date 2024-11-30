<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_sinhvien";
 
    //Create Connection
    $conn = new mysqli($severname, $username, $password, $dbname);
 
    //Check connection
    if ($conn->connect_error) {
        die("Kết nối thất bại: ".$conn->connect_error);
    }

    //Get data from Ajax POST request
    $name = $_POST['name'];
    $age = $_POST['age'];

    //Insert new student
    $sql = "INSERT INTO students (name, age) VALUES ('$name', $age)";
    $conn->query($sql);

    //Close connection 
    $conn->close();
?>