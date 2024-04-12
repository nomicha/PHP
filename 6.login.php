<?php
    /*用mydb，連結資料庫的方式來做login
      一樣要配合2.login.html來登入
    */
    $cone = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result = mysqli_query($cone, "select * from user");
    $login = FALSE;
    while($row=mysqli_fetch_array($result)){
        #echo $row["id"] . "　" . $row["pwd"] . "<br>";
        if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])){
            $login = TRUE;
        }
    }

    if ($login==TRUE){
        echo "歡迎登入!!";
    }
    else {
        echo "帳號或密碼有錯誤。";
    }
?>