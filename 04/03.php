<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>string test</title>
</head>

<body>

<?php


preg_match_all('/hello|baby/', 'hello baby, how are you', $arr);

print_r($arr)

// foreach ($arr as $k => $v) {
//     echo $k.': '.$v.'<br>';
// }



?>




</body>
</html>
