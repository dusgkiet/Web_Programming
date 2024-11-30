<?php
    require_once("database.php");
    try
    {
        //lấy danh mục do người dùng nhập từ from
        if(isset($_POST["txtma"])) 
            $madm = $_POST["txtma"];
        if(isset($_POST["txtten"]))
            $tenadm = $_POST["txtten"]; 
        //Thêm mới danh mục vào csdl
        $sql = "INSERT INTO danhmuc(madm,tendm) VALUES('$madm','$tendm')";
        $db->exec($sql);
    }
    catch(PDOException $e)
    {
        $error_message = $e->getMessage();
        include("database_error.php");
        exit();
    }
    header("Location:");
?>