<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=20150404" type="text/css" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"> 
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/avatar.png">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
    <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
    <?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
    <div id="fixerr">
        <!-- 旧版本浏览器提示 -->
        <div title="fMoeErrorReporter" style="margin:0 auto;width:100%;color:blue;text-align:center;font-size:15px;z-index:9999999;font-weight:blod;">
            <noscript>
                <div style="padding:5px;background:#ffffa8;">您的浏览器不支持或者您禁止了Javascript脚本！部分功能将不可用！</div>
            </noscript>
            <!--[if lt IE 9]>
                <div style="padding:5px;background:#ffff88;">
                您的浏览器版本过旧，请升级浏览器获得更好的体验，推荐使用 Chrome IE10+ 等最新浏览器！
                </div>
            <![endif]-->
            <!--[if lt IE 8]>
                <div style="padding:5px;background-color:red;color:#fff;">
               不支持IE7以下的浏览器，可能会出现严重的布局错位，脚本错误等问题！求你了，赶紧升级浏览器吧！
                </div>
            <![endif]-->
          </div>
    </div>
    <div class="header">
        <div class="intro container">
            <img src="<?php bloginfo('template_url'); ?>/avatar.png" alt="<?php bloginfo('name'); ?>" class="avatar">
            <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <h3><?php bloginfo('description'); ?></h3>
            <div class="clear"></div>
        </div>
        <div class="portal container">
            <a class="btn_portal" href="/">
                <span class="t1">主页</span>
                <span class="t2">Index</span>
            </a>
            <a class="btn_portal" href="/daily/">
                <span class="t1">碎碎念</span>
                <span class="t2">Daily</span>
            </a>
            <a class="btn_portal" href="/tech/">
                <span class="t1">技术宅</span>
                <span class="t2">Tech</span>
            </a>
            <a class="btn_portal" href="/acgn/">
                <span class="t1">二次元</span>
                <span class="t2">ACGN</span>
            </a>
            <a class="btn_portal" href="http://flag.moe/">
                <span class="t1">返回主站</span>
                <span class="t2">GoBack</span>
            </a>
        </div>
    </div>
