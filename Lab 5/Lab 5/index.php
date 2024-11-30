<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Tạo Danh Bạ</title>
</head>
<body>
    <from action="xuly.php" method="post">
        Tên: <input type="text" id="ten" name="ten"><br>
        Điện Thoại: <input type="tel" id="sophone" name="sophone"><br>
        Địa Chỉ: <input type="text" id="diachi" name="diachi"><br>
        <input type="submit" value="Thêm danh bạ"> 
    </from>
    <table border="1">
        <thread>
            <tr>
                <th>Tên</th>
                <th>Điện Thoại</th>
                <th>Địa Chỉ</th>
            </tr>
        </thread>
        <tbody>
            <?php 
                $conn = mysqli_connect("localhost","root","","qldienthoai");
                // kiểm tra kết nối
                if(!$conn)
                {
                    die("Kết nối thất bại".mysqli_connect_error());
                }
                // truy vấn
                $sql = "Select * From lienlac";
                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0) 
                {
                    while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$row["ten"]."</td>";
                            echo "<td>".$row["sophone"]."</td>";
                            echo "<td>".$row["diachi"]."</td>";
                            echo "</tr>";
                        }
                }
                else
                {
                    echo "<tr><td colspan='3'>Không có danh bạ nào.</td></tr>";
                }
                // đóng kết nối
                mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>