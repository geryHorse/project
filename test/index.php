<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test index</title>
</head>

<body>


<?php

$db = new mysqli('localhost', 'root', 'admin001', 'mytest');

$db->select_db('mttable');

$db->set_charset('utf8');

$query = 'SELECT * FROM mttable';

$result = $db->query($query);

$size = $result->num_rows;

for ($i = 0; $i < $size; $i++) {
    $row = $result->fetch_assoc();
    echo 'id: '.$row['id'].' - name: '.$row['name'].' - age:'.$row['age'].' - gender: '.$row['gender'].' - address: '.$row['address'].'<br>';
}




?>





</body>
</html>
