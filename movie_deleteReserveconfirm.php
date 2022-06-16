<?php
session_start();
require("DBconnect.php");

$rNo = $_POST["rNo"];

$SQL = "DELETE FROM user_reserve WHERE rNo = '$rNo';";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('取消成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_info.php'>";
}else {
    echo "<script type='text/javascript'>";
    echo "alert('取消失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_deleteReserve.php'>";
}
?>