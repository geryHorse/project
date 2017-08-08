<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>function test</title>
</head>

<body>

<?php

require('header.php');

func_h('aaabbbccc');

echo '<br>'.$h;

?>

<div>上面是 'func_h' 函数的输出</div>

<?php

require('cont.php');


function revers_r($str) {
    echo "-$str-<br>";
    if (strlen($str) > 0) {
        revers_r(substr($str, 1));
    }
    echo substr($str, 0, 1).'<br>';
    return;
}

revers_r('hello');



require('footer.php');



footer('函数footer的输出');




?>




</body>
</html>
