<?php
session_start();
require("DBconnect.php");

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Yes'){
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('請先登入會員');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('請先登入會員');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    exit();
}

$movie = $_POST["movie"];
$date = $_POST["date"];
$time = $_POST["time"];
$uNo = $_SESSION["uNo"];
$student_ticket = $_POST["student_ticket"];
$adult_ticket = $_POST["adult_ticket"];

if($student_ticket+$adult_ticket <= 0){
    echo "<script type='text/javascript'>";
    echo "alert('票數輸入錯誤');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_reserve.php'>";
} else {
    $SQL = "INSERT INTO user_reserve (uNo, mName, mDate, mTime, student_ticket, adult_ticket)
    VALUES ('$uNo','$movie','$date', '$time','$student_ticket','$adult_ticket')";
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('訂票成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_info.php'>";
    }else {
        echo "<script type='text/javascript'>";
        echo "alert('訂票失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_reserve.php'>";
    }
}

?>