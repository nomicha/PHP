<?php
    error_reporting(0);
    session_start();

    if (!$_SESSION['id']){
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{

        $conn=mysqli_connect("db4free.net","immust","immustimmust","immust");
        #用 在user.php儲存的超連結 再從這邊叫出   #因為是字串，所以要在前後加上''
        $sql="delete from user where id='{$_GET["id"]}'";
        if (!mysqli_query($conn, $sql)){
            echo "使用者刪除錯誤";
        }
        else{
            echo "刪除成功!<p></p>三秒鐘後回到使用者管理頁面";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
}

?>
