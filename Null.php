<?php
  echo "变量1直接赋值为null:";
  $string1=null;
  $string2=null;
  $string3=null;
  if(is_null($string1))  //is_null函数用来判断变量是否为null
      echo "string1=null";
  echo "<p>变量2未被赋值";
  if(is_null($string2))
      echo "string2=null";
  echo "<p>变量3的值为：";
  //unset($string3);  //销毁指定的变量
  if(is_null($string3))
      echo "string3=null";
?>