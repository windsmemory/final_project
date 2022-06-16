<?php
require("DBconnect.php");

$uFullName=$_POST["fullname"];
$uName=$_POST["username"];
$uPwd=$_POST["password"];
$comfirm_uPwd=$_POST["comfirm_password"];
$uEmail=$_POST["email"];
$uTel=$_POST["telephone"];

$SQL1="SELECT * FROM user_account WHERE uEmail='$uEmail'";

$SQL2="SELECT * FROM user_account WHERE uTel='$uTel'";

$result1=mysqli_query($link,$SQL1);

$result2=mysqli_query($link,$SQL2);


if(mysqli_num_rows($result1)!=0){
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗，此Email已被註冊');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_enroll.php'>";
}else if($uPwd != $comfirm_uPwd){
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗，密碼與確認密碼不符');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_enroll.php'>";
}else if(mysqli_num_rows($result2)!=0){
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗，此電話已被註冊');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_enroll.php'>";
}else if($uPwd == $comfirm_uPwd && mysqli_num_rows($result1)==0){
    $SQL3="INSERT INTO user_account  (uFullName, uName, uPwd, uEmail, uTel)
    VALUES ('$uFullName','$uName','$uPwd','$uEmail','$uTel')";
    if(mysqli_query($link, $SQL3)){
        echo "<script type='text/javascript'>";
        echo "alert('註冊成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('註冊失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_enroll.php'>";
    }
}
mysqli_free_result($result1);
mysqli_free_result($result2);
?>