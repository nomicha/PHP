<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "次數重製成功!";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; //2秒後再轉回去
?>