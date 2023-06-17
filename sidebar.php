<section style="background-color: #ffffff;padding: 10px 10px;box-shadow: 0 3px 5px rgb(50 50 93 / 10%), 0 2px 3px rgb(0 0 0 / 8%);">
                <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>小广告</th>
                            </tr>
                            <tr>
                                <th>欢迎访问</th>
                                <td><a href="https://www.oiso.cf/" target="_blank">🍋OIso🔍 - 一款为 OIer 和开发者而生的搜索引擎</a></td>
                            </tr>
                            <tr>
                                <th>欢迎安装官方油猴脚本</th>
                                <td><a href="https://tamper.oiso.cf/tamperoiso.user.js" target="_blank">tamperOIso - 洛谷功能增强插件</a></td>
                            </tr>
                            <tr>
                                <th>注册成为 OIso Premium 会员！</th>
                                <td><a href="https://afdian.net/a/diyanqi" target="_blank">¥5.78/30天；在洛谷上拥有<b>头像挂件</b>！</a></td>
                            </tr>
                            <tr>
                                <th>想要在此展现您的广告吗？</th>
                                <td>成为会员后与管理员洽谈！</td>
                            </tr>
                        </tbody>
                    </table>
                    </section>
                    <br/>
                <section style="background-color: #ffffff;padding: 10px 10px;box-shadow: 0 3px 5px rgb(50 50 93 / 10%), 0 2px 3px rgb(0 0 0 / 8%);">
                    <!-- 轮播图 -->

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- 指示符 -->
                            <ul class="carousel-indicators">
                                <!-- <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li> -->
                            </ul>

                            <!-- 轮播图片 -->
                            <div class="carousel-inner">
                                <!-- <div class="carousel-item active">
                                    <img src="https://static.runoob.com/images/mix/img_fjords_wide.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://static.runoob.com/images/mix/img_nature_wide.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://static.runoob.com/images/mix/img_mountains_wide.jpg">
                                </div> -->
                            </div>

                            <script>
                                window['carousels'] = [
                                    'https://s2.loli.net/2023/03/09/juQSlhVcsprzyiP.png',
                                    'https://s2.loli.net/2023/03/09/dKseN2UiR9Mkj17.png'
                                ];
                                window['carousel_links'] = [
                                    'https://afdian.net/a/diyanqi',
                                    'https://tamper.oiso.cf/tamperoiso.user.js'
                                ]
                                document.getElementsByClassName('carousel-inner')[0].innerHTML = carousels.map((item, index) => {
                                    return `<div class="carousel-item ${index === 0 ? 'active' : ''}">
                                        <a href="${carousel_links[index]}" target="_blank">
                                            <img src="${item}">
                                        </a>
                                    </div>`
                                }).join('');
                                document.getElementsByClassName('carousel-indicators')[0].innerHTML = carousels.map((item, index) => {
                                    return `<li data-target="#demo" data-slide-to="${index}" class="${index === 0 ? 'active' : ''}"></li>`
                                }).join('');
                            </script>

                            <!-- 左右切换按钮 -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>
                </section>