<?php
namespace Foo\Bar;
include "file1.php";

const FOO = 2;
function foo(): void {
    print("file2 -> foo()\n");
}

class Foo {
    static function staticMethod(): void {
        print("file2 -> Foo.staticMethod()\n");
    }
}

/* 非限定名称 */
foo(); // 解析为函数 Foo\Bar\foo
Foo::staticMethod(); // 解析为类 Foo\Bar\foo
echo FOO; // 解析为常量 Foo\Bar\FOO\


/* 限定名称 */
sub\foo();
sub\Foo::staticMethod();
echo sub\FOO;


/* 完全限定名称 */
\Foo\bar\foo();
\Foo\Bar\foo::staticMethod();
echo \Foo\Bar\FOO;
echo \Foo\Bar\sub\FOO;