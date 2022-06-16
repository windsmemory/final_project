<?php
session_start();
require("DBconnect.php");

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Admin'){
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('管理員登入失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('管理員登入失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=movie_login.php'>";
    exit();
}

$SQL1="SELECT mPicture FROM current_movie ";
$result1=mysqli_query($link,$SQL1);

if(mysqli_num_rows($result1)>0){
    while ($row = mysqli_fetch_assoc($result1)) {
        // 每跑一次迴圈就抓一筆值，最後放進data陣列中
        $datas[] = $row;
    }
}
mysqli_free_result($result1);

$SQL2="SELECT mName FROM current_movie ";
$result2=mysqli_query($link,$SQL2);

if(mysqli_num_rows($result2)>0){
    while ($row = mysqli_fetch_assoc($result2)) {
        // 每跑一次迴圈就抓一筆值，最後放進data陣列中
        $datas2[] = $row;
    }
}
mysqli_free_result($result2);
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
    .content {
        width:1000px;margin-left:auto;margin-right:auto;
    }
    .content1 {
        width:1000px;margin-left:auto;margin-right:auto;
    }
    .content2 {
        width:1000px;margin-left:auto;margin-right:auto;
    }
    .box {
        width:280px;padding:10px;margin:10px;background-color:white;
        display:inline-block;vertical-align:top;
        text-align:center;
    }
    </style>

</head>


<body style="margin: 0px;">
    <div class="head">&nbsp&nbsp&nbsp&nbsp&nbspMOVIE
        <div class="leftset">&nbsp&nbsp&nbsp&nbsp<a href="movie_logout.php">登出</a></div>
        <div class="leftset">&nbsp&nbsp&nbsp<a href="movie_admin.php">管理員專區</div>
    </div>
    </div>
    <div class="content">
        <div class="box">
            <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '0'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
            <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '0'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
        <div class="box">
            <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '1'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
            <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '1'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
        <div class="box">
            <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '2'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
            <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '2'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
    </div>
    <div class="content1">
    <div class="box">
        <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '3'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
        <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '3'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
        <div class="box">
            <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '4'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
            <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '4'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
        <div class="box">
            <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '5'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
            <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '5'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
        <div class="content2">
    <div class="box">
        <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '6'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
        <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '6'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
        <div class="box">
            <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '7'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
            <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '7'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>
        <div class="box">
            <div><a href=""><img src="<?php $count = 8; foreach ($datas as $va1) {foreach ($va1 as $va2){if($count == '8'){echo "$va2";}$count = $count - 1;}} ?>" width="280px"></a></div>
            <div><font color="black"><?php $count = 8; foreach ($datas2 as $va1) {foreach ($va1 as $va2){if($count == '8'){echo "$va2";}$count = $count - 1;}} ?></font></div>
        </div>



    </div>
</body>


</html>