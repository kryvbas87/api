<?php

class SomePeople {
    public $age ;
    public $name;
    public static $people = 123123;

    public function __construct($name = 'hz kto', $age = 99) {
        $this->name = $name;
        $this->age = $age;
    }
}

$some = new SomePeople();

echo $some->age;

$dasha = new SomePeople('dasha', 44);

echo $dasha->age;
echo $dasha->name;

echo SomePeople::$people;

echo "<br>". PHP_EOL;
echo PHP_VERSION;

echo "<br>". PHP_EOL;
echo __DIR__;

echo "<br>". PHP_EOL;

function recursia($num){
    if($num >= 10){
        echo ($num--) . '<br>';
    }
    else{
        return;
    }

    recursia($num);
}

//recursia(16);

function factorial($num) {
    if ($num <= 1) {
        return 1; // базовый случай
    }

    return factorial($num - 1) * $num;
}

echo factorial(5); // Вывод: 120

function factorial2($num) {
    $result = 1;

    for ($i = 2; $i <= $num; $i++) {
        $result *= $i;
    }

    return $result;
}

echo factorial2(6);

// анонимная функция


$arr = [1,4,6];

$some = function ($arr) {
    foreach ($arr as $value) {
        echo $value;
    }
};


$some($arr);

// замыкания

$value = 10;
$func = function() use ($value) {
    echo $value;
};

$value = 20;
echo $func(); // Что выведет?



