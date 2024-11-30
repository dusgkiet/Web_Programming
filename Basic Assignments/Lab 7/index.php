<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web tìm kiếm</title>
</head>
<body>
    <?php
    // kết nối csdl
    $conn = mysqli_connect("localhost","root","","quanlysinhvien");

    // truy vấn dữ liệu
    if(isset($_GET["tim"])&& !empty($_GET["tim"])){
        $key = $_GET["tim"];
        $sql = "Select * from sinhvien Where idSV LIKE '%$key%'
         or fullname LIKE '%$key%'
         or gender LIKE '%$key%'
         or date LIKE '%$key%'";
    }
    else {
        $sql = "Select * from sinhvien";
    }
    $result = mysqli_query($conn,$sql);
    ?>

    <h3 align="center">
        Danh sách sinh viên
    </h3>
    <table class="tim-form" align="center" cellpadding = "5">
        <tr>
            <td>
                <form action="" method="get">
                    <input type="text" name="tim" 
                    placeholder="Nhập từ khóa cần tìm"
                    value="<?php if(isset($_GET["tim"])) {
                        echo $_GET["tim"];
                    }
                    ?>">
                    <input type="submit" value="Tìm">
                    <input type="button" value="Tất cả" onclick="window.location.href='index.php'">
                </form>
            </td>
        </tr>
    </table>
    <table border="1" align="center" cellspacing="0" cellspacing="0" width="850px">
        <tr>
            <th>Mã sinh viên</th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
            <th>Năm sinh</th>
            <th>Ngành học</th>
        </tr>
        <?php
        // in ra danh sách
        while($row = mysqli_fetch_array($result)){
            $maSV = $row["idSV"];
            $tenSV = $row["fullname"];
            $gioitinh = $row["gender"];
            $diachi = $row["address"];
            $ngaysinh = $row["date"];
            $nganhhoc = $row["specialized"];
        ?>
        <tr>
            <td><?php echo $maSV ?></td>
            <td><?php echo $tenSV ?></td>
            <td><?php if($gioitinh==0)echo "Nam";
                else if($gioitinh==1)echo "Nữ"; ?></td>
            <td><?php echo $diachi ?></td>
            <td><?php echo $ngaysinh ?></td>
            <td><?php echo $nganhhoc ?></td>
        </tr>
        <?php
        }
        mysqli_close($conn);
        ?>
        <tr>
            <td colspan="6" align="center">
                <button type="button" onclick="myFunction()">Thêm mới</button>
            </td>
        </tr>
    </table>
</body>
</html>
<script>
    function myFunction(){
        location.replace("themdulieu.php");// điều hướng đến trang thêm mới dữ liệu
    }
</script>
