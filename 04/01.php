<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>string test</title>
</head>

<body>

<?php



$total = 12;
$s = '-abc-';

printf("abc %2\$.2f aa dh %1\$s gd", $s, $total);


echo '<br>---------------------------------<br>';

$str = 'we are good boys';
$_str = 'WE ARE GOOD BOYS';

echo 'strtoupper: ', strtoupper($str);

echo '<br>---<br>';

echo 'strtolower: ', strtolower($_str);

echo '<br>---<br>';

echo 'ucfirst: ', ucfirst($str);

echo '<br>---<br>';

echo 'ucwords: ', ucwords($str);

echo '<br>---<br>';

$str2 = 'we "are" \good boys';
$result = addslashes($str2);
echo $result;

echo '<br>---<br>';

echo stripslashes($result);

echo '<br>---<br>';

echo get_magic_quotes_gpc();


echo '<br>---<br>';


echo phpinfo();




?>




</body>
</html>
