<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>order handler</title>
</head>

<body>

<?php
$a = $_POST['apple'];
$b = $_POST['banara'];
$m = $_POST['melon'];
$address = $_POST['address'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

?>

orders

<?php

echo '<p>Your order is as follows:</p>';

$total = 0;

$total = $a + $b + $m;

if ($total === 0) {
    echo 'You did not order anything on the previous page! <br>';
} else {
    if ($a > 0) {
        echo $a.'个苹果 <br>';
    }

    if ($b > 0) {
        echo $b.'个香蕉 <br>';
    }

    if ($m > 0) {
        echo $m.'个西瓜 <br>';
    }
}


$totalamount = 0.00;

define('APPLE', 100);
define('BANARN', 10);
define('MELLON', 4);

$totalamount = $a * APPLE
             + $b * BANARN
             + $m * MELLON;

$totalamount = number_format($totalamount);

echo "Total of order is $ $totalamount <br>";
echo "Address to ship to is $address";


$outputstring = "$a 个苹果 \t$b 个香蕉\t$m 个西瓜\t \$ $totalamount\t$address\n";

@ $fp = fopen("$DOCUMENT_ROOT/project/02/orders/orders.txt", 'ab');
// echo $fp.'aaa';
flock($fp, LOCK_EX);

if (!$fp) {
    echo 'Your order could not be processed at this time. Please try again later. </body></html>';
    exit;
}

fwrite($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose($fp);

echo 'Order written';




?>




</body>
</html>
