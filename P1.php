<?php
    $a=1;
    include 'P2.php';   //文件包含
    echo $P1;

    //时间函数
    echo date('Y 年 m 月 d 日 H:i:s<br/>',12345678);
    echo time(),'<br/>';
    echo microtime(),'<br/>';

    echo strtotime('tomorrow 10 hours');

    $c=0;

    if($c==0){
        trigger_error('除数不能为0');  //人为触发错误
    }

    echo $a/$c;

