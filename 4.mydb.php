<?php

    #mysqli_connect() 建立資料庫連結
    $cone = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($cone, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來

    $row=mysqli_fetch_array($result); #抓第一筆資料出來
    echo $row["id"] . " " . $row["pwd"]. "<br>";
    $row=mysqli_fetch_array($result); #抓第二筆資料出來
    echo $row["id"] . " " . $row["pwd"]. "<br>"

?>