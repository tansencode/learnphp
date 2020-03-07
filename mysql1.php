<?php
    $host="localhost";    //定义服务器名称
    $user="root";     //定义连接的用户名
    $password="";     //连接密码
    $con=mysqli_connect(
        $host, /* The host to connect to 连接MySQL地址 */
        $user,   /* The user to connect as 连接MySQL用户名 */
        $password); /* The password to use 连接MySQL密码 */
        /* The default database to query 连接数据库名称*/

    if($con)   //返回连接标识
    {
        echo "成功连接<p>".$host."服务器";
    }
    else{
        echo "链接失败";
    }