<!DOCTYPE html>
    <html>
        <body>

            <h1>My first PHP page</h1>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Name: <input type="text" name="name1">
                <input type="submit">
            </form>

            <?php
            $name = $_REQUEST['name1'];
            echo $name;
            ?>

            <?php
                echo "Hello World!";
                echo '<br/>';

                $name="runoob";  //EOF用于定义字符串，注：前后不能有空行
                $a= <<<EOF
                "abc"$name
                "123"
EOF;
                // 结束需要独立一行且前后不能空格
            echo $a;
            echo '<br/>';

            class Color  //定义对象
            {
                var $color;
                function _construct($color="green"){
                    $this->color = $color;
                }
                function what_color(){
                    return $this->color;
                }
            }
            echo '<br/>';
            define("con","2018-12-12"); //定义常量
            echo con;   //输出2018-12-12

            echo '<br/>';

            function conn(){
                echo con;  //常量是全局的
            }

            conn(); //常量是全局的，调用函数才有输出

            $t=date("H");  //H可输出时间小时
            if ($t<20)
                echo "I'm working";
            else
                echo 'I am having a rest';

            echo '<br/>';

            $arr=array('hello','boy','I am Jack');  //定义数组
            echo $arr[0].' '.$arr[1].' , '.$arr[2];  //' ' 用于输出空格

            echo '<br/>';
            echo count($arr);  //用于输出数组长度

            echo '<br/>';
            $age=array("name"=>"Tom","age"=>"20","sex"=>"man");   //注意必须要定义为array型
            echo $age['name'];  //用于数组的元素输出，输出为Tom


            $numbers=array(4,6,2,22,11);
            sort($numbers);   //对数组进行升序排序

            rsort($numbers); //对数组进行降序排序
            echo "<br>";
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";













            ?>


            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Name: <input type="text" name="fname">
                <input type="submit">
            </form>

            <?php
            $name = $_POST['fname'];
            echo $name;
            ?>

            <form method="post" action="<?php
                echo $_SERVER['PHP_SELF'];
            ?>">
                  Name: <input type="text" name="name2">
                <input type="submit">
            </form>

            <a href="P2.php?subject=PHP&web=runoob.com">Test $GET</a>

            <?php

            $x=array("one","two","three");
            foreach ($x as $value)  //将$x的值赋给value
            {
            echo $value . "<br>";
            }

            ?>

        </body>

    </html>