<?php

class classname
{
    function __construct()
    {
        echo __METHOD__, "\n";
    }
}

function funcname()
{
    echo __FUNCTION__, "\n";
}

const constname = "global";

$a = "classname";
$obj = new $a;

$b = "funcname";
$b();

echo constant('constname'), "\n"; // prints global

/*
 * PHP 命名空间的实现受到其语言自身的动态特征的影响。因此，如果要将下面的代码转换到命名空间中，动态访问元素
 classname::__construct
 funcname
 global
 */