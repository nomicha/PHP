<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "刪除成功!<br>三秒鐘後回到佈告欄首頁";
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
