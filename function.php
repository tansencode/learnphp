<?php
  function example(&$m){  //定义函数
      $m=$m*5+10;
      echo "函数内：m=".$m;  //.是字符串连接符
  }
  $m=1;
  example($m);
  echo "<p>函数外：m=$m<p>";  //没&则输出m=1
  $a='HiHi';
  echo "$a<br>";  //单引号和双引号的区别
  echo '$a';
  ?>

