<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"E:\A_Lance\tp5_dome\public/../application/index\view\index\index.html";i:1557978612;s:61:"E:\A_Lance\tp5_dome\application\index\view\common\header.html";i:1557975917;s:62:"E:\A_Lance\tp5_dome\application\index\view\common\message.html";i:1557978633;s:61:"E:\A_Lance\tp5_dome\application\index\view\common\footer.html";i:1557977513;}*/ ?>
<!-- 头部 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
    <meta name="application-name" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport"
          content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="email=no"/>
    <link rel="shortcut icon" href="" type="image/icon" sizes="16*16">
    <link rel="stylesheet" href="/static/css/Home/base.css">
    <link rel="stylesheet" href="/static/css/Home/main.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1176844_03wydqx0vwo8.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css"> -->

</head>

<body>
<section id="app">

<article>
    <!-- 图 -->
    <div><img src="/static/images/Home/index_01.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_02.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_03.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_04.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_05.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_06.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_07.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_08.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_09.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_10.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_11.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_12.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_13.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_14.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_15.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_16.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_17.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_18.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_19.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_20.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_21.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_22.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_23.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_24.jpg" alt=""></div>
    <div><img src="/static/images/Home/index_25.jpg" alt=""></div>

    <!-- 留言板 样式一 -->
<div class="messagebox" id="msgBox">
    <h2><i class="iconfont icon-icon_calendar"></i> 在线留言</h2>
    <div class="messagebook">
        <form action="<?php echo url('adds'); ?>"  method="post" id="info">
            <div style="border: 2px solid red;padding:.4rem;border-radius:10px;">
                <p>立即留言，离成功更近！</p>
                <div class="p-input form-name">姓名<input name="name" class="text msg-input" placeholder="如：张先生" value=""
                                                        type="text"></div>
                <div class="p-input form-name">手机<input name="mobile" class="text" placeholder="如：13888888888" value=""
                                                        type="text"></div>
                <div class="p-button">
                    <input type="hidden" name="token" value="<?php echo $token; ?>"/>
                    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>"/>
                    <input type="hidden" name="plan" value="<?php echo $plan; ?>"/>
                    <input type="hidden" name="unit" value="<?php echo $unit; ?>"/>
                    <input type="hidden" name="shijian" id="shijian" placeholder=""/>
                    <script type="text/javascript">
                        window.onload = function () {
                            var nowDate = new Date();
                            var str = nowDate.getFullYear() + "-" + (nowDate.getMonth() + 1) + "-" + nowDate.getDate() + " " +
                                nowDate.getHours() + ":" + nowDate.getMinutes() + ":" + nowDate.getSeconds();
                            document.getElementById("shijian").value = str;
                        }
                    </script>
                    <button type="submit" class="button"><span>立即留言</span></button>
                </div>
            </div>
        </form>
    </div>
</div>

</article>

<!-- 底部 -->
<!-- 底部 -->
<footer>
    <div class="last-box">
        <a href="tel:<?php echo $phone; ?>" class="last-box-phone">
            <div>
                <span><i class="iconfont icon-phone"></i></span>
                <span>联系客服</span>
            </div>
        </a>
        <a href="#msgBox" class="last-box-msg"><i class="iconfont icon-icon_calendar"></i> 留言免费获取更多资料</a>
    </div>
</footer>
<?php echo $code; ?>
</section>
</body>
<script src="/static/js/Home/adaptive.js"></script>
<script src="/static/js/Home/config.js"></script>
<script crossorigin="anonymous" integrity="sha384-qu2J8HSjv8EaYlbzBdbVeJncuCmfBqnZ4h3UIBZ9WTZ/5Wrqt0/9hofL0046NCkc"
        src="//lib.baomitu.com/zepto/1.2.0/zepto.min.js"></script>
<script>


    $(function () {

        $("#info").submit(function (e) {
            var obj = $("#info").serializeArray();
            var _flag = new Boolean(true);
            $.each(obj, function (index, item) {
                if (item.name == "name") {
                    if (item.value == "" || $.trim(item.value).length < 2 || $.trim(item.value).length > 4) {
                        alert("请输入正确的姓名");
                        _flag = false;
                        return false;
                    }
                }
                if (item.name == "mobile") {
                    if (item.value == "" || $.trim(item.value).length != 11) {
                        alert("请输入正确的手机号");
                        _flag = false;
                        return false;
                    }
                }
            });
            return _flag;
        });
    })
</script>

</html>
