<?php
header("Content-Type:text/html;charset=utf8");
include"../config.php";
//连接打开数据库
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
if (!$conn) {
    die("错误编号是:" . mysqli_connect_errno() . "<br />错误信息是:" . mysqli_connect_error());
} else {
    $sql = "CREATE DATABASE email DEFAULT CHARACTER SET utf8";
    if (mysqli_query($conn, $sql)) {
        echo "成功创建数据库email<br />";
    } else {
        echo "创建数据库email失败<br />";
    }
}
?>