<?php
session_start();
require("DBconnect.php");

?>

<html>

<head>
<title>MOVIE_login</title>
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
        background-color: #E0E0E0;padding: 10px;width: 300px;height: 450px;border-radius: 5px;border-top: 10px solid #df5334;
        box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);position:relative;top:90px;text-align:center;margin: auto;
    }
    .submit{
        color: white;background: #df5334; width: 200px; height: 30px; margin: 10px; padding: 5px; border-radius: 5px; border: 0px;
    }
    </style>
</head>

<body style="margin: 0px;">
    <div class="head">MOVIE</div>
    <div class="system_name">
        歡迎來到MOVIE
    </div>
    <div class="form">
        <div class="login_page">
            <h3>註冊 Sign Up</h3>
            <form action="movie_enrollconfirm.php" method="post" >
                <div class="tab">    
                    <input type="text" id="fullname" name="fullname" placeholder="使用者全名" required>
                </div>
                <div class="tab">    
                    <input type="text" id="username2" name="username" placeholder="帳號" required>
                </div>
                <div class="tab">    
                    <input type="password" id="password2" name="password" placeholder="密碼" required>
                </div>
                <div class="tab">    
                    <input type="password" id="comfirm_password" name="comfirm_password" placeholder="確認密碼" required>
                </div>
                <div class="tab">    
                    <input type="email" id="email" name="email" placeholder="電子信箱" required>
                </div>
                <div class="tab">    
                    <input type="tel" id="telephone" name="telephone" placeholder="電話" required>
                </div>
                <div class="tab">
                    <input type="submit" value="註冊" class="submit" >
                </div>
                <div class="tab">
                <a href="movie_login.php"style = "color: black";>登入帳號</a>&nbsp&nbsp 
                </div>
            </form>
            <div class="tab">
                &nbsp
            </div>
        </div>
    </div>
</body>

</html>