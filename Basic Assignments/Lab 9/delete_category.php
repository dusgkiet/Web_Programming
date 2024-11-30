<?php
    require_once("database.php");
    try
    {
        //Lấy mã danh mục trong trường hidden
        if(isset($_POST["txtmadm"]))
            $madm = $_POST["txtmadm"];
        //Xóa danh mục khỏi csdl
        $sql = "DELETE FROM danhmuc WHERE madm=$madm";
        $db->query("$sql");
    }
    catch(PDOException $e)
    {
        $error_message = $e->getMessage();
        include("database_error.php");
        exit();
    }
    //Quay về trang quản lí danh mục chính
    header("Location: categoeey_list.php");
?>