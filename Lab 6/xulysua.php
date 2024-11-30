<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $ma = $_POST['ma'];
    $tenloai = $_POST['tenloai'];
    $trangthai = $_POST['trangthai'];

    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli('localhost', 'root', '', 'tintuconline');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Cập nhật dữ liệu trong cơ sở dữ liệu
    $sql = "UPDATE loaitin SET tenloai='$tenloai', trangthai='$trangthai' WHERE ma='$ma'";
    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
}
?>
