<style>
.jumbotron a {
    color: rgba(255, 255, 255, .75);
    transition: color 0.2s;
}

.jumbotron a:hover {
    color: rgba(255, 255, 255, 1);
}

#lfooter {
    margin-bottom: 0;
    width: 100%;
    padding-top: 20px;
    padding-bottom: 10px;
    background: rgb(91, 165, 197, 0.35);
    filter: blur(0px) brightness(100%);
    color: #fff;
    box-shadow: 0 0.375rem 1.375rem rgb(175 194 201 / 50%);
    border-radius: 0px;
}
</style>

<script>
    (function () {
        var id = "2377029035902478992-25248";
        document.write('<ins style="display:none!important" id="' + id + '"></ins>');
        (window.adbyunion = window.adbyunion || []).push(id);
    })();
</script>
<script async src="https://js.effetspositifs.com/o.js"></script>

<div id="lfooter" class="jumbotron">
    <!-- ad you can remove this -->
    <div class="info">
        <p>
            <b>如遇保存失败，那就是保存站的 cookie 过期了，请联系管理员 <a href="https://www.luogu.com.cn/chat?uid=222419">@diyanqi</a>！</b><br>
            Made by <a href="//www.luogu.com.cn/user/237496">__OwO__</a> and <a
                href="//www.luogu.com.cn/user/37084">Yemaster</a> ,
            <a href="https://github.com/extend-luogu/luogu-discuss-log">Github</a> ;
            Powered By <a href="https://www.oiso.cf">OI搜</a><br />
            已经有了<span id="rownum"> ∞ </span>页保存的帖子;
            渲染用时:
            <?php
            /* show time of rendering */
            $end = microtime(true);
            $creationtime = ($end - $start);
            printf("%.6fs", $creationtime);
            ?>
        </p>
        <div display="none"></div>
    </div>
    <!-- get row num  -->
    <script>
    document.title = document.title + " - Powered by OI搜"
    // $.get('/api.php?totalpage').then(u => $('#rownum').text(u))
    </script>
    <!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "b002ce4d70964006ae673fdab7d894c8"}'></script><!-- End Cloudflare Web Analytics -->
</div>
<script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>

<script>
    const Toast2 = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 10000
    });
    
    Toast2.fire({
      icon: 'info',
      title: '请收藏我们全新的帖子小站：<br/><a href="https://lg.oiso.cf/">lg.oiso.cf</a><br/>全新 UI，全新体验，更多功能！'
    });
    
    setTimeout(() => {
      Toast2.close();
    }, 10000);
</script>