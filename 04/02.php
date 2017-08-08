<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>string test</title>
</head>

<body>

<?php


$str = 'mh@163.com';

$arr = explode('@', $str);

echo count($arr);

echo '<br>---------------<br>';

foreach ($arr as $k => $v) {
    echo "$k: $v<br>";
}

echo '<br>---------------<br>';

$str2 = join('###', $arr);

echo $str2;

echo '<br>---------------<br>';

$str3 = implode('--', $arr);

echo $str3;

echo '<br>---------------<br>';

$feed = 'ni hao ma, wo hen hao';

$token = strtok($feed, " ");

echo $token.'<br>';


while ($token != '') {
    $token = strtok(' ');
    echo $token.'<br>';
}

echo '<br>---------------<br>';



$s = 'we are good boys';

$_s = substr($s, 2);

echo $_s;

echo '<br>---------------<br>';

echo strcmp('abc', 'Bbc');

echo '<br>---------------<br>';

echo strcasecmp('abc', 'BBC');

echo '<br>---------------<br>';

echo strnatcmp('20', '120');

echo '<br>---------------<br>';

echo strlen('hello world');

echo '<br>---------------<br>';

$feedBack = 'we are GOOD bodys, and you are good boy end';

echo strstr($feedBack, 'good');

echo '<br>---------------<br>';

echo stristr($feedBack, 'good');

echo '<br>---------------<br>';

echo strrchr($feedBack, 'boy');

echo '<br>---------------<br>';

echo 12 + '56';

echo '<br>---------------<br>';

echo strpos('hello baby, good baby', 'ba', 7);

echo '<br>---------------<br>';

echo strrpos('hello babys, good baby', 'ba');

echo '<br>---------------<br>';

echo str_replace('good', '好', 'we are good boys, and you are good boy.', $i);
echo $i;

echo '<br>---------------<br>';


$arr = array("blue", "red", "grereden", "yellow", 'red');
print_r(str_replace("red", "pink", $arr, $i));
echo "替换数：$i";

echo '<br>---------------<br>';

$find = array("Hello","world");
$replace = array("B");
$arr = array("Hello", "world", "!");
print_r(str_replace($find, $replace, $arr));

echo '<br>---------------<br>';

echo substr_replace('hello world aaabbbcccddd', ' dasuzhou ', -5, 0);



?>




</body>
</html>
