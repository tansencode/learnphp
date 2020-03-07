<?php
  $n1="n2";
  $n2="You can see me!";
  echo $n1;
  echo "<br>";
  echo $$n1;   //可变变量输出trans的值,

  echo $_SERVER['SERVER_ADDR']; //运行服务器IP地址：127.0.0.1

  $value="100";
  echo "<p>$value===100:";  // === 全等 ，说明数值和类型都相等
  var_dump($value==="100");  //var_dump是系统函数，输出变量的相关信息
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/9
 * Time: 15:04
 */