<!DOCTYPE HTML>
<html>
    <head>
            <meta charset="utf-8">
            <title>表单验证</title>
            <style>
                .error{color:#FF0000;}  //定义必填标识符
            </style>
        </head>
        <body>
<?php
    //定义变量并设为空值
    $nameErr= $emailErr = $commentErr= $genderErr = $websiteErr = " ";
    $name = $email = $gender = $comment = $website = " ";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){    //验证是否填写内容
        if(empty($_POST["name"])){
            $nameErr="名字是必须的";
        }
        else{
            $name = test_input($_POST["name"]);//检测名字是否只包含字母和空格
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $nameErr="只允许字母和空格";
            }
        }

        if(empty($_POST["email"])){
            $emailErr= "邮箱是必须的。";

        }
        else{
            $email = test_input($_POST["email"]);//检测邮箱是否合法
            if(!preg_match("/([\w\-]+\@[\w\-\w\-]+)/",$email)){
                $eamilErr="输入格式不正确";
            }
        }

        if(empty($_POST["comment"])){
            $commentErr= "评论是必须的。";

        }
        else{
            $comment = test_input($_POST["comment"]);
        }

        if(empty($_POST["website"])){
            $websiteErr= "地址是必须的。";

        }
        else{
            $website = test_input($_POST["website"]); //检测地址是否正确
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                $websiteErr='非法的地址格式';
            }
        }

        if (empty($_POST["gender"])){
            $genderErr = "性别是必须的。";
        }
        else{
            $gender = test_input($_POST["gender"]);
        }


    }

    function test_input($data){
        $data = trim($data);
        $data =stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP 表单验证实例</h2>
        <p><span class="error">* 必填字段。</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            名字: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>

            网址: <input type="text" name="website">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>
            备注: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            性别:
            <input type="radio" name="gender" value="female">女
            <input type="radio" name="gender" value="male">男
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

<?php   //输出输入的内容
    echo '<h2>您的输入：</h2>';
    echo $name;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>
        </body>
</html>
