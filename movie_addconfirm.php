<?php
session_start();
require("DBconnect.php");

$movie = $_POST["mName"];
$mPicture = $_POST["mPicture"];

$SQL1="SELECT * FROM current_movie WHERE mName='$movie'";

$result1=mysqli_query($link,$SQL1);

if(mysqli_num_rows($result1)!=0){
    echo "<script type='text/javascript'>";
    echo "alert('新增失敗，此電影名稱已存在');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_add.php'>";
}else{
    $SQL3="INSERT INTO current_movie  (mName, mPicture)
    VALUES ('$movie','$mPicture')";
    if(mysqli_query($link, $SQL3)){
        echo "<script type='text/javascript'>";
        echo "alert('新增成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_admin_info.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('新增失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_add.php'>";
    }
}
mysqli_free_result($result1);
?>