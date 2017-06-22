<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>order handler</title>
</head>

<body>

<?php
// $x = $_POST['xigua'];
$a = $_POST['apple'];
$b = $_POST['banara'];
$c = $_POST['melon'];
// $a = $_POST['pingguo'];
// $bn = $_POST['banana']
// echo 'aaa'
?>



今天的订单为: <br>

<?php
echo $a.'个苹果<br>';

echo $b.'个香蕉<br>';

echo $c.'个西瓜<br>';

echo '共有'.($a + $b + $c).'笔订单';

echo '<br>--------------------------- <br> ';

for ($i = 0; $i < 5; $i++) {
    echo $i.'<br>';
}

echo '<br>--------------------------- <br> ';

$result = true;

echo '$result:'.$result;

echo '<br>--------------------------- <br> ';

if ($a > $b) {
    echo 'aaaaaaaaaa';
} else {
    echo 'bbbbbbbbbb';
}

echo $a;

echo '<br>--------------------------- <br> ';

$n = 20.00;


echo gettype($n).'<br>';

echo 'End';

?>




</body>
</html>
