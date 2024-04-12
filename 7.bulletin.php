<?php
//用資料庫的方式設置佈告欄
error_reporting(0);//可以讓錯誤訊息不被跳出
$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
$result=mysqli_query($conn, "select * from bulletin");

echo "<table border=4><tr><td>佈告編號</td><td>標題</td><td>內容</td><td>發佈時間</td></tr>";

while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row["bid"];  
    echo "</td>" . "<td>";
    echo $row["title"];
    echo "</td>" . "<td>";
    echo $row["content"];
    echo "</td>" . "<td>";
    echo $row["time"];
    echo "</tr>";
}

echo "</table>";
?>