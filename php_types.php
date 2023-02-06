<?php
namespace PhpTypes;

# boolean
function type_boolean(): void
{
    // Boolean are case-insensitive
    $boolean1 = true;
    $boolean2 = TRUE;
    $boolean3 = false;
    $boolean4 = FALSE;

    $boolean5 = (boolean) 1;   # => true
    $boolean6 = (boolean) 0;   # => false

    print $boolean6;        # echo false; 输出值为空
    echo $boolean5, "\n";   # echo true; 输出值为1
}

function type_integer(): void
{
    $int3 = 012;   # => 10 (octal)
    $int4 = 0x0F;  # => 15 (hex)
    $int5 = 0b101; # => 5  (binary)

    print($int3);
    print($int4);
    print($int5);
}

# String

function type_string(): void
{
    $str = "foo";
    $nowdoc = <<<'END'
multi line string
$str
END;

    $heredoc = <<<END
multi line
$str
END;

    print $heredoc; # multi line \n foo
    print $nowdoc;  # multi line string \n $str

    $s = "Hello Phper";
    print strtoupper($s);
}

# float/double

# null
function type_null(): void
{
    $a = null;
    $b = 'Hello php!';

    echo $a ?? 'a is unset';
    echo $b ?? 'b is unset';

    $a = array();
    $a == null;     # => true
    $a === null;    # => false
    is_null($a);    # => false
}

# array
function type_array(): void
{
    $arr = array("hello", "world", "!");
    foreach ($arr as $item) {
        echo $item;
    }

    $num = [1, 3, 5, 7, 9];
    $num[5] = 11;
    unset($num[2]); // delete variable
    print_r($num);
    echo count($num);
}

# iterable
function bar(): iterable {
    return [1, 2, 3];
}

function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

function type_iter(): void {
    foreach (bar() as $value) {
        echo $value;   # => 123
    }
}