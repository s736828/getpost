<?php
$ccc = 'admin';
$pwd = '1234';
if ($_POST['acc'] == $ccc && $_POST['pw'] == $pwd) {
    echo "帳密正確，登入成功";
} else {
    // echo "帳密錯誤，登入失敗";
    header("location:login.php?error=帳密錯誤，登入失敗");
    //導到login.php的頁面，網址?後面訊息加上error=帳密錯誤，登入失敗
}
?>
<br>
<br>
<br>
<a href="login.php">回登入頁</a>