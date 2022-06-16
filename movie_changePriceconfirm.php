<?php
session_start();
require("DBconnect.php");

$student_ticket = $_POST["student_ticket"];
$adult_ticket = $_POST["adult_ticket"];

if($student_ticket>0 && $adult_ticket>0){
    $SQL1="UPDATE ticket_price SET Price = '$student_ticket' WHERE tName = '學生票'";
    $SQL2="UPDATE ticket_price SET Price = '$adult_ticket' WHERE tName = '全票'";
    if(mysqli_query($link, $SQL1) && mysqli_query($link, $SQL2)){
        echo "<script type='text/javascript'>";
        echo "alert('修改成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_admin_info.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('修改失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_changePriceconfirm.php'>";
    }
}else if($student_ticket>0){
    $SQL3="UPDATE ticket_price SET Price = '$student_ticket' WHERE tName = '學生票'";
    if(mysqli_query($link, $SQL3)){
        echo "<script type='text/javascript'>";
        echo "alert('修改成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_admin_info.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('修改失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_changePriceconfirm.php'>";
    }
}else if($adult_ticket>0){
    $SQL4="UPDATE ticket_price SET Price = '$adult_ticket' WHERE tName = '全票'";
    if(mysqli_query($link, $SQL4)){
        echo "<script type='text/javascript'>";
        echo "alert('修改成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_admin_info.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('修改失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_changePriceconfirm.php'>";
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('修改失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_changePriceconfirm.php'>";
}
?>