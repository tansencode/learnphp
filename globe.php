<?php
  $zy="hello1";
  $zy1="hello2";
  function output(){
      echo $zy."<br>";   //zy与第一行定义的没关系，此行提示未定义
      global $zy1;
      echo $zy1."<br>";
  }
  output();
?>
