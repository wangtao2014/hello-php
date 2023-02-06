<?php

// 常量是一个简单值的标识符。该值在脚本中不能改变。
//一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。
// bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
// 常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。

const MY_CONST = "hello";

# define("GREETING", "welcome Run.com");
const GREETING = "welcome Run.com";

echo MY_CONST;   # => hello

# => MY_CONST is: hello
echo 'MY_CONST is: ' . MY_CONST;