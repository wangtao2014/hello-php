<?php
// PHP支持两种抽象的访问当前命名空间内部元素的方法，__NAMESPACE__ 魔术常量和namespace关键字
// 在全局的，不包括在任何命名空间中的代码，它包含一个空的字符串

namespace MyProject;

echo '"', __NAMESPACE__, '"';

function get($classname)
{
    // 动态创建名称
    $a = __NAMESPACE__ . '\\' . $classname;
    return new $a;
}
