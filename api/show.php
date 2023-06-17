<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

require_once('../config.php');
require_once('../lib.php');
session_cache_limiter('private');
session_start();

header("Cache-control: max-age=60");

if (!isset($_GET['url']) && (!isset($_GET['thread']) || !isset($_GET['page']))) {
    header('HTTP/1.1 404 Not Found');
    die();
}

$thread = intval($_GET['thread']);
$pg = intval($_GET['page']);

if (isset($_GET['url'])) {
    $parsed = parse_url($_GET['url']);
    $thread = intval(basename($parsed['path']));
    parse_str($parsed['query'], $out);
    $pg = intval($out['page']);
    if ($pg == 0) $pg = 1;
}

$arr = $link->query("select * from discuss_log where thread=$thread and page=$pg")->fetch_assoc();

$url = "https://www.luogu.com.cn/discuss/$thread?page=$pg";

$arr['click'] = addClick($thread);
$tq = $link->query("select reply_count, title from discuss_count where thread=$thread");


date_default_timezone_set("Asia/Shanghai");
$tim = strtotime($arr['time']);
$timstr = date('Y-m-d H:i:s', strtotime("+0 hours", $tim)); // time adjust


if (!$tq->num_rows) {
    $arr['title'] = '还未保存过QwQ, 请点击下方更新以保存';
    $timstr = '将来某时';
} else {
    $rs = $tq->fetch_assoc();
    $arr['title'] = $rs['title'];
    $arr['reply_count'] = $rs['reply_count'];
}

if ($arr['content'] == 'None') {
    $arr['title'] = '这个帖子在被保存之前就被删除了QwQ';
    $arr['content'] = '';
}

$pgs = 1;

if ($arr['reply_count'] == -1) {
    $pgs = $link->query("select count(*) from discuss_log where thread = $thread")->fetch_row()[0];
    $arr['reply_count'] = 'N/A';
} else {
    $pgs = intval(($arr['reply_count'] - 1) / 10) + 1; 
}

$link->close();

$arr['content'] = decompress($arr['content']);

if (isset($_GET['_contentOnly'])) {
    $rs = array(
        'content' => $arr['content'],
        'title' => $arr['title'],
    );
    die(json_encode($rs));
}

function pageLink($p) {
    global $thread;
    echo "/show.php?url=https://www.luogu.com.cn/discuss/$thread?page=$p";
}

?>

<!DOCTYPE html>

<head>
    <title><?php echo $arr['title']; ?></title>
    <?php require_once '../header.php'; ?>
    <script>
    hljs.initHighlightingOnLoad();
    document.addEventListener("DOMContentLoaded", function() {
        renderMathInElement(document.body, {
            delimiters: [{
                left: '$$',
                right: '$$',
                display: true
            }, {
                left: '$',
                right: '$',
                display: false
            }],
            throwOnError: false
        });
    });
    </script>
</head>

<body class="mdui-theme-layout-auto">
    <div class="container" style="margin-top:20px">
            <div>
                <h2><?php echo $arr['title']; ?></h2>
                <hr />
                <div class="lfe-body">
                    <?php echo $arr['content']; ?>
                    <?php if ($arr['content'] == '') { ?>
                    <div align="center">
                        <script src="https://down.52pojie.cn/.fancyindex/js/phaser.min.js"></script>
                        <script src="https://down.52pojie.cn/.fancyindex/js/catch-the-cat.js"></script>
                        <div id="catch-the-cat"></div>
                        <script>
                        window.game = new CatchTheCatGame({
                            w: 12,
                            h: 11,
                            r: 20,
                            backgroundColor: 16777215,
                            parent: "catch-the-cat",
                            statusBarAlign: "center",
                            credit: "lgbbs.oiso.cf",
                        });
                        </script>
                        <style type="text/css">
                        .style9 {
                            font-size: 24px;
                            font-family: "楷体_GB2312";
                        }
                        </style>
                    </div>
                    <?php } ?>
                </div>
            </div>
        
    </div>
</body>