<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
</head>

<body>

<?php


$a = array('a', 'b', 'c', 'd');

while (list($key, $val) = each($a)) {
    // echo $item.toString();
    echo "$key: $val <br>";
}

echo '<br> -----------------------------------   <br>';

// $b = array('aa', 'bb', 'cc', 'dd');
$b = array(1, 2, 3, 4);

$item = end($b);

// echo $item;

while ($item) {
    echo $item.'<br>';
    $item = prev($b);
}


echo '<br> -----------------------------------   <br>';

$c = array(1, 2, 3, 4, 5);

foreach ($c as $n) {
    echo $n.' ';
}

echo '<br> ------   <br>';

function my_print(&$val, $key, $f) {
    echo ($val * $f).'<br>';
    $val *= $f;
}

array_walk($c, 'my_print', 3);

echo '<br> ------   <br>';

foreach ($c as $n) {
    echo $n.' ';
}


echo '<br> -----------------------------------   <br>';

// echo count($a);

$d = array('abc', 123, array('aaa', 'bbb', 'ccc'), 'ababa');

// echo  count($d);
echo sizeof($d[2]);
// echo sizeof('abcassadfsa')

echo '<br> -----------------------------------   <br>';

$e = array('abc', 'b', 'aaa', 'c', 'a', 'abc', 'a', 'aaa', 'a', 'a', 'a');

$result = array_count_values($e);

foreach ($result as $k => $v) {
    echo $k.': '.$v.'<br>';
}


echo '<br> -----------------------------------   <br>';

$f = array('key1'=> 'value1', 'key2'=> 'value2', 'key3'=> 'value3');
extract($f);
echo "$key1 $key2 $key3";




?>




</body>
</html>
