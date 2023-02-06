<?php
# PHP中预定义了几个超级全局变量（super globals），这意味着它们在一个脚本的全部作用域中都可用
# 你不需要特别说明，就可以在函数及类中使用。

# $GLOBALS 超级全局变量组, 包含了全部变量的全局组合数组, 变量的名字就是数组的键。

$x = 34;
$y = 12;

function addition(): void
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;  # => 46
echo $GLOBALS['z'];  # => 46