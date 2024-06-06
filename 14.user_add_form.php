<html>
<head><title>--新增使用者--</title></head>
<body>

<?php        
error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    
    #先寫出可以讓新增的資料傳到user_add的一段程式
    #後面則是用text的格式，讓想新增的人填入此格式
    #(和登入帳號的格式一樣)
    echo "<form action=15.user_add.php method=post>
        帳號：<input type=text name=id><br>
        密碼：<input type=text name=pwd><p></p>
        <input type=submit value=新增使用者> <input type=reset value=清除>
        </form>";
        #按鈕的部分是用 submit提交 和 reset清除 的格式
}
?>

</body>
</html>

