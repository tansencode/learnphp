<?php
    $con=mysqli_connect("localhost","root","");//建立连接
    $result=mysqli_query($con,"SELECT * FROM websites");
    //mysqli_num_rows($result);//获取结果
    mysqli_query($con,"INSERT INTO websites (name, url, alexa, country)
VALUES ('百度','https://www.baidu.com/','4','CN')");