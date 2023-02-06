<?php

# defining
function array_define(): void {
    $a1 = array("h", "l", "j");
    $a2 = explode(",", "apple,pear,peach");

    print_r($a2);

    # Mixed int and string keys
    $array = array(
        "foo" => "bar bar",
        "bar" => "foo foo",
        100   => -100,
        -100  => 100,
    );
    var_dump($array);

    # Short array syntax
    $array = [
        "foo" => "bar",
        "bar" => "foo",
    ];
    print_r($array);

    $array = array(
        "foo" => "bar",
         42   => 24,
        "multi" => array(
            "dim" => array(
                "a" => "foo"
            )
        )
    );
    var_dump($array["foo"]);
    var_dump($array["multi"]["dim"]["a"]);

    $arr = array(
        5 => 1,
        12 => 2
    );
    sort($arr);
    print_r($arr);

    # Indexing iteration
    $array = array('a', 'b', 'c');
    $count = count($array);

    for ($i = 0; $i < $count; $i++) {
        echo "i: {$i}, v: {$array[$i]}\n";
    }

    # Value iteration
    $colors = array('red', 'blue', 'green');
    foreach ($colors as $color) {
        echo "Do you like $color?\n";
    }

    # Key iteration
    $arr = ["foo" => "bar", "bar" => "foo"];
    foreach ( $arr as $key => $value )
    {
        echo "key: " . $key . "\n";
        echo "val: {$arr[$key]}\n";
    }

    # Concatenate arrays
    $a = [1, 2];
    $b = [3, 4];

    $result = [...$a, ...$b];
    print_r($result);
}

# Into functions
$array = [1, 2];
function foo(int $a, int $b) {
    echo $a; # => 1
    echo $b; # => 2
}
foo(...$array);