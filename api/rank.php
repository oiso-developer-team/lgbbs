<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

require_once('../config.php');
header("Cache-control: max-age=60");
header('Content-Type: application/json; charset=utf-8');

$q = $link->query("select * from discuss_count where click > 1000 and title != 'None' and title != '' order by click desc limit 100");

$arr = [];
while ($assoc = $q->fetch_assoc()) {
    $data = [
        'title' => $assoc['title'],
        'url' => 'https://www.luogu.com.cn/discuss/' . $assoc['thread'],
        'click' => $assoc['click'],
    ];
    array_push($arr, $data);
}

echo json_encode($arr);
