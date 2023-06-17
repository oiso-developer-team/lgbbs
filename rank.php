<?php

require_once('config.php');
header("Cache-control: max-age=60");

$q = $link->query("select * from discuss_count where click > 1000 and title != 'None' and title != '' order by click desc limit 50");

$arr = [];
while ($assoc = $q->fetch_assoc()) array_push($arr, $assoc);

$cnt = 0;

?>

<!DOCTYPE html>

<head>
    <title>神帖排行</title>
    <?php require_once 'header.php'; ?>
</head>

<body class="mdui-theme-layout-auto">
    <nav class="navbar navbar-expand-sm navbar-light fixed-top vluogu-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">洛谷帖子</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">首页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/list.php">列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/rank.php">排行</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:80px">
        <div class="row">
            <div class="col-sm-8">
                <div>
                    <?php foreach ($arr as $va) { ?>
                    <a href="/show.php?url=https://www.luogu.com.cn/discuss/<?php echo $va['thread']; ?>">
                        <div class="am-g lg-table-bg0 lg-table-row mdui-ripple">
                            <div class="am-u-md-6">
                                <?php echo ++$cnt; ?>
                                    <?php echo $va['title']; ?>
                                <br />
                                <span class="lg-small">访问次数: <?php echo $va['click']; ?>
                                </span>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-4">
                <?php require_once 'sidebar.php'; ?>
            </div>
        </div>
    </div>
    <?php require_once('footer.php'); ?>
</body>