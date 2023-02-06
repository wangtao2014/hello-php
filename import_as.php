<?php
// 1 使用use操作符导入/使用别名
use My\Full\Classname as Another;
// 下面的例子与 use My\Full\NSname as NSname 相同
use My\Full\NSname;
// 导入一个全局类
use \ArrayObject;


// 2 一行中包含多个use语句
use My\Full\Classname as Another1, My\Full\NSname1;
// 导入操作是在编译执行的，但动态的类名称、函数名称或常量名称则不是
// 导入操作只影响非限定名称和限定名称。完全限定名称由于是确定的，故不受导入的影响
// 3 导入和动态名称
// 4 导入和完全限定名称
