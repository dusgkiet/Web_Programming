<?php
    require_once("database.php");
    try
    {
        //Lấy mã và tên danh mục từ from
        if(isset($_POST["txtten"]))
            $tendm = $_POST["txtten"];
        if(isset($_POST["txtma"]))
            $madm = $_POST["txtma"];
        //Cập nhật danh mục vào csdl
        $sql = "UPDATE danhmuc SET tendm = '$tendm' WHERE madm = $madm";
        $db->exec($sql);
    }
    catch(PDOException $e)
    {
        $error_message = $e->getMessage();
        include("database_error.php");
        exit();
    }
    //Quay về trang quản lí danh mục chính
    header("Location: category_list.php");
?>