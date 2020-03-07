<?php
    $file = fopen("index.txt","r")or exit("无法打开文件！");
    while(!feof($file)){    //读取文件每一行，直至文件结尾
        echo fgets($file)."<br>";
    }

    fclose($file);