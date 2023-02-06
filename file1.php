<?php
namespace Foo\Bar\sub;

const FOO = 1;
function foo(): void {
    print("file1 -> foo()\n");
}

class Foo {
    static function staticMethod(): void {
        print("file1 -> Foo.staticMethod()\n");
    }
}