<?php
session_start();
session_destroy();
//setcookie("UID",$uid,time()-17280);
header('Locaton: /logi.php');
echo "<script type='text/javascript'>";
echo "alert('登出成功');";
echo "</script>";
echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
?>