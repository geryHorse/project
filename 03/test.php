<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>02 test</title>
</head>

<body>


<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];

@ $fp = fopen("$ROOT/project/02/orders/orders1.txt", 'ab');

$str = '我们都是好孩子, 聪明善良的孩子';

fwrite($fp, $str, strlen($str));

echo 'file written';


?>




</body>
</html>
