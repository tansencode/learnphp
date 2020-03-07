<?php
    session_start();  //存储session数据，记录用户访问量
    if(isset($_SESSION['views']))
    {
        $_SESSION['views']=$_SESSION['views']+1;
    }
    else
    {
        $_SESSION['views']=1;
    }
    echo "浏览量：". $_SESSION['views']."<br>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>cookie传值</title>
</head>
<body>
<?php
    echo "浏览量".$_SESSION["views"]."<br>";
?>
<?php
    if(isset($_COOKIE["user"])) //是否已经设置cookie
        echo "欢迎".$_COOKIE["user"]."!<br>";
    else
        echo "普通访客！<br>";
?>

<?php    //销毁session变量
    session_destroy();
?>

<?php
function spamcheck($field)
{
    // filter_var() 过滤 e-mail
    // 使用 FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() 过滤 e-mail
    // 使用 FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

if (isset($_REQUEST['email']))
{
    // 如果接收到邮箱参数则发送邮件

    // 判断邮箱是否合法
    $mailcheck = spamcheck($_REQUEST['email']);
    if ($mailcheck==FALSE)
    {
        echo "非法输入";
    }
    else
    {
        // 发送邮件
        $email = $_REQUEST['email'] ;
        $subject = $_REQUEST['subject'] ;
        $message = $_REQUEST['message'] ;
        mail("someone@example.com", "Subject: $subject",
            $message, "From: $email" );
        echo "Thank you for using our mail form";
    }
}
else
{
    // 如果没有邮箱参数则显示表单
    echo "<form method='post' action='mailform.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
}
?>
</body>
</html>

