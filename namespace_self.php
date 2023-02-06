<?php
// 关键字 namespace 可用来显式访问当前命名空间或子命名空间中的元素。它等价于类中的 self 操作符

namespace MyProject;

use Foo\Bar\sub as mine;

function foo(): void {
    print("namespace_self -> foo()\n");
}

mine\foo();
\MyProject\foo();
// Global code should be enclosed in global namespace declaration
// \namespace\foo();  // success: namespace_self -> foo()
