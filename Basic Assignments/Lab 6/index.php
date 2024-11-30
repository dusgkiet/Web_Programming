<!DOCTYPE html>
<html>
<head>
    <title>QUẢN LÝ LOẠI TIN</title>
</head>
<body>
    <h1>QUẢN LÝ LOẠI TIN</h1>
    <button onclick="location.href='themmoi.php'">Thêm mới</button>
    <table border="1" align="center" cellspacing="0" cellpadding="0" width="850px">
        <tr>
            <th>Mã</th>
            <th>Tên loại</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>

        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        // Kết nối đến cơ sở dữ liệu
        $conn = new mysqli('localhost', 'root', '', 'tintuconline');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Lấy dữ liệu từ cơ sở dữ liệu
        $sql = "SELECT * FROM loaitin";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr align='center' cellspacing='0' cellpadding='0' width='850px'>";
                echo "<td>" . $row["ma"] . "</td>";
                echo "<td>" . $row["tenloai"] . "</td>";
                echo "<td>" . $row["trangthai"] . "</td>";
                echo "<td><button onclick=\"location.href='sua.php?ma=" . $row["ma"] . "'\">Sửa</button></td>";
                echo "<td><button onclick=\"location.href='xoa.php?ma=" . $row["ma"] . "'\">Xóa</button></td>";
                echo "</tr>";
            }
        } else {
            echo "Không có dữ liệu";
        }

        // Đóng kết nối
        $conn->close();
        ?>
    </table>
</body>
</html>
