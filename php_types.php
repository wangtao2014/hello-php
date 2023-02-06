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