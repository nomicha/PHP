<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
  echo "請登入帳號";
  echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

  $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
  #SQL命令(新增資料)：
  #     insert into 表格名稱(欄位1,欄位2) 
  #                              values(欄位1的值,欄位2的值)
  $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
  #echo $sql;
  #mysqli_query() 從資料庫查詢資料, 如果新增的資料和資料庫的有對上，則成功
  if (!mysqli_query($conn, $sql)) {
    echo "新增資料錯誤";
  }
  else{
    echo "新增使用者成功，三秒鐘後回到使用者管理頁面";
    echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
  }
}
?>
