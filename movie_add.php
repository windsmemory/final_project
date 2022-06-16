<?php
session_start();
require("DBconnect.php");

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Admin'){
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('請先登入管理員帳號');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('請先登入管理員帳號');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    exit();
}

?>

<html>

<head>
<title>MOVIE</title>
    <meta name="keywords" content="HTML, html, Html, Hello HTML" />
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/scenarium-vol-4/128/049_popcorn_bucket_movie_theater_cinema_watch-512.png" type="image/x-icon" />
    <style type="text/css">
        a {
        color:white;
        text-decoration: none;
    }
    .head {
        background-color:#003344;color:white;font-weight:bold;font-size:50px;font-family:fantasy;
        text-align:center;padding:10px; 
    }
    .leftset {
        text-align:right;font-size:15px;float:right;
    }
    .system_name{
        color:black;font-weight:Medium;font-size:30px;font-family:sans-serif;
        text-align:center;position:relative;top:80px;margin:30px auto;
    }
    .login_page{
        color: #df5334;
    }
    .tab{
        margin:25px auto;
    }
    .form{
        background-color: #E0E0E0;padding: 10px;width: 300px;height: 300px;border-radius: 5px;border-top: 10px solid #df5334;
        box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);position:relative;top:90px;text-align:center;margin: auto;
    }
    .submit{
        color: white;background: #df5334; width: 200px; height: 30px; margin: 10px; padding: 5px; border-radius: 5px; border: 0px;
    }
    </style>
</head>

<body style="margin: 0px;">
    <div class="head">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMOVIE
        <div class="leftset">&nbsp&nbsp&nbsp&nbsp<a href="movie_logout.php">登出</a></div>
        <div class="leftset">&nbsp&nbsp&nbsp&nbsp<a href="movie_admin.php">管理員專區</a></div>
        <div class="leftset"><a href="movie_admin_info.php">首頁</a></div>
    </div>
    <div class="system_name">
        歡迎來到MOVIE管理員電影新增專區
    </div>
    <div class="form">
        <div class="login_page">
            <h3>電影新增</h3>
            <form action="movie_addconfirm.php" method="post" >
                <div class="tab">    
                    <input type="text" id="mName" name="mName" placeholder="電影名稱" required>
                </div>
                <div class="tab">    
                    <input type="text" id="mPicture" name="mPicture" placeholder="電影圖片" required>
                </div>
                <div class="tab">
                    <input type="submit" value="新增電影" class="submit" >
                </div>
                <div class="tab">
                <a href="movie_change.php"style = "color: black";>電影下架</a>&nbsp&nbsp 
                </div>
            </form>
            <div class="tab">
                &nbsp
            </div>
        </div>
    </div>
</body>

</html>