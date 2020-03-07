<?php
    $ss=2;     //最小的素数
    $max=100;    //最大的范围
    $arr=array();   //数组
    echo $max."以内的素数：";
    while ($ss<$max):   //允许范围内
        $boo = false;
        foreach($arr as $value):
            if($ss % $value ==0):
                $boo = true;
                break;
            endif;
        endforeach;
        if(!$boo):
            echo $ss."  ";
            $arr[count($arr)] = $ss;
        endif;

        $ss++;
    endwhile;

