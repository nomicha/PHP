<?php
    error_reporting(0);
    session_start();

    #如果沒有登入的話會提醒請先登入
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>--新增佈告--</title></head>
            <body>
                <!--方法用post-->
                <form method=post action=23.bulletin_add.php>
                    
                    標    題：<input type=text name=title><br>
                    <!-- textarea:多行文本 --> 
                    內    容：<br><textarea name=content rows=18 cols=90></textarea><br>
                    <!-- radio是單選、如果要多選的話是checkbox     checked是進入網站之後的預設選-->
                    佈告類型：<input type=radio name=type value=1 checked>系上公告
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><br><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>

                </form>

            </body>
        </html>";
        }
?>