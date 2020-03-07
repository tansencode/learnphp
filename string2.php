<?php
    $content="我喜欢你！";
    $str = "喜欢";
    echo str_ireplace($str,"<font color ='#FF0000'>".$str."</font>",$content);