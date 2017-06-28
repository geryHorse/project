<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
</head>

<body>

<?php

// $a = array('a'=>1, 'b'=>2, 'c'=>3);

// $b = array('aa'=>4, 'bb'=>5, 'cc'=>6);

// $c = $a + $b;

// foreach ($c as $item) {
//     echo $item.' ';
// }

// echo 'abc';

$a = array('a', 'b', 'c');
$b = array('b', 'a', 'c');


if ($a != $b) {
    echo 'YES';
} else {
    echo 'NO';
}


echo '<br> -----------------------------------   <br>';

$c = array(1, 2, 3, 4, 5);
$d = array('1', 2, 3, 4, 5);

if ($c <> $d) {
    echo 'YES';
} else {
    echo 'NO';
}

echo '<br> ------------------多维数组-----------------   <br>';


$products = array(array('apple', 'this is apple', 10),
                  array('banara', 'this is banana', 20),
                  array('mellon', 'this is mellon', 30));

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $products[$i][$j].' | ';
    }
    echo '<br>';
}


echo '<br> -----------------------------------   <br>';

$products2 = array(array('code' => 'apple', 'desc' => 'this is apple', 'price' => 10),
                   array('code' => 'banana', 'desc' => 'this is banana', 'price' => 20),
                   array('code' => 'mellon', 'desc' => 'this is mellon', 'price' => 30));

for ($i = 0; $i < 3; $i++) {
    while (list($key, $value) = each($products2[$i])) {
        echo $value.' | ';
    }
    echo '<br>';
}



echo '<br> ------------------数组排序-----------------   <br>';

$arr = array(2, 1, 3, 5, 4);

sort($arr);

foreach ($arr as $n) {
    echo $n.' ';
}


echo '<br> -----------------------------------   <br>';

$m = array('a', 'c', 'b', 'e', 'd', 'A', 'C', 'B');

while (list($k, $v) = each($m)) {
    echo $k.': '.$v.' || ';
}

echo '<br> --------   <br>';

sort($m);

// $mm = each($m);
while (list($k, $v) = each($m)) {
    echo $k.': '.$v.' || ';
}

echo '<br> -----------------------------------   <br>';

$n = array('12', '2', '1', '3', '4', '5', '13', '25', '32');

// sort($n, SORT_REGULAR);
sort($n, SORT_NUMERIC);
// sort($n, SORT_STRING);

foreach ($n as $_n) {
    echo $_n.' ';
}

echo '<br> --------   <br>';


sort($n, SORT_STRING);


foreach ($n as $_n) {
    echo $_n.' ';
}

echo '<br> -----------------------------------   <br>';

$prices = array('apple' => 100, 'banana' => 20, 'mellon' => 30);


foreach ($prices as $key => $val) {
    echo $key.': '.$val.'<br>';
}
echo '<br> --------   <br>';
// asort($prices);
// arsort($prices);
// ksort($prices);
krsort($prices);

foreach ($prices as $key => $val) {
    echo $key.': '.$val.'<br>';
}






?>




</body>
</html>
