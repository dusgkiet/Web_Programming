<?php
require_once '../admin/database/dbcon.php' ;
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
    $id = $_GET['id'];
    $sql = "DELETE FROM tintuc WHERE matin ='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa thành công!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
        //$conn->close();
        mysqli_close($conn);
}
header ("location: quanly_tintuc.php");
?>