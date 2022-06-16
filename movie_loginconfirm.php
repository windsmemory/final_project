<?php
session_start();
require("DBconnect.php");

$uName=$_POST["username"];
$uPwd=$_POST["password"];

$SQL="SELECT * FROM user_account WHERE uName='$uName' AND uPwd='$uPwd'";

    $result=mysqli_query($link,$SQL);

    if(mysqli_num_rows($result)==1){
        if ($uName=='admin') {
            $_SESSION["login"]='Admin';
            echo "<script type='text/javascript'>";
            echo "alert('歡迎管理員登入');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=movie_admin_info.php'>";
        }else {
            $_SESSION["login"]='Yes';
            $SQL2="SELECT uNo FROM user_account WHERE uName='$uName' AND uPwd='$uPwd'";
            if ($result2=mysqli_query($link,$SQL2)){
                $row=mysqli_fetch_assoc($result2);
                $_SESSION["uNo"]=$row['uNo'];
            }
            echo "<script type='text/javascript'>";
            echo "alert('登入成功');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=movie_info.php'>";
        }
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('登入失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    }
?>