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
$SQL="SELECT * FROM user_account WHERE uNo='$_SESSION[uNo]'";
if ($result=mysqli_query($link,$SQL)){
    $row=mysqli_fetch_assoc($result);
}
?>

<html>

<head>
<title>會員專區</title>
    <meta name="keywords" content="HTML, html, Html, Hello HTML" />
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/scenarium-vol-4/128/049_popcorn_bucket_movie_theater_cinema_watch-512.png" type="image/x-icon" />
    <style type="text/css">
    a {
        color:#003344;
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
    .form{
        background-color: #E0E0E0;padding: 10px;width: 500px;height: 300px;border-radius: 5px;border-top: 10px solid #df5334;
        box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);position:relative;top:100px;text-align:center;margin:10px auto;
    }
    .tab{
        margin:30px auto;color: #003344;text-align:center;
    }
    .submit{
        color: white;background: #df5334; width: 200px; height: 30px; margin: 10px; padding: 5px; border-radius: 5px; border: 0px;
    }
    .bottom{
        margin:30px auto;color: #003344;text-align:center;
    }
    table.TB_COLLAPSE {
        width:100%;
        border-collapse:collapse;
    }
    table.TB_COLLAPSE caption {
        padding:10px;
        font-size:24px;
        background-color:#f3f6f9;
    }
        table.TB_COLLAPSE thead th {
        padding:5px 0px;
        color:#fff;
        background-color:#003344;
    }
        table.TB_COLLAPSE tbody td {
        padding:5px 0px;
        color:#555;
        text-align:center;
        background-color:#fff;
        border-bottom:1px solid #915957;
    }
        table.TB_COLLAPSE tfoot td {
        padding:5px 0px;
        text-align:center;
        background-color:white;
    }
    </style>
</head>

<body style="margin: 0px;">
    <div class="head">MOVIE</div>
    <div class="form">
        <div class="login_page">
            <h3>會員資訊</h3>
            <?php
                echo "<table class='TB_COLLAPSE'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>會員姓名</th>";
                echo "<th>會員帳號</th>";
                echo "<th>電子信箱</th>";
                echo "<th>手機號碼</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tfoot>";
                echo "<tr>";
                echo "<td>".$row["uFullName"]."</td><td>".$row["uName"]."</td><td>".$row["uEmail"]."</td><td>".$row["uTel"]."</td>";
                echo "</tr>";
                echo "</tfoot>";
                echo "</table>";
            ?>     
        </div> 
        <div class="tab">
            <br><br><br><br></br>
            <a href="movie_info.php">回首頁</a>&nbsp&nbsp <a href="movie_ticketck.php">訂票查詢</a> 
        </div>    
    </div>     
</body>

</html>