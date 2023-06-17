<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

$pgsiz = 20;
require_once('../config.php');
session_start();

$pg = intval($_GET['page']);
if ($pg == 0) $pg = 1;

$jmp = ($pg - 1) * $pgsiz;

// 查询当前页的帖子
$q = $link->query("select * from discuss_count where click > 0 and title != 'None' and title != '' order by thread desc limit $jmp,$pgsiz");
$arr = [];
while ($assoc = $q->fetch_assoc()) {
    array_push($arr, $assoc);
}

// 查询总共有多少个帖子和总页数
$tot = $link->query("select count(*) from discuss_count where click > 0 and title != 'None' and title != ''")->fetch_row()[0];
$totpg = intval(($tot - 1) / $pgsiz) + 1;

// 构造返回结果
$result = array(
    'page' => $pg,
    'count' => count($arr),
    'total_page' => $totpg,
    'list' => $arr
);

echo json_encode($result);
?>
