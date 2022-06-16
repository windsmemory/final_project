<?php
session_start();
require("DBconnect.php");
$SQL="SELECT * FROM user_reserve WHERE uNo='$_SESSION[uNo]'";
$Sprice="SELECT Price FROM ticket_price WHERE tNo=1";
if ($result2=mysqli_query($link,$Sprice)){
    $row2=mysqli_fetch_assoc($result2);
}
$Aprice="SELECT Price FROM ticket_price WHERE tNo=2";
if ($result3=mysqli_query($link,$Aprice)){
    $row3=mysqli_fetch_assoc($result3);
}
/*if ($result=mysqli_query($link,$SQL)){
    $row=mysqli_fetch_assoc($result);
}*/
mysqli_free_result($result2);
mysqli_free_result($result3);
?>

<html>

<head>
<title>訂票查詢</title>
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
        background-color: #E0E0E0;padding: 10px;width: 1050px;height: 400px;border-radius: 5px;border-top: 10px solid #df5334;
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
        table-layout:fixed;
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
            <h3>訂票查詢</h3>
            <?php
            if ($result=mysqli_query($link,$SQL)){

                while($row=mysqli_fetch_assoc($result)) {
                    $adt = $row["adult_ticket"];
                    $price1 = $row3["Price"];
                    $st = $row["student_ticket"];
                    $price2 = $row2["Price"];
                    $tprice = $adt*$price1+$st*$price2;
                    echo "<table class='TB_COLLAPSE'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>訂單編號</th>";
                    echo "<th>電影名稱</th>";
                    echo "<th>日期</th>";
                    echo "<th>電影時刻</th>";
                    echo "<th>學生票</th>";
                    echo "<th>全票</th>";
                    echo "<th>金額</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tfoot>";
                    echo "<tr>";          
                    echo "<td>".$row["rNo"]."</td><td>".$row["mName"]."</td><td>".$row["mDate"]."</td><td>".$row["mTime"]."</td><td>".$row["student_ticket"]."</td><td>".$row["adult_ticket"]."</td><td>".$tprice."</td>";
                    echo "</tr>";
                    echo "</tfoot>";
                    echo "</table>";
                }
            }
            ?>     
        </div> 
        <div class="tab">
            <br><br><br><br></br>
            <a href="movie_info.php">回首頁</a>
            <a href="movie_deleteReserve.php">取消訂票</a>
        </div>    
    </div>     
</body>

