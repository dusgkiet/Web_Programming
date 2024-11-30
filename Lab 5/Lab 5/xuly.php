<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST") 
    {
          $conn = mysqli_connect("localhost","root","","qldienthoai");
          // kiểm tra kết nối
          if(!$conn)
          {
                    die("Kết nối thất bại".mysqli_connect_error());
          }
          // lấy dữ liệu
          $ten = $_POST["ten"];
          $sophone = $_POST["sophone"];
          $diachi = $_POST["diachi"];
          // chèn dữ liệu
          $sql = "Insert into lienlac(ten,sophone,diachi) value('$ten','$sophone','$diachi')";
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