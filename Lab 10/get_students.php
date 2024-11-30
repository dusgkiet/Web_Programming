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

    //Query to get students
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    $students = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
    }

    //Close connection 
    $conn->close();

    //Return students as JSON
    header('Content-Type: application/json');
    echo json_encode($students);
?>