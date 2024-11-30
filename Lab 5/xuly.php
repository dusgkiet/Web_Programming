<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST") 
    {
        $conn = mysqli_connect("localhost","root","","qllienhe");
        // kiểm tra kết nối
        if(!$conn)
        {
            die("Kết nối thất bại".mysqli_connect_error());
        }
        // lấy dữ liệu
        $ho = $_POST["ho"];
        $ten = $_POST["ten"];
        $email = $_POST["email"];
        // chèn dữ liệu
        $sql = "Insert into danhba(ho,ten,email) value('$ho','$ten','$email')";
        if(mysqli_query($conn,$sql))
        {
            echo "Thêm thành công";
        }
        else
        {
            echo "Lỗi".$sql."<br>".mysqli_error($conn);
        }
        // đóng kết nối
        mysqli_close($conn);
    }
?>