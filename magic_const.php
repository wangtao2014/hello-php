<?php
# PHP 向它运行的任何脚本提供了大量的预定义常量
# 不过很多常量都是由不同的扩展库定义的，只有在加载了这些扩展库时才会出现，或者动态加载后，或者在编译时已经包括进去了
# 有八个魔术常量它们的值随着它们在代码中的位置改变而改变

namespace MyProject;

echo '这是第 " '  . __LINE__ . ' " 行';   # 文件中的当前行号
echo '该文件位于 " '  . __FILE__ . ' " '; # 文件的完整路径和文件名
echo '该文件位于 " '  . __DIR__ . ' " ';  # 文件所在的目录

function test(): void
{
    echo  '函数名为：' . __FUNCTION__ ;
}

test();

class test {
    function _print(): void
    {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();

function test1(): void
{
    echo  '函数名为：' . __METHOD__ ;
}
test1();

echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"