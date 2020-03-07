<?php
  function come(){    //定义函数come
      echo "come<p>";
  }

  function go($name="Tome"){
      echo "$name has gone.<p>";
  }

  function back($string){
      echo "come here,$string!";
  }

  $func="come";   //声明变量func，其值为come
  $func();   //相当于$func=come，即come（）；
  $func="go";   //重新赋值
  $func("Jack");
  $func="back";
  $func("Lily");
