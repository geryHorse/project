<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
</head>

<body>


<?php

for ($i = 0; $i < 5; $i++) {
    echo $i.'<br>';
}

echo '<br>--------------------------- <br> ';

$result = true;

echo '$result:'.$result;

echo '<br>--------------------------- <br> ';



$n = 20;


echo gettype($n) .'<br>';

settype($n, 'float');

echo gettype($n);

echo '<br><br>End';

?>




</body>
</html>
