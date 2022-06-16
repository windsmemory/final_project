<?php
session_start();
require("DBconnect.php");

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Yes'){
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('請先登入帳號');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('請先登入帳號');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    exit();
}
$uNo = $_SESSION['uNo'];
$SQL1="SELECT rNo FROM user_reserve WHERE uNo = '$uNo'";
$result1=mysqli_query($link,$SQL1);

if(mysqli_num_rows($result1)>0){
    while ($row = mysqli_fetch_assoc($result1)) {
        // 每跑一次迴圈就抓一筆值，最後放進data陣列中
        $datas[] = $row;
    }
}
mysqli_free_result($result1);
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
    .select{
        width: 170px; height: 20px; text-align:center;
    }
    .submit{
        color: white;background: #df5334; width: 200px; height: 30px; margin: 60px 10px 10px; padding: 5px; border-radius: 5px; border: 0px;
    }

    </style>

</head>

<body style="margin: 0px;">
    <div class="head">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMOVIE
        <div class="leftset">&nbsp&nbsp&nbsp&nbsp<a href="movie_logout.php">登出</a></div>
        <div class="leftset">&nbsp&nbsp&nbsp&nbsp<a href="movie_member.php">會員專區</a></div>
        <div class="leftset"><a href="movie_info.php">首頁</a></div>
    </div>
    </div>

    <div class="system_name">
        歡迎來到MOVIE會員專區
    </div>
    <div class="form">
        <div class="login_page">
            <h3>訂票</h3>
            <form action="movie_deleteReserveconfirm.php" method="post" >
                <div class="tab">    
                <select name="rNo" class= select>
                    <option>請選擇訂單編號</option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '0'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '1'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '2'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '3'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '4'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '5'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '6'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '7'){echo "$va2";}$count = $count + 1;}}?></option>
                    <option><?php $count = 0; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '8'){echo "$va2";}$count = $count + 1;}}?></option>
                </select>
                <div class="tab">
                    <input type="submit" value="取消訂單" class="submit" >
                </div>
                <a href="movie_ticketck.php"style = "color: black";>訂票查詢</a>
            </form>
            <div class="tab">&nbsp</div>
        </div>
    </div>
</body>



</html>