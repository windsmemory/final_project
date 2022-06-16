<?php
session_start();
require("DBconnect.php");

$movie = $_POST["movie"];

$SQL = "DELETE FROM current_movie WHERE mName = '$movie';";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('下架成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_admin.php'>";
}else {
    echo "<script type='text/javascript'>";
    echo "alert('下架失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_admin.php'>";
}
?>