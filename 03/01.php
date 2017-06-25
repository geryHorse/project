<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>order handler</title>
</head>

<body>

<?php

$products = array('apple', 'banana', 'mellon');

$products[3] = 'abc';

foreach ($products as $k => $v) {
    echo $k.': '.$v.'<br>';
}

echo '<br> -----------------------------------   <br>';
// for ($i = 0; $i < 4; $i++) {
//     echo $products[$i].'<br>';
// }

// $numbers = range(1, 10, 2);
// $numbers = range('a', 'z', 2);

// for ($n = 0; $n < 13; $n++) {
//     if ($numbers[$n]) {
//         echo $numbers[$n].'<br>';
//     }
// }


$arr[0] = 'apple';
$arr[1] = 'banana';
$arr[2] = "mellon";

echo "$arr[0] $arr[1] $arr[2]";


echo '<br> -----------------------------------   <br>';

foreach ($products as $item) {
    echo $item.'<br>';
}

echo '<br> -----------------------------------   <br>';

foreach ($arr as $a) {
    echo $a.'<br>';
}


echo '<br> -----------------------------------   <br>';

$prices = array('apple'=>5, "banana"=>6, 'water mellon'=>7);

foreach ($prices as $key => $val) {
    echo $key.': '. $val . '<br>';
}
// echo $prices['apple'];
echo '<br> -----------------------------------   <br>';
reset($prices);
while ($e = each($prices)) {
    echo $e['key'].': '.$e['value'].'<br>';
}

echo '<br> -----------------------------------   <br>';

$list = array('aa'=>10, 'bb'=>20, 'cc'=>30);

while (list($lk, $lv) = each($list)) {
    echo "$lk: $lv <br>";
}

?>




</body>
</html>
