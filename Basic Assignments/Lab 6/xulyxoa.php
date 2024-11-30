<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy mã từ form
    $ma = $_POST['ma'];

    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli('localhost', 'root', '', 'tintuconline');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Xóa dữ liệu từ cơ sở dữ liệu
    $sql = "DELETE FROM loaitin WHERE ma='$ma'";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
}
?>
