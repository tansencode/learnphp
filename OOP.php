<?php
    class Site{   //定义类Site
        var $url;   //声明变量
        var $title;


        function __construct($par1,$par2){   //构造函数，用__construct声明就好
            $this->title=$par1;
            $this->url=$par2;
        }

        function display(){     //输出成员函数
            echo $this->title."<br>";
            echo $this->url."<br>";
        }

        function __destruct(){    //析构函数
            echo "析构函数";
        }
        //成员函数
        function setUrl($par){
            $this->url=$par;
        }

        function getUrl(){
            echo $this->url."<br>";
        }

        function setTitle($par){
            $this->title = $par;
        }

        function getTitle(){
           echo $this->title . "<br>";
        }
    }

    $runoob = new Site;  //定义对象
    $taobao = new Site;
    $google = new Site;

    //调用成员函数
    $runoob->setTitle("菜鸟教程");  //对象的成员赋值
    $taobao->setTitle("淘宝");
    $google->setTitle("谷歌");

    $runoob->getTitle();  //调用函数，获取显示名称
    $taobao->getTitle();
    $google->getTitle();

    $runoob->setUrl('www.runoob.com');
    $taobao->setUrl('www.taobao.com');
    $google->setUrl('www.google.com');

    $runoob->getUrl();
    $taobao->getUrl();
    $google->getUrl();

    $baidu= new Site("百度","www.baidu.com");
    $baidu->display();