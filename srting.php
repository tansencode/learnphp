<?php
    echo substr("She is a well-read girl",0);  //第一个字符开始截取
    echo "<br>";
    echo substr("She is a well-read girl",4,14);  //第四个字符开始截取到第十四个
    echo "<br>";
    echo substr("She is a well-read girl",-4,4);   //倒数第四个字符开始，往后截取4个
    echo "<br>";
    echo substr("She is a well-read girl",0,-4);   //第一个开始，截取到倒数第4个