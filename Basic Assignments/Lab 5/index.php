<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Tạo Danh Bạ</title>
</head>
<body>
    <from action="xuly.php" method="post">
        Họ    :   <input type="text" id="ho" name="ho"><br>
        Tên   :   <input type="text" id="ten" name="ten"><br>
        Email :   <input type="email" id="email" name="email"><br>
        <input type="submit" value="Lưu"> 
    </from>
    <table border="1">
        <thread>
            <tr>
                <th>Họ</th>
                <th>Tên</th>
                <th>Email</th>
            </tr>
        </thread>
        <tbody>
            <?php 
                $conn = mysqli_connect("localhost","root","","qllienhe");
                if(!$conn)
                {
                    die("Kết nối thất bại".mysqli_connect_error());
                }
                $sql = "Select * From danhba";
                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0) 
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row["ho"]."</td>";
                        echo "<td>".$row["ten"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "</tr>";
                    }
                }
                else
                {
                    echo "<tr><td colspan='3'>Không có danh bạ nào.</td></tr>";
                }
                mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>