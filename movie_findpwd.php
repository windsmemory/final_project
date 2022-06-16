<?php
session_start();
require("DBconnect.php");

$uName=$_POST["username"];
$uEmail=$_POST["email"];

$SQL1="SELECT * FROM user_account WHERE uName='$uName' AND uEmail='$uEmail'";
$result=mysqli_query($link,$SQL1);

if(mysqli_num_rows($result)==1){
    $SQL2="SELECT uPwd FROM user_account WHERE uName='$uName' AND uEmail='$uEmail'";
    if ($result2=mysqli_query($link,$SQL2)){
        $row=mysqli_fetch_assoc($result2);
    }
}else {
    echo "<script type='text/javascript'>";
    echo "alert('帳號或電子信箱輸入錯誤');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_forgetpwd.php'>";
}
?>

<html>

<head>
<title>MOVIE_findpwd</title>
    <meta name="keywords" content="HTML, html, Html, Hello HTML" />
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/scenarium-vol-4/128/049_popcorn_bucket_movie_theater_cinema_watch-512.png" type="image/x-icon" />
    <style type="text/css">
    a {
        color:white;
    }
    .head {
        background-color:#003344;color:white;font-weight:bold;font-size:50px;font-family:fantasy;
        text-align:center;padding:10px; 
    }
    .system_name{
        color:black;font-weight:Medium;font-size:30px;font-family:sans-serif;
        text-align:center;position:relative;top:80px;margin:30px auto;
    }
    .login_page{
        color: #df5334;
    }
    .form{
        background-color: #E0E0E0;padding: 10px;width: 230px;height: 300px;border-radius: 5px;border-top: 10px solid #df5334;
        box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);position:relative;top:100px;text-align:center;margin:10px auto;
    }
    .tab{
        margin:30px auto;color: #003344;text-align:center;
    }
    .submit{
        color: white;background: #df5334; width: 200px; height: 30px; margin: 10px; padding: 5px; border-radius: 5px; border: 0px;
    }
    </style>
</head>

<body style="margin: 0px;">
    <div class="head">MOVIE</div>
    <div class="system_name">
        
    </div>
    
    <div class="form">
        <div class="login_page">
            <h3>找回密碼</h3>
            <div class='tab'>
                <?php echo "您的密碼為<br>$row[uPwd]<br> 請妥善保存"; ?></br></br></br></br>
            </div>
            <div class='tab'>
                <input type="button" value="登入" onclick="javascript:location.href='movie_login.php'">
            </div>
        </div>
    </div>
    
</body>

