<?php
    //瀏覽次數計數器
    //SESSION : 跨網頁變數，變數會儲存在網頁伺服器(和cookie相反)
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "觀看次數=".$_SESSION["counter"]; //重製
    echo "<br><a href=reset_counter.php>次數重製"  //網頁轉到reset那裡
?>