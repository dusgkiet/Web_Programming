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
    try {
        // Thêm dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO loaitin (ma, tenloai, trangthai) VALUES ('$ma', '$tenloai', '$trangthai')";
        if ($conn->query($sql) === TRUE) {
            echo "Thêm mới thành công";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
    } catch (mysqli_sql_exception $e) {
        echo "Lỗi khi thêm mới: " . $e->getMessage();
    }

    // Đóng kết nối
    $conn->close();
}
?>
