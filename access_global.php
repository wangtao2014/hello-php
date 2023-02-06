<?php

namespace Foo;

function strlen($fString): int
{
    print($fString);
    return \strlen($fString);
}
const INI_ALL = 3;
class Exception
{
    var string $errorName;

    function __construct($errorName)
    {
        print $errorName;
        $this->errorName = $errorName;
    }
}

/* 访问全局 */
$a = \strlen("hi"); // 调用全局函数strlen
echo $a;
$b = \INI_ALL;            // 访问全局常量 INI_ALL
echo $b;
$c = new \Exception("error"); // 实例化全局类 Exception

/* 访问局部1 */
$d = strlen("hello");
echo $d;
$e = INI_ALL;
echo $e;
$f = new Exception("error");


/* 访问局部2 */
$g = \Foo\strlen("hello");
echo $g;
$h = \Foo\INI_ALL;
echo $h;
$i = new \Foo\Exception("error name");