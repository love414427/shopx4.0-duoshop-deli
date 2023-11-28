<?php /*a:13:{s:68:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/search/index.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/header.html";i:1699863362;s:80:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/header_style_root.html";i:1699863362;s:75:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/page_loading.html";i:1699863362;s:77:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/header_top_nav.html";i:1699863362;s:73:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/nav_search.html";i:1699863362;s:73:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/header_nav.html";i:1699863362;s:77:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/goods_category.html";i:1699863362;s:71:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/not_data.html";i:1699863362;s:78:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/breadcrumb_data.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/footer.html";i:1699863362;s:73:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/footer_nav.html";i:1699863362;s:76:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/footer_filing.html";i:1699863362;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php echo MyConfig('shopxo.default_charset', 'utf-8'); ?>" />
    <title><?php echo htmlentities($home_seo_site_title); ?></title>
    <meta name="keywords" content="<?php echo htmlentities($home_seo_site_keywords); ?>" />
    <meta name="description" content="<?php echo htmlentities($home_seo_site_description); ?>" />
    <meta name="generator" content="<?php echo htmlentities($my_url); ?>" />
    <meta name="application-name" content="<?php echo htmlentities($home_seo_site_title); ?>" />
    <meta name="msapplication-tooltip" content="<?php echo htmlentities($home_seo_site_title); ?>" />
    <meta name="msapplication-starturl" content="<?php echo htmlentities($my_url); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($public_host); ?>favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php echo MyC('home_site_name'); ?>">
    <link rel="apple-touch-icon" href="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_square')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_square')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/assets/css/amazeui.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/cropper/cropper.min.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/index/<?php echo htmlentities($default_theme); ?>/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/index/<?php echo htmlentities($default_theme); ?>/css/module.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/iconfont/iconfont.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    
    <!-- ckplayer播放器 -->
    <?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/css/ckplayer.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 打印css -->
    <?php if(isset($is_load_hiprint) and $is_load_hiprint == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/css/hiprint.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/css/print-lock.css" />
    <?php endif; ?>

    <!-- 插件 -->
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 可视化拖拽 -->
    <?php if(isset($is_load_layout) and $is_load_layout == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.admin.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
    <!-- 页面样式 -->
    <?php if(!empty($module_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- css钩子 -->
    <?php if(!empty($plugins_css_data) and is_array($plugins_css_data)): foreach($plugins_css_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
                    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                <?php else: ?>
                    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                <?php endif; elseif(is_array($hook)): foreach($hook as $hook_css): if(!empty($hook_css) and is_string($hook_css)): if(substr($hook_css, 0, 4) == 'http'): ?>
                            <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                        <?php else: ?>
                            <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- 公共header内钩子 -->
    <?php if(!empty($plugins_common_header_data) and is_array($plugins_common_header_data)): foreach($plugins_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                <?php echo $hook; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- 主题配色 -->
    <?php if(isset($theme_color_value) and $theme_color_value == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/color/black.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
    <style type="text/css">
        :root {
            <?php if(!empty($theme_style_data) and is_array($theme_style_data)): foreach($theme_style_data as $k=>$v): ?>
                    --<?php echo str_replace('_', '-', $k);; ?>: <?php echo htmlentities($v); if($k == 'html_body_size'): ?>px<?php elseif(in_array($k, ['border_radius', 'border_radius_sm', 'border_radius_lg'])): ?>rem<?php endif; ?>;
                <?php endforeach; else: ?>
                /* 基础 */
--html-body-size: 10px;
--body-bg-color: #f7f7f7;
--color-price: #E22C08;
--color-red: #E22C08;
--color-yellow: #E22C08;
--color-blue: #76AFFF;
--color-green: #5EB95E;

/* 主色 */
--color-main: #E22C08;
--color-main-light: #F25232;
--color-main-hover: #EA6B52;

/* 次色 */
--color-secondary: #FFB8AA;

/* 圆角 */
--border-radius-sm: 0.2rem;
--border-radius: 0.4rem;
--border-radius-lg: 0.8rem;

/* 阴影 */
--box-shadow: 0 5px 20px rgba(50,55,58,0.1);
--box-shadow-sm: 0 2px 8px rgba(50,55,58,0.1);
--box-shadow-lg: 0 8px 34px rgba(50,55,58,0.1);

/* 按钮部分 */
/* 默认基础色 - 按钮 */
--color-button-default: #EEEEEE;
--color-button-default-hover: #dddddd;
--color-button-default-focus: #c7c7c7;
--color-button-default-active: #c7c7c7;
--color-button-default-disabled: #c2c2c2;
--color-button-default-border: #EEEEEE;
--color-button-default-hover-border: #dddddd;
--color-button-default-focus-border: #c7c7c7;
--color-button-default-active-border: #c7c7c7;
--color-button-default-disabled-border: #c7c7c7;
--color-button-default-text: #666666;
--color-button-default-hover-text: #444444;
--color-button-default-focus-text: #444444;
--color-button-default-active-text: #444444;
--color-button-default-disabled-text: #444444;

/* 主色 - 按钮 */
--color-button-primary: #E22C08;
--color-button-primary-hover: #EA6B52;
--color-button-primary-focus: #C02000;
--color-button-primary-active: #C02000;
--color-button-primary-disabled: #F6BFB4;
--color-button-primary-border: #E22C08;
--color-button-primary-hover-border: #EA6B52;
--color-button-primary-focus-border: #C02000;
--color-button-primary-active-border: #C02000;
--color-button-primary-disabled-border: #F6BFB4;
--color-button-primary-text: #FFFFFF;
--color-button-primary-hover-text: #FFFFFF;
--color-button-primary-focus-text: #FFFFFF;
--color-button-primary-active-text: #FFFFFF;
--color-button-primary-disabled-text: #FFFFFF;

/* 次色 - 按钮 */
--color-button-secondary: #FFEFE5;
--color-button-secondary-hover: #FCE9E6;
--color-button-secondary-focus: #FCE9E6;
--color-button-secondary-active: #F5B5A9;
--color-button-secondary-disabled: #F5B5A9;
--color-button-secondary-border: #FFCBAB;
--color-button-secondary-hover-border: #FDB6B0;
--color-button-secondary-focus-border: #FDB6B0;
--color-button-secondary-active-border: #F5B5A9;
--color-button-secondary-disabled-border: #F5B5A9;
--color-button-secondary-text: #E22C08;
--color-button-secondary-hover-text: #EA6247;
--color-button-secondary-focus-text: #E64829;
--color-button-secondary-active-text: #E2300D;
--color-button-secondary-disabled-text: #E2300D;

/* 成功 - 按钮 */
--color-button-success: #a8e6a8;
--color-button-success-hover: #97ee97;
--color-button-success-focus: #5eb95e;
--color-button-success-active: #85c085;
--color-button-success-disabled: #85c085;
--color-button-success-border: #7fe27f;
--color-button-success-hover-border: #97ee97;
--color-button-success-focus-border: #5eb95e;
--color-button-success-active-border: #85c085;
--color-button-success-disabled-border: #85c085;
--color-button-success-text: #258f25;
--color-button-success-hover-text: #239b23;
--color-button-success-focus-text: #FFFFFF;
--color-button-success-active-text: #bffbbf;
--color-button-success-disabled-text: #bffbbf;

/* 警告 - 按钮 */
--color-button-warning: #FAAD14;
--color-button-warning-hover: #FBC55A;
--color-button-warning-focus: #FBC55A;
--color-button-warning-active: #EB9C00;
--color-button-warning-disabled: #FDE6B8;
--color-button-warning-border: #FAAD14;
--color-button-warning-hover-border: #FBC55A;
--color-button-warning-focus-border: #FBC55A;
--color-button-warning-active-border: #EB9C00;
--color-button-warning-disabled-border: #FDE6B8;
--color-button-warning-text: #FFFFFF;
--color-button-warning-hover-text: #FFFFFF;
--color-button-warning-focus-text: #FFFFFF;
--color-button-warning-active-text: #FFFFFF;
--color-button-warning-disabled-text: #FFFFFF;

/* 危险 - 按钮 */
--color-button-danger: #ffebeb;
--color-button-danger-hover: #FFEFED;
--color-button-danger-focus: #FFEFED;
--color-button-danger-active: #FFC2B6;
--color-button-danger-disabled: #FFFFFF;
--color-button-danger-border: #E33816;
--color-button-danger-hover-border: #DF2500;
--color-button-danger-focus-border: #D58576;
--color-button-danger-active-border: #FFC2B6;
--color-button-danger-disabled-border: #D58E80;
--color-button-danger-text: #da5c43;
--color-button-danger-hover-text: #e04527;
--color-button-danger-focus-text: #E12C08;
--color-button-danger-active-text: #C72100;
--color-button-danger-disabled-text: #FFC3B7;

/* 小徽章部分 */
/* 默认基础色 - 小徽章 */
--color-badge-default: #EEEEEE;
--color-badge-default-hover: #e9e9e9;
--color-badge-default-text: #666666;
--color-badge-default-hover-text: #666666;

/* 主色 - 小徽章 */
--color-badge-primary: #eaf1fb;
--color-badge-primary-hover: #e4eefe;
--color-badge-primary-text: #0c7cd5;
--color-badge-primary-hover-text: #0c7cd5;

/* 次色 - 小徽章 */
--color-badge-secondary: #ffefe5;
--color-badge-secondary-hover: #ffebdf;
--color-badge-secondary-text: #f18f51;
--color-badge-secondary-hover-text: #f18f51;

/* 成功色 - 小徽章 */
--color-badge-success: #d5fbd5;
--color-badge-success-hover: #c6f9c6;
--color-badge-success-text: #46cf45;
--color-badge-success-hover-text: #46cf45;

/* 警告色 - 小徽章 */
--color-badge-warning: #ffeac2;
--color-badge-warning-hover: #ffe3ae;
--color-badge-warning-text: #f3a200;
--color-badge-warning-hover-text: #f3a200;

/* 危险色 - 小徽章 */
--color-badge-danger: #FFE6E6;
--color-badge-danger-hover: #ffdcdc;
--color-badge-danger-text: #e04527;
--color-badge-danger-hover-text: #e04527;
            <?php endif; ?>
        }
    </style>
    <script type="text/javascript">
        // 基础配置
        var __system_type__ = '<?php echo htmlentities($system_type); ?>';
        var __root__ = '<?php echo htmlentities($public_host); ?>';
        var __my_http__ = '<?php echo htmlentities($my_http); ?>';
        var __my_url__ = '<?php echo htmlentities($my_url); ?>';
        var __my_public_url__ = '<?php echo htmlentities($my_public_url); ?>';
        var __public__ = '<?php echo htmlentities($public_host); ?>';
        var __default_theme__ = '<?php echo htmlentities($default_theme); ?>';
        var __modal_login_url__ = '<?php echo MyUrl("index/user/modallogininfo"); ?>';
        var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
        var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
        var __user_id__ = <?php if(empty($user['id'])): ?>0<?php else: ?><?php echo htmlentities($user['id']); ?><?php endif; ?>;
        var __currency_symbol__ = '<?php echo htmlentities($currency_symbol); ?>';
        var __is_mobile__ = '<?php if(IsMobile()): ?>1<?php else: ?>0<?php endif; ?>';
        var __env_max_input_vars_count__ = '<?php echo htmlentities($env_max_input_vars_count); ?>';
        var __map_view_url__ = '<?php echo MyUrl("index/map/index"); ?>';
        var __load_map_type__ = '<?php echo htmlentities($load_map_type); ?>';
        var __user_login_info_url__ = '<?php echo MyUrl("index/user/logininfo"); ?>';
        var __user_regster_info_url__ = '<?php echo MyUrl("index/user/reginfo"); ?>';
        var __user_forget_info_url__ = '<?php echo MyUrl("index/user/forgetpwdinfo"); ?>';
        var __goods_spec_type_url__ = '<?php echo MyUrl("index/goods/spectype"); ?>';
        var __goods_spec_detail_url__ = '<?php echo MyUrl("index/goods/specdetail"); ?>';
        var __goods_stock_url__ = '<?php echo MyUrl("index/goods/stock"); ?>';
        var __goods_cart_save_url__ = '<?php echo MyUrl("index/cart/save"); ?>';
        var __goods_cart_info_url__ = '<?php echo MyUrl("index/goods/cartinfo"); ?>';
        // 语言定义（用于js调用、模板引擎直接使用$lang_data.xxx获取对应语言即可）
        <?php if(!empty($lang_data)): foreach($lang_data as $k=>$v): if(!empty($k) and isset($v) and !is_array($v)): ?>
                    var lang_<?php echo htmlentities($k); ?> = '<?php echo htmlentities($v); ?>';
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </script>
</head>
<body class="<?php echo htmlentities($page_unique_mark); if(in_array(MiniAppEnv(), MyConfig('shopxo.mini_app_type_list'))): ?> mini-app-env<?php endif; ?>">
<div class="body-content-container">
    <div class="body-content-formal-container">
        <!-- 页面加载层 -->
        <?php if(isset($is_page_loading) and $is_page_loading == 1): ?>
            <div class="am-modal am-page-loading">
    <?php if(isset($is_page_loading_images) and $is_page_loading_images == 1 and !empty($page_loading_images_url)): ?>
        <img src="<?php echo htmlentities($page_loading_images_url); ?>" />
    <?php else: ?>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    <?php endif; ?>
</div>
        <?php endif; ?>

        <!-- css钩子 -->
        <?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_header) or $is_header == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_css</span>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- 公共header内钩子 -->
        <?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_header) or $is_header == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_common_header</span>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- 公共顶部钩子 -->
        <?php if(!isset($page_pure) or $page_pure != 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_top</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_top_data) and is_array($plugins_view_common_top_data)): foreach($plugins_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>

        <!-- header公共顶部钩子 -->
        <?php if(!isset($is_header) or $is_header == 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_top_header</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_top_header_data) and is_array($plugins_view_common_top_header_data)): foreach($plugins_view_common_top_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>

<!-- header top nav -->
<?php if(MyC('home_main_top_header_status', 1) == 1): ?>
    <!-- 顶部导航条 start -->
    <div class="header-top">
        <div class="am-container header">
            <ul class="top-nav-left am-hide-sm-only">
                <div class="top-nav-items">
                    <div class="menu-hd">
                        <!-- 公共顶部小导航钩子-左侧前面 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_header_navigation_top_left_begin</span>
                            </div>
                        <?php endif; if(!empty($plugins_view_header_navigation_top_left_begin_data) and is_array($plugins_view_header_navigation_top_left_begin_data)): foreach($plugins_view_header_navigation_top_left_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                    <?php echo $hook; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; if(empty($user)): ?>
                            <em class="first"><?php echo MyLang('common.header_top_nav_left_not_login_first'); ?></em>
                            <em class="site-name"><?php echo MyC('home_site_name'); ?></em>
                            <?php if(!empty($home_user_login_type)): ?>
                                [<a href="<?php echo MyUrl('index/user/logininfo'); ?>"><?php echo MyLang('common.login_title'); ?></a>]
                            <?php endif; if(!empty($home_user_reg_type)): ?>
                                [<a href="<?php echo MyUrl('index/user/reginfo'); ?>"><?php echo MyLang('common.register_title'); ?></a>]
                            <?php endif; else: ?>
                            <em class="first"><?php echo MyLang('common.header_top_nav_left_login_first'); ?></em>
                            <?php if(!empty($user['icon'])): ?>
                                <img src="<?php echo htmlentities($user['icon']); ?>" class="common-user-icon" <?php if(!empty($user['icon_title'])): ?>title="<?php echo htmlentities($user['icon_title']); ?>"<?php endif; ?> />
                            <?php endif; ?>
                            <em class="user"><?php echo htmlentities($user['user_name_view']); ?></em>
                            <em class="last"><?php echo MyLang('common.header_top_nav_left_login_last'); ?></em>
                            <em class="site-name"><?php echo MyC('home_site_name'); ?></em>
                            <em class="logout"><a href="<?php echo MyUrl('index/user/logout'); ?>">[<?php echo MyLang('common.logout_title'); ?>]</a></em>
                        <?php endif; ?>

                        <!-- 公共顶部小导航钩子-左侧后面 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_header_navigation_top_left_end</span>
                            </div>
                        <?php endif; if(!empty($plugins_view_header_navigation_top_left_end_data) and is_array($plugins_view_header_navigation_top_left_end_data)): foreach($plugins_view_header_navigation_top_left_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                    <?php echo $hook; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </ul>

            <div class="top-nav-left am-show-sm-only">
                <a href="<?php echo htmlentities($home_url); ?>">
                    <img class="am-height" src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_wap')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
                </a>
            </div>

            <ul class="top-nav-right">
                <!-- 公共顶部小导航钩子-右侧前面 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_header_navigation_top_right_begin</span>
                    </div>
                <?php endif; if(!empty($plugins_view_header_navigation_top_right_begin_data) and is_array($plugins_view_header_navigation_top_right_begin_data)): foreach($plugins_view_header_navigation_top_right_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- 非首页则展示首页入口 -->
                <?php if(MyC('home_header_top_is_home', 0) == 1 and $module_name.$controller_name.$action_name != 'indexindexindex'): ?>
                    <div class="top-nav-items top-nav-items-home">
                        <div class="menu-hd">
                            <a href="<?php echo htmlentities($home_url); ?>">
                                <i class="iconfont icon-index"></i>
                                <span><?php echo MyLang('common.shop_home_title'); ?></span>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- 右侧导航 -->
                <?php if(!empty($common_nav_top_right_list) and is_array($common_nav_top_right_list)): foreach($common_nav_top_right_list as $nav): if(empty($nav['items'])): ?>
                            <div class="top-nav-items <?php if(!empty($nav['type'])): ?>top-nav-items-<?php echo htmlentities($nav['type']); ?><?php endif; ?>">
                                <div class="menu-hd <?php if(isset($nav['is_login']) and $nav['is_login'] == 1 and empty($user)): ?>login-event<?php endif; ?>">
                                    <a href="<?php if(empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($nav['url']); ?><?php endif; ?>">
                                        <?php if(IsUrl($nav['icon'])): ?>
                                            <img src="<?php echo htmlentities($nav['icon']); ?>" class="nav-icon am-vertical-align-middle" />
                                        <?php else: ?>
                                            <i class="iconfont <?php echo htmlentities($nav['icon']); ?> am-vertical-align-middle"></i>
                                        <?php endif; ?>
                                        <span class="am-vertical-align-middle"><?php echo htmlentities($nav['name']); ?></span>
                                        <?php if(isset($nav['badge']) and $nav['badge'] > -1): if($nav['badge'] > 0): ?>
                                                <strong class="am-badge am-badge-danger am-round am-badge-tips <?php if(isset($nav['type']) and $nav['type'] == 'cart'): ?>common-cart-total<?php endif; ?>"><?php echo htmlentities($nav['badge']); ?></strong>
                                            <?php else: ?>
                                                <strong class="am-round <?php if(isset($nav['type']) and $nav['type'] == 'cart'): ?>common-cart-total<?php endif; ?>"><?php echo htmlentities($nav['badge']); ?></strong>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="top-nav-items <?php if(!empty($nav['type'])): ?>top-nav-items-<?php echo htmlentities($nav['type']); ?><?php endif; ?>">
                                <div class="am-dropdown menu-hd" data-am-dropdown>
                                    <a class="am-dropdown-toggle" href="javascript:;" data-am-dropdown-toggle>
                                        <?php if(IsUrl($nav['icon'])): ?>
                                            <img src="<?php echo htmlentities($nav['icon']); ?>" class="nav-icon am-vertical-align-middle" />
                                        <?php else: ?>
                                            <i class="iconfont <?php echo htmlentities($nav['icon']); ?> am-vertical-align-middle"></i>
                                        <?php endif; ?>
                                        <span class="am-vertical-align-middle"><?php echo htmlentities($nav['name']); ?></span>
                                        <i class="am-icon-angle-down am-vertical-align-middle"></i>
                                    </a>
                                    <ul class="am-dropdown-content am-radius">
                                        <?php foreach($nav['items'] as $navs): ?>
                                            <!-- 是否为事件类型和事件值数据格式 -->
                                            <?php if(isset($navs['event_type']) and isset($navs['event_value'])): ?>
                                                <li class="nav-event-item" <?php if(!empty($navs['data_value'])): ?>data-value="<?php echo htmlentities($navs['data_value']); ?>"<?php endif; ?>>
                                                    <?php if(isset($navs['event_type']) and isset($navs['event_value']) and in_array($navs['event_type'], [3,4])): switch($navs['event_type']): case "3": ?>
                                                                <!-- 地图 -->
                                                                <a href="javascript:;" <?php if(!empty($navs['event_value_data']) and isset($navs['event_value_data'][2]) and isset($navs['event_value_data'][3]) and $navs['event_value_data'][2] != 0 and $navs['event_value_data'][3] != 0): ?>class="submit-map-popup am-flex am-flex-items-center" data-lng="<?php echo htmlentities($navs['event_value_data'][2]); ?>" data-lat="<?php echo htmlentities($navs['event_value_data'][3]); ?>"<?php endif; ?>>
                                                                    <p class="nav-images am-margin-right-xs" style="<?php if(!empty($navs['bg_color'])): ?>background:<?php echo htmlentities($navs['bg_color']); ?>;<?php endif; ?>">
                                                                        <?php if((!empty($navs['icon']) or !empty($navs['images_url'])) and !empty($navs['name'])): ?>
                                                                            <img src="<?php if(!empty($navs['icon'])): ?><?php echo htmlentities($navs['icon']); else: ?><?php echo htmlentities($navs['images_url']); ?><?php endif; ?>" alt="<?php echo htmlentities($navs['name']); ?>" />
                                                                        <?php endif; ?>
                                                                    </p>
                                                            <?php break; case "4": ?>
                                                                <!-- 电话 -->
                                                                <a <?php if(!empty($navs['event_value'])): ?>href="tel:<?php echo htmlentities($navs['event_value']); ?>"<?php else: ?>href="javascript:;"<?php endif; ?> class="am-flex am-flex-items-center">
                                                                    <p class="nav-images am-margin-right-xs" style="<?php if(!empty($navs['bg_color'])): ?>background:<?php echo htmlentities($navs['bg_color']); ?>;<?php endif; ?>">
                                                                    <?php if((!empty($navs['icon']) or !empty($navs['images_url'])) and !empty($navs['name'])): ?>
                                                                        <img src="<?php if(!empty($navs['icon'])): ?><?php echo htmlentities($navs['icon']); else: ?><?php echo htmlentities($navs['images_url']); ?><?php endif; ?>" alt="<?php echo htmlentities($navs['name']); ?>" />
                                                                    <?php endif; ?>
                                                                </p>
                                                            <?php break; ?>
                                                        <?php endswitch; else: ?>
                                                        <!-- 默认url地址 -->
                                                        <a <?php if(!empty($navs['event_value'])): ?>href="<?php echo htmlentities($navs['event_value']); ?>"<?php else: ?>href="javascript:;"<?php endif; ?> class="am-flex am-flex-items-center">
                                                            <p class="nav-images am-margin-right-xs" style="<?php if(!empty($navs['bg_color'])): ?>background:<?php echo htmlentities($navs['bg_color']); ?>;<?php endif; ?>">
                                                                <?php if((!empty($navs['icon']) or !empty($navs['images_url'])) and !empty($navs['name'])): ?>
                                                                    <img src="<?php if(!empty($navs['icon'])): ?><?php echo htmlentities($navs['icon']); else: ?><?php echo htmlentities($navs['images_url']); ?><?php endif; ?>" alt="<?php echo htmlentities($navs['name']); ?>" class="am-width" />
                                                                <?php endif; ?>
                                                            </p>
                                                    <?php endif; ?>
                                                    <p class="am-text-truncate"><?php echo htmlentities($navs['name']); ?></p>
                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <!-- 默认为标准名称和url格式 -->
                                                <?php if(!empty($navs['name'])): ?>
                                                    <li class="<?php if(((isset($nav['is_login']) and $nav['is_login'] == 1) or (isset($navs['is_login']) and $navs['is_login'] == 1)) and empty($user)): ?>login-event<?php endif; ?>">
                                                        <a class="am-flex am-flex-items-center" href="<?php if(((isset($nav['is_login']) and $nav['is_login'] == 1) or (isset($navs['is_login']) and $navs['is_login'] == 1)) and empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($navs['url']); ?><?php endif; ?>">
                                                            <?php if(!empty($navs['icon']) or !empty($navs['images_url'])): ?>
                                                                <p class="nav-images am-margin-right-xs" >
                                                                <img src="<?php if(!empty($navs['icon'])): ?><?php echo htmlentities($navs['icon']); else: ?><?php echo htmlentities($navs['images_url']); ?><?php endif; ?>" alt="<?php echo htmlentities($navs['name']); ?>" class="am-width" />
                                                                </p>
                                                            <?php endif; ?>
                                                            <p class="am-text-truncate"><?php echo htmlentities($navs['name']); ?></p>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- 公共顶部小导航钩子-右侧后面 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_header_navigation_top_right_end</span>
                    </div>
                <?php endif; if(!empty($plugins_view_header_navigation_top_right_end_data) and is_array($plugins_view_header_navigation_top_right_end_data)): foreach($plugins_view_header_navigation_top_right_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <!-- 顶部导航条 end -->
<?php endif; ?>

<!-- search -->
<?php if(MyC('home_main_logo_search_status', 1) == 1): ?>
    <!-- 搜索框 start -->
    <div class="nav-search white am-hide-sm-only">
        <div class="am-container">
            <div class="logo-big">
                <a href="<?php echo htmlentities($home_url); ?>">
                    <img src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
                </a>
            </div>
            <!-- logo右侧 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_logo_right</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_logo_right_data) and is_array($plugins_view_common_logo_right_data)): foreach($plugins_view_common_search_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <div class="search-bar">
                <!-- 公共搜索框内左侧 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_common_search_inside_left</span>
                    </div>
                <?php endif; if(!empty($plugins_view_common_search_inside_left_data) and is_array($plugins_view_common_search_inside_left_data)): foreach($plugins_view_common_search_inside_left_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- 搜索框 -->
                <form action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
                    <div class="search-group am-radius am-nbfc">
                        <input id="search-input" name="wd" type="text" placeholder="<?php echo MyLang('common.search_input_placeholder'); ?>" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                        <button type="submit" id="ai-topsearch" class="submit am-btn-primary">
                            <span><?php echo MyLang('common.search_button_text'); ?></span>
                        </button>
                    </div>
                    <?php if(!empty($home_search_keywords)): ?>
                        <ul class="search-hot-keywords">
                            <?php foreach($home_search_keywords as $v): ?>
                                <li><a href="<?php echo MyUrl('index/search/index', ['wd'=>StrToAscii($v)]); ?>" target="_blank"><?php echo htmlentities($v); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </form>

                <!-- 公共搜索框内右侧 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_common_search_inside_right</span>
                    </div>
                <?php endif; if(!empty($plugins_view_common_search_inside_right_data) and is_array($plugins_view_common_search_inside_right_data)): foreach($plugins_view_common_search_inside_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- 公共搜索框右侧 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_search_right</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_search_right_data) and is_array($plugins_view_common_search_right_data)): foreach($plugins_view_common_search_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- 搜索框 end -->
<?php endif; ?>

<!-- header nav -->
<?php if(MyC('home_main_header_status', 1) == 1): ?>
    <header class="am-topbar shop-navigation">
        <div class="am-container">
            <!-- 中间导航左侧 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_left</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_left_data) and is_array($plugins_view_common_header_nav_left_data)): foreach($plugins_view_common_header_nav_left_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- 手机端导航伸展按钮 -->
            <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only switch-submit" data-am-collapse="{target: '#doc-topbar-collapse'}">
                <span class="iconfont icon-more-phone"></span>
            </button>

            <!-- 全部分类 -->
            <a href="<?php echo MyUrl('index/category/index'); ?>" class="am-show-md-only">
                <div class="goods-category-title am-hide-sm-only">
                    <span class="all-goods"><?php echo MyLang('common.all_category_text'); ?></span>
                </div>
            </a>

            <!-- 手机端搜索 -->
            <form class="am-topbar-form am-topbar-left am-form-inline am-show-sm-only navigation-search" role="search" action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="wd" class="am-form-field" placeholder="<?php echo MyLang('common.search_input_placeholder'); ?>" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                    <span class="am-input-group-btn">
                        <button class="am-btn am-btn-default" type="submit">
                            <span class="am-icon-search am-icon-xs"></span>
                        </button>
                    </span>
                </div>

                <!-- 中间导航搜索内部 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_common_header_nav_search_inside</span>
                    </div>
                <?php endif; if(!empty($plugins_view_common_header_nav_search_inside_data) and is_array($plugins_view_common_header_nav_search_inside_data)): foreach($plugins_view_common_header_nav_search_inside_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </form>

            <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
                <!-- 中间导航内容内部顶部 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_common_header_nav_content_inside_top</span>
                    </div>
                <?php endif; if(!empty($plugins_view_common_header_nav_content_inside_top_data) and is_array($plugins_view_common_header_nav_content_inside_top_data)): foreach($plugins_view_common_header_nav_content_inside_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; if(empty($user)): ?>
                    <!-- 未登录操作栏 -->
                    <div class="navigation-button am-show-sm-only">
                        <?php if(!empty($home_user_login_type)): ?>
                            <a href="<?php echo MyUrl('index/user/logininfo'); ?>" class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><?php echo MyLang('common.login_title'); ?></a>
                        <?php endif; if(!empty($home_user_reg_type)): ?>
                            <a href="<?php echo MyUrl('index/user/reginfo'); ?>" class="am-btn am-btn-success am-topbar-btn am-btn-sm"><?php echo MyLang('common.register_title'); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- 主导航 -->
                <?php if(!empty($nav_header)): ?>
                    <ul class="am-nav am-nav-pills am-topbar-nav">
                        <?php foreach($nav_header as $nav): if(empty($nav['items'])): ?>
                                <li>
                                    <a href="<?php echo htmlentities($nav['url']); ?>" <?php if($nav['is_new_window_open'] == 1): ?>target="_blank"<?php endif; if(isset($nav['active']) and $nav['active'] == 1): ?>class="active"<?php endif; ?>><?php echo htmlentities($nav['name']); ?></a>
                                </li>
                            <?php else: ?>
                                <li class="am-dropdown" data-am-dropdown>
                                    <a class="am-dropdown-toggle <?php if(isset($nav['active']) and $nav['active'] == 1): ?>active<?php endif; ?>" data-am-dropdown-toggle href="javascript:;">
                                        <?php echo htmlentities($nav['name']); ?> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content">
                                        <?php foreach($nav['items'] as $navs): ?>
                                            <li>
                                                <a href="<?php echo htmlentities($navs['url']); ?>" <?php if(isset($navs['active']) and $navs['active'] == 1): ?>class="active"<?php endif; ?>><?php echo htmlentities($navs['name']); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <!-- 中间导航内容内部底部 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_common_header_nav_content_inside_bottom</span>
                    </div>
                <?php endif; if(!empty($plugins_view_common_header_nav_content_inside_bottom_data) and is_array($plugins_view_common_header_nav_content_inside_bottom_data)): foreach($plugins_view_common_header_nav_content_inside_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- 中间导航右侧 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_right</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_right_data) and is_array($plugins_view_common_header_nav_right_data)): foreach($plugins_view_common_header_nav_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </header>
<?php endif; ?>

<!-- goods category -->
<!-- 商品分类  -->
<div id="goods-category" class="am-container am-hide-sm-only am-hide-md-only" data-controller-name="<?php echo htmlentities($controller_name); ?>">
    <div class="goods-category-s">
        <?php if(MyC('home_main_header_status', 1) == 1): ?>
            <a href="<?php echo MyUrl('index/category/index'); ?>">
                <div class="goods-category-title">
                    <span class="all-goods"><?php echo MyLang('common.all_category_text'); ?></span>
                </div>
            </a>
        <?php endif; ?>
        <div class="category-content" <?php if((isset($common_goods_category_hidden) and $common_goods_category_hidden == 1)): ?>style="display:none;"<?php endif; ?>>
            <div class="category">
                <ul class="category-list">
                    <?php if(!empty($goods_category_list) and is_array($goods_category_list)): foreach($goods_category_list as $k=>$v): ?>
                            <li class="first" data-index="<?php echo htmlentities($k); ?>">
                                <?php if($category_show_level > 1): ?>
                                    <img class="category-fillet-top am-hide" src="<?php echo htmlentities($attachment_host); ?>/static/index/<?php echo htmlentities($default_theme); ?>/images/corner_round_top.png" />
                                    <img class="category-fillet-bottom am-hide" src="<?php echo htmlentities($attachment_host); ?>/static/index/<?php echo htmlentities($default_theme); ?>/images/corner_round_bottom.png" />
                                <?php endif; ?>
                                <a href="<?php echo MyUrl('index/search/index', ['cid'=>$v['id']]); ?>" class="am-block">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name am-text-truncate">
                                        <?php if(!empty($v['icon'])): ?>
                                            <img class="category-menu-img" src="<?php echo htmlentities($v['icon']); ?>" />
                                            <img class="category-menu-img-active" src="<?php if(empty($v['icon_active'])): ?><?php echo htmlentities($v['icon']); else: ?><?php echo htmlentities($v['icon_active']); ?><?php endif; ?>" />
                                        <?php endif; ?>
                                        <span class="bd-name"><?php echo htmlentities($v['name']); ?></span>
                                    </h3>
                                    <i class="am-icon-angle-right"></i>
                                </div>
                                </a>
                                <?php if($category_show_level > 1): ?>
                                    <div class="menu-item menu-in top">
                                        <?php if(!empty($v['items'])): ?>
                                            <div class="area-in">
                                                <div class="area-bg">
                                                    <div class="menu-srot">
                                                        <div class="sort-side <?php if($category_show_level == 2): ?>am-flex-row<?php elseif($category_show_level == 3): ?>am-flex-col<?php endif; ?>">
                                                            <?php foreach($v['items'] as $vs): if($category_show_level == 2): ?>
                                                                    <dl class="dl-sort <?php if($category_show_level == 2): ?>dl-sort-two<?php endif; ?>">
                                                                        <dd >
                                                                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>">
                                                                                <?php if(!empty($vs['icon'])): ?>
                                                                                    <img src="<?php echo htmlentities($vs['icon']); ?>" width="50" />
                                                                                <?php endif; ?>
                                                                                <span><?php echo htmlentities($vs['name']); ?></span>
                                                                            </a>
                                                                        </dd>
                                                                    </dl>
                                                                <?php elseif($category_show_level == 3): ?>
                                                                    <div class="category-show-level3">
                                                                        <div class="category-show-level3-title">
                                                                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>">
                                                                                <span><?php echo htmlentities($vs['name']); ?></span>
                                                                            </a>
                                                                        </div>
                                                                        <?php if(!empty($vs['items'])): ?>
                                                                            <div class="category-show-level3-child">
                                                                                <?php foreach($vs['items'] as $vss): ?>
                                                                                    <div>
                                                                                        <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vss['id']]); ?>">
                                                                                            <span><?php echo htmlentities($vss['name']); ?></span>
                                                                                        </a>
                                                                                    </div>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="table-no am-radius">
    <img src="<?php if(!empty($module_data) and !empty($module_data['icon'])): ?><?php echo htmlentities($module_data['icon']); else: ?><?php echo htmlentities($attachment_host); ?>/static/common/images/no-data.png<?php endif; ?>" />
    <p class="am-margin-top-sm"><?php if(!empty($module_data) and !empty($module_data['msg'])): ?><?php echo htmlentities($module_data['msg']); else: ?><?php echo MyLang('no_data'); ?><?php endif; ?></p>
</div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 搜索页面顶部钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_search_top</span>
    </div>
<?php endif; if(!empty($plugins_view_search_top_data) and is_array($plugins_view_search_top_data)): foreach($plugins_view_search_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- 面包屑导航 -->
<?php if(!empty($breadcrumb_data) and MyC('home_main_breadcrumb_header_status', 1) == 1): ?>
    <div class="breadcrumb-data am-hide-sm-only">
        <div class="am-container">
            <ol class="am-breadcrumb am-margin-bottom-0">
                <?php foreach($breadcrumb_data as $v): if(!empty($v['name'])): switch($v['type']): case "0": ?>
                                <li <?php if(empty($v['url'])): ?>class="am-active"<?php endif; ?>>
                                    <?php if(!empty($v['url'])): ?><a href="<?php echo htmlentities($v['url']); ?>"><?php endif; ?>
                                    <?php echo htmlentities($v['name']); if(!empty($v['url'])): ?></a><?php endif; ?>
                                </li>
                            <?php break; case "1": if(!empty($v['data']) and is_array($v['data'])): ?>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="am-dropdown" data-am-dropdown>
                                                <span class="am-dropdown-toggle" data-am-dropdown-toggle><?php echo htmlentities($v['name']); ?> <i class="am-icon-angle-down"></i></span>
                                                <ul class="am-dropdown-content">
                                                    <?php foreach($v['data'] as $vs): if(!empty($vs['name']) and !empty($vs['url'])): ?>
                                                            <li><a href="<?php echo htmlentities($vs['url']); ?>"><?php echo htmlentities($vs['name']); ?></a></li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </a>
                                    </li>
                                <?php endif; break; ?>
                        <?php endswitch; ?>
                    <?php endif; ?>      
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
<?php endif; ?>

<!-- content -->
<div class="am-container">
    <!-- 搜索页面顶部内部结构里面钩子 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_search_inside_top</span>
        </div>
    <?php endif; if(!empty($plugins_view_search_inside_top_data) and is_array($plugins_view_search_inside_top_data)): foreach($plugins_view_search_inside_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                <?php echo $hook; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <div class="search-container am-u-sm-12 am-u-md-12 am-padding-left-0 am-padding-right-0" data-category-id="<?php if(!empty($params['category_id'])): ?><?php echo htmlentities($params['category_id']); ?><?php endif; ?>" data-brand-id="<?php if(!empty($params['brand_id'])): ?><?php echo htmlentities($params['brand_id']); ?><?php endif; ?>">
        <!-- 手机模式下基础信息+搜索条件按钮 -->
        <div class="map-base-tips am-nbfc am-padding-horizontal-xs am-padding-vertical-sm am-show-sm">
            <p class="am-fl">
                <span><?php echo MyLang('search.filter_out_first_text'); ?></span>
                <strong class="map-result-count am-text-danger"><?php echo htmlentities($data_total); ?></strong>
                <span><?php echo MyLang('search.filter_out_last_data_text'); ?></span>
            </p>
            <button class="am-btn am-btn-primary am-btn-xs am-radius am-icon-filter map-offcanvas-submit" data-am-offcanvas="{target: '#search-map'}"></button>
        </div>

        <!-- 搜索条件顶部钩子 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_search_map_top</span>
            </div>
        <?php endif; if(!empty($plugins_view_search_map_top_data) and is_array($plugins_view_search_map_top_data)): foreach($plugins_view_search_map_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- 搜索条件内容、侧边栏内容 -->
        <div id="search-map" class="am-offcanvas">
            <div class="am-offcanvas-bar am-radius">
                <div class="am-offcanvas-content">
                    <ul class="map-item am-list am-list-border am-margin-bottom-0">
                        <!-- 搜索页面筛选条件内前面钩子 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_search_map_inside_begin</span>
                            </div>
                        <?php endif; if(!empty($plugins_view_search_map_inside_begin_data) and is_array($plugins_view_search_map_inside_begin_data)): foreach($plugins_view_search_map_inside_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                    <?php echo $hook; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- 基础数据 -->
                        <li class="am-nbfc">
                            <p class="am-fl">
                                <span><?php echo MyLang('search.filter_out_first_text'); ?></span>
                                <strong class="map-result-count am-text-danger"><?php echo htmlentities($data_total); ?></strong>
                                <span><?php echo MyLang('search.filter_out_last_data_text'); ?></span>
                            </p>
                            <?php if(isset($is_map) and $is_map == 1): ?>
                                <a href="<?php echo MyUrl('index/search/index'); ?>" class="map-remove-submit am-fr am-margin-right-sm"><?php echo MyLang('clear_title'); ?></a>
                            <?php endif; ?>
                        </li>

                        <!-- 搜索页面筛选条件内基础底部钩子 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_search_map_inside_base_bottom</span>
                            </div>
                        <?php endif; if(!empty($plugins_view_search_map_inside_base_bottom_data) and is_array($plugins_view_search_map_inside_base_bottom_data)): foreach($plugins_view_search_map_inside_base_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                    <?php echo $hook; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- 品牌 -->
                        <?php if(!empty($brand_list)): ?>
                            <li class="am-nbfc map-brand-container" data-field="brand_ids">
                                <?php if(!empty($search_map_info['brand']) and !empty($params['brand'])): ?>
                                    <div class="brand-info">
                                        <div class="map-left am-text-center am-fl"><?php echo MyLang('brand_title'); ?></div>
                                        <div class="map-right map-images-text-items am-fr am-nbfc">
                                            <a <?php if(empty($search_map_info['brand']['website_url'])): ?>href="javascript:;"<?php else: ?>href="<?php echo htmlentities($search_map_info['brand']['website_url']); ?>" target="_blank"<?php endif; ?> title="<?php echo htmlentities($search_map_info['brand']['name']); ?>">
                                                <?php if(empty($search_map_info['brand']['logo'])): ?>
                                                    <p class="info-logo-empty am-fl am-text-center"><?php echo htmlentities($search_map_info['brand']['name']); ?></p>
                                                <?php else: ?>
                                                    <img src="<?php echo htmlentities($search_map_info['brand']['logo']); ?>" alt="<?php echo htmlentities($search_map_info['brand']['name']); ?>" class="info-logo am-img-thumbnail am-fl" />
                                                <?php endif; ?>
                                            </a>
                                            <div class="am-fr info-right">
                                                <!-- logo为空则不显示名称、无logo会使用名称当做logo展示 -->
                                                <?php if(!empty($search_map_info['brand']['logo'])): ?>
                                                    <p class="info-name am-margin-bottom-xs"><?php echo htmlentities($search_map_info['brand']['name']); ?></p>
                                                <?php endif; ?>
                                                <p class="info-desc am-text-truncate-2"><?php echo htmlentities($search_map_info['brand']['describe']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="map-left am-text-center am-fl"><?php echo MyLang('brand_title'); ?></div>
                                    <div class="map-right map-images-text-items am-fr am-nbfc">
                                        <ul class="am-nbfc">
                                            <?php foreach($brand_list as $v): ?>
                                                <li <?php if(isset($v['is_active']) and $v['is_active'] == 1): ?>class="active"<?php endif; ?>>
                                                    <a href="<?php echo htmlentities($v['url']); ?>">
                                                        <?php if(empty($v['logo'])): ?>
                                                            <?php echo htmlentities($v['name']); else: ?>
                                                            <img src="<?php echo htmlentities($v['logo']); ?>" alt="<?php echo htmlentities($v['name']); ?>" />
                                                        <?php endif; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <div class="map-more-submit am-hide">
                                            <span><?php echo MyLang('more_title'); ?></span>
                                            <i class="am-icon-angle-down"></i>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>

                        <!-- 分类 -->
                        <?php if(!empty($category_list)): ?>
                            <li class="am-nbfc map-category-container" data-field="category_ids">
                                <div class="map-left am-text-center am-fl"><?php echo MyLang('category_title'); ?></div>
                                <div class="map-right map-text-items am-fr am-nbfc">
                                    <ul class="am-nbfc">
                                        <?php foreach($category_list as $v): ?>
                                            <li <?php if(isset($v['is_active']) and $v['is_active'] == 1): ?>class="active"<?php endif; ?>>
                                                <a href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['name']); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="map-more-submit am-hide">
                                        <span><?php echo MyLang('more_title'); ?></span>
                                        <i class="am-icon-angle-down"></i>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>

                        <!-- 价格 -->
                        <?php if(!empty($screening_price_list)): ?>
                            <li class="am-nbfc screening-price-container" data-field="screening_price_values">
                                <div class="map-left am-text-center am-fl"><?php echo MyLang('price_title'); ?></div>
                                <div class="map-right map-text-items am-fr am-nbfc">
                                    <ul class="am-nbfc">
                                        <?php foreach($screening_price_list as $v): ?>
                                            <li <?php if(isset($v['is_active']) and $v['is_active'] == 1): ?>class="active"<?php endif; ?>>
                                                <a href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['name']); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="map-more-submit am-hide">
                                        <span><?php echo MyLang('more_title'); ?></span>
                                        <i class="am-icon-angle-down"></i>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>

                        <!-- 属性 -->
                        <?php if(!empty($goods_params_list)): ?>
                            <li class="am-nbfc goods-params-container" data-field="goods_params_values">
                                <div class="map-left am-text-center am-fl"><?php echo MyLang('attr_title'); ?></div>
                                <div class="map-right map-text-items am-fr am-nbfc">
                                    <ul class="am-nbfc">
                                        <?php foreach($goods_params_list as $v): ?>
                                            <li <?php if(isset($v['is_active']) and $v['is_active'] == 1): ?>class="active"<?php endif; ?>>
                                                <a href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['value']); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="map-more-submit am-hide">
                                        <span><?php echo MyLang('more_title'); ?></span>
                                        <i class="am-icon-angle-down"></i>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>

                        <!-- 规格 -->
                        <?php if(!empty($goods_spec_list)): ?>
                            <li class="am-nbfc goods-spec-container" data-field="goods_spec_values">
                                <div class="map-left am-text-center am-fl"><?php echo MyLang('spec_title'); ?></div>
                                <div class="map-right map-text-items am-fr am-nbfc">
                                    <ul class="am-nbfc">
                                        <?php foreach($goods_spec_list as $v): ?>
                                            <li <?php if(isset($v['is_active']) and $v['is_active'] == 1): ?>class="active"<?php endif; ?>>
                                                <a href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['value']); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="map-more-submit am-hide">
                                        <span><?php echo MyLang('more_title'); ?></span>
                                        <i class="am-icon-angle-down"></i>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>

                        <!-- 搜索页面筛选条件内尾部钩子 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_search_map_inside_end</span>
                            </div>
                        <?php endif; if(!empty($plugins_view_search_map_inside_end_data) and is_array($plugins_view_search_map_inside_end_data)): foreach($plugins_view_search_map_inside_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                    <?php echo $hook; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 搜索页面搜索导航条顶部钩子 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_search_nav_top</span>
            </div>
        <?php endif; if(!empty($plugins_view_search_nav_top_data) and is_array($plugins_view_search_nav_top_data)): foreach($plugins_view_search_nav_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- 排序方式 -->
        <div class="search-nav">
            <ul class="sort-nav" data-am-sticky="{animation: 'slide-top'}">
                <!-- 搜索页面搜索导航条内前面钩子 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_search_nav_inside_begin</span>
                    </div>
                <?php endif; if(!empty($plugins_view_search_nav_inside_begin_data) and is_array($plugins_view_search_nav_inside_begin_data)): foreach($plugins_view_search_nav_inside_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- 排序列表 -->
                <?php if(!empty($map_order_by_list)): foreach($map_order_by_list as $k=>$v): ?>
                        <li class="<?php if($v['is_active'] == 1): ?>active<?php endif; ?>">
                            <a href="<?php echo htmlentities($v['url']); ?>">
                                <span><?php echo htmlentities($v['name']); ?></span>
                                <?php if($v['type'] != 'default'): ?>
                                    <i class="am-icon-long-arrow-<?php if($v['value'] == 'asc' or $v['is_active'] == 0): ?>down<?php else: ?>up<?php endif; ?>"></i>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- 搜索页面排序导航条内尾部钩子 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_search_nav_inside_end</span>
                    </div>
                <?php endif; if(!empty($plugins_view_search_nav_inside_end_data) and is_array($plugins_view_search_nav_inside_end_data)): foreach($plugins_view_search_nav_inside_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <li>
                    <div class="layout-styles" data-value="<?php echo htmlentities($list_layout_value); ?>">
                        <i class="iconfont <?php if($list_layout_value == 1): ?>icon-table-list <?php else: ?>icon-table-grid<?php endif; ?>"></i>
                    </div>
                </li>
            </ul>
        </div>

        <!-- 搜索页面数据容器顶部钩子 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_search_data_top</span>
            </div>
        <?php endif; if(!empty($plugins_view_search_data_top_data) and is_array($plugins_view_search_data_top_data)): foreach($plugins_view_search_data_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- 数据列表 -->
        <?php if(!empty($data_list)): if($list_layout_value == 1): ?>
                <?php echo ModuleInclude('module/goods/list/base', [
                    'goods_list'  => $data_list,
                    'type'        => 'search',
                ]); else: ?>
                <?php echo ModuleInclude('module/goods/grid/base', [
                    'goods_list'  => $data_list,
                    'type'        => 'search',
                ]); ?>
            <?php endif; else: ?>
            <div class="table-no am-radius">
    <img src="<?php if(!empty($module_data) and !empty($module_data['icon'])): ?><?php echo htmlentities($module_data['icon']); else: ?><?php echo htmlentities($attachment_host); ?>/static/common/images/no-data.png<?php endif; ?>" />
    <p class="am-margin-top-sm"><?php if(!empty($module_data) and !empty($module_data['msg'])): ?><?php echo htmlentities($module_data['msg']); else: ?><?php echo MyLang('no_data'); ?><?php endif; ?></p>
</div>
        <?php endif; ?>

        <!-- 搜索页面数据容器底部钩子 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_search_data_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_search_data_bottom_data) and is_array($plugins_view_search_data_bottom_data)): foreach($plugins_view_search_data_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- 分页 -->
        <div class="am-nbfc am-margin-top-sm">
            <?php echo $page_html; ?>
        </div>
    </div>

    <!-- 搜索页面顶部内部结构里面钩子 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_search_inside_bottom</span>
        </div>
    <?php endif; if(!empty($plugins_view_search_inside_bottom_data) and is_array($plugins_view_search_inside_bottom_data)): foreach($plugins_view_search_inside_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                <?php echo $hook; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<!-- 搜索页面底部钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_search_bottom</span>
    </div>
<?php endif; if(!empty($plugins_view_search_bottom_data) and is_array($plugins_view_search_bottom_data)): foreach($plugins_view_search_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- footer -->
        </div>

        <div class="body-content-footer-container">
            <!-- footer start -->
            <?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): ?>
            	<!-- 底部导航上面钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_common_footer_top</span>
    </div>
<?php endif; if(!empty($plugins_view_common_footer_top_data) and is_array($plugins_view_common_footer_top_data)): foreach($plugins_view_common_footer_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- 底部内容及页脚 -->
<?php if(MyC('home_main_footer_content_status', 1) == 1 and (!IsMobile() or (IsMobile() and MyC('common_is_mobile_concise_model') != 1))): ?>
	<!-- 底部导航 -->
	<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{}">
		<div class="am-container footer-nav-content">
			<!-- 底部导航 -->
			<?php if(!empty($nav_footer)): ?>
				<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay am-no-layout am-u-md-8 am-u-lg-9 footer-nav-list" data-am-gallery="{}">
					<?php foreach($nav_footer as $k=>$v): if($k < 4): ?>
							<li>
								<div class="am-gallery-item">
									<p class="footer-nav-title am-text-truncate"><?php echo htmlentities($v['name']); ?></p>
									<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
											<p class="am-text-truncate">
												<a href="<?php echo htmlentities($vs['url']); ?>" <?php if($vs['is_new_window_open'] == 1): ?>target="_blank"<?php endif; ?>><?php echo htmlentities($vs['name']); ?></a>
											</p>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<!-- 商店信息 -->
			<ul class="footer-about am-u-md-4 am-u-lg-3">
				<?php if(!empty($common_customer_store_tel)): ?>
					<li class="tel">
						<i class="iconfont icon-footer-tel am-vertical-align-middle"></i>
						<a href="tel:<?php echo htmlentities($common_customer_store_tel); ?>"><?php echo htmlentities($common_customer_store_tel); ?></a>
					</li>
				<?php endif; if(!empty($common_customer_store_address)): ?>
					<li class="address">
						<i class="iconfont icon-footer-address am-vertical-align-middle"></i>
						<span><?php echo htmlentities($common_customer_store_address); ?></span>
					</li>
				<?php endif; if(!empty($common_customer_store_email)): ?>
					<li class="email">
						<i class="iconfont icon-footer-email am-vertical-align-middle"></i>
						<span><?php echo htmlentities($common_customer_store_email); ?></span>
					</li>
				<?php endif; if(!empty($common_customer_store_qrcode)): ?>
					<li class="qrcode">
						<img src="<?php echo htmlentities($common_customer_store_qrcode); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
					</li>
				<?php endif; ?>
			</ul>
		</div>

		<!-- 页脚 -->
		<div class="am-footer-miscs">
			<div class="am-container">
				<!-- 友情链接 -->
				<?php if(!empty($link_list)): ?>
					<div class="friendship-list">
						<ul class="am-cf am-margin-bottom-sm">
							<li class="am-fl am-text-center title">友情链接</li>
							<?php foreach($link_list as $v): ?>
								<li class="am-fl am-text-center">
									<a href="<?php echo htmlentities($v['url']); ?>" <?php if($v['is_new_window_open'] == 1): ?> target="_blank"<?php endif; ?>><?php echo htmlentities($v['name']); ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<!-- 页脚信息 -->
				<p class="powered">
    <?php echo $home_theme_footer_bottom_powered; ?> <?php echo htmlentities(APPLICATION_VERSION); ?>
</p>
<?php if(!empty($home_site_icp)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a href="https://beian.miit.gov.cn/" target="_blank">
            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-icp-icon.png" alt="<?php echo MyLang('common.footer_icp_filing_text'); ?>" />
            <?php echo htmlentities($home_site_icp); ?>
        </a>
    </p>
<?php endif; if(!empty($home_site_security_record_name)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a <?php if(empty($home_site_security_record_url)): ?>href="javascript:;"<?php else: ?>href="<?php echo htmlentities($home_site_security_record_url); ?>" target="_blank"<?php endif; ?>>
            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-gongan-icon.png" alt="<?php echo MyLang('common.footer_public_security_filing_text'); ?>" />
            <?php echo htmlentities($home_site_security_record_name); ?>
        </a>
    </p>
<?php endif; if(!empty($home_site_company_license)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a href="<?php echo htmlentities($home_site_company_license); ?>" target="_blank">
            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-company-license-icon.png" alt="<?php echo MyLang('common.footer_business_license_text'); ?>" />
            <?php echo MyLang('common.footer_business_license_text'); ?>
        </a>
    </p>
<?php endif; if(!empty($home_site_telecom_license)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a href="javascript:;"><?php echo htmlentities($home_site_telecom_license); ?></a>
    </p>
<?php endif; ?>
			</div>
		</div>
	</footer>
<?php else: ?>
	<!-- 页脚 -->
	<footer class="am-footer am-footer am-footer-default footer-base-content">
		<div class="am-footer-miscs">
			<!-- 页脚信息 -->
			<p class="powered">
    <?php echo $home_theme_footer_bottom_powered; ?> <?php echo htmlentities(APPLICATION_VERSION); ?>
</p>
<?php if(!empty($home_site_icp)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a href="https://beian.miit.gov.cn/" target="_blank">
            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-icp-icon.png" alt="<?php echo MyLang('common.footer_icp_filing_text'); ?>" />
            <?php echo htmlentities($home_site_icp); ?>
        </a>
    </p>
<?php endif; if(!empty($home_site_security_record_name)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a <?php if(empty($home_site_security_record_url)): ?>href="javascript:;"<?php else: ?>href="<?php echo htmlentities($home_site_security_record_url); ?>" target="_blank"<?php endif; ?>>
            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-gongan-icon.png" alt="<?php echo MyLang('common.footer_public_security_filing_text'); ?>" />
            <?php echo htmlentities($home_site_security_record_name); ?>
        </a>
    </p>
<?php endif; if(!empty($home_site_company_license)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a href="<?php echo htmlentities($home_site_company_license); ?>" target="_blank">
            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-company-license-icon.png" alt="<?php echo MyLang('common.footer_business_license_text'); ?>" />
            <?php echo MyLang('common.footer_business_license_text'); ?>
        </a>
    </p>
<?php endif; if(!empty($home_site_telecom_license)): ?>
    <b>|</b>
    <p class="footer-icp">
        <a href="javascript:;"><?php echo htmlentities($home_site_telecom_license); ?></a>
    </p>
<?php endif; ?>
		</div>
	</footer>
<?php endif; ?>
            <?php endif; ?>
            <!-- footer end -->

            <!-- 公共底部钩子 -->
            <?php if(!isset($page_pure) or $page_pure != 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_common_bottom</span>
                    </div>
                <?php endif; if(!empty($plugins_view_common_bottom_data) and is_array($plugins_view_common_bottom_data)): foreach($plugins_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endif; ?>

            <!-- footer公共底部钩子 -->
            <?php if(!isset($is_footer) or $is_footer == 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_common_bottom_footer</span>
                    </div>
                <?php endif; if(!empty($plugins_view_common_bottom_footer_data) and is_array($plugins_view_common_bottom_footer_data)): foreach($plugins_view_common_bottom_footer_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- 公共上传组件初始化 -->
    <textarea id="upload-editor-view" data-url="<?php if(isset($is_load_upload_editor) and $is_load_upload_editor == 1): ?><?php echo MyUrl('index/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?><?php endif; ?>" style="display: none;"></textarea>
    <!-- 公共单个上传组件表单初始化 -->
    <form class="am-form form-validation-common-upload-editor-single" method="post" action="<?php echo MyUrl('index/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?>" request-type="ajax-fun" request-value="CommonFormUploadEditorSingleBack" style="display: none;">
        <input type="file" name="upfile" accept="" />
        <input type="hidden" name="action" value="uploadimage" />
        <button type="reset"></button>
        <button type="submit"></button>
    </form>

    <!-- 公共视频扫码组件初始化 -->     
    <div class="am-popup am-radius popup-iframe popup-not-title" id="common-video-scan-popup">
        <div class="am-popup-inner am-radius">
            <span data-am-modal-close class="am-close am-close-alt">&times;</span>
            <div class="scanner">
                <div class="scan-area">
                    <div class="mark top-left"></div>
                    <div class="mark top-right"></div>
                    <div class="mark bottom-left"></div>
                    <div class="mark bottom-right"></div>
                </div>
                <video id="video"></video>
                <i class="am-icon-refresh am-icon-md video-scan-switch-camera-submit"></i>
                <button type="button" class="am-btn am-btn-primary am-radius am-btn-xs video-scan-continue-submit am-hide"><?php echo MyLang('continue_scan_title'); ?></button>
                <div class="video-scan-audio-container"></div>
            </div>
        </div>
    </div>
</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jquery/jquery-2.2.4.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/assets/js/amazeui.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- jshash -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jshash/md5-min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 图片放大镜 -->
<?php if(isset($is_load_imagezoom) and $is_load_imagezoom == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/imagezoom/jquery.imagezoom.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- echarts 图表 -->
<?php if(isset($is_load_echarts) and $is_load_echarts == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/echarts.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/macarons.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/shine.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-dialog/amazeui.dialog.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 图像裁剪插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/cropper/cropper.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖动 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/tdrag/tdrag.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 复制插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/clipboard/clipboard.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- base64 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/base64/base64csvtojson.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖拽排序插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/dragsort/jquery.dragsort-0.5.2.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 动画数数 -->
<?php if(isset($is_load_animation_count) and $is_load_animation_count == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/animation-count-to/animation.count.to.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- ueditor 编辑器 -->
<script type='text/javascript' src="<?php echo htmlentities($my_public_url); ?>static/common/lib/ueditor/ueditor.config.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/ueditor.all.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 颜色选择器 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/colorpicker/jquery.colorpicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 日期组件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/My97DatePicker/WdatePicker.js"></script>

<!-- ckplayer播放器 -->
<?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/js/ckplayer.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 条形码 -->
<?php if(isset($is_load_barcode) and $is_load_barcode == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/JsBarcode/JsBarcode.all.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- map -->
<?php if(isset($is_load_map_api) and $is_load_map_api == 1 and !empty($load_map_type)): switch($load_map_type): case "baidu": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://api.map.baidu.com/api?v=2.0&ak=<?php echo MyC('common_baidu_map_ak'); ?>"></script>
        <?php break; case "amap": ?>
            <script type="text/javascript">
                window._AMapSecurityConfig = {
                    securityJsCode: '<?php echo MyC("common_amap_map_safety_ak"); ?>',
                }
            </script>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://webapi.amap.com/maps?v=2.0&key=<?php echo MyC('common_amap_map_ak'); ?>"></script>
        <?php break; case "tencent": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://map.qq.com/api/js?v=2.exp&key=<?php echo MyC('common_tencent_map_ak'); ?>"></script>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://map.qq.com/api/gljs?libraries=<?php if(empty($map_tencent_libraries)): ?>service<?php else: ?><?php echo htmlentities($map_tencent_libraries); ?><?php endif; ?>&v=1.exp&key=<?php echo MyC('common_tencent_map_ak'); ?>"></script>
        <?php break; case "tianditu": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://api.tianditu.gov.cn/api?v=4.0&tk=<?php echo MyC('common_tianditu_map_ak'); ?>"></script>
        <?php break; ?>
    <?php endswitch; ?>
<?php endif; ?>

<!-- 打印js -->
<?php if(isset($is_load_hiprint) and $is_load_hiprint == 1): ?>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/hiprint.bundle.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/polyfill.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/jquery.hiwprint.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/JsBarcode.all.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/qrcode.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/jquery.minicolors.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/jspdf/canvas2image.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/jspdf/canvg.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/jspdf/html2canvas.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/plugins/jspdf/jspdf.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/hiprint/hiprint.config.js"></script>
<?php endif; ?>

<!-- 调用摄像头扫码js -->
<?php if(isset($is_load_video_scan) and $is_load_video_scan == 1): ?>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/ZXing/ZXing.min.js"></script>
<?php endif; ?>

<!-- 代码编辑器js -->
<?php if(isset($is_load_ace_builds) and $is_load_ace_builds == 1): ?>
    <script type="text/javascript" src="<?php echo htmlentities($public_host); ?>static/common/lib/ace-builds/src-min/ace.js"></script>
<?php endif; ?>

<!-- 隐藏编辑器初始化 -->
<script type="text/javascript">
    var upload_editor = UE.getEditor("upload-editor-view", {
        isShow: false,
        focus: false,
        enableAutoSave: false,
        autoSyncData: false,
        autoFloatEnabled:false,
        wordCount: false,
        sourceEditor: null,
        scaleEnabled:true,
        toolbars: [["insertimage", "insertvideo", "attachment"]]
    });

    // 关闭弹窗
    function CommonPopupClose()
    {
        $('.am-popup').modal('close');
        $('.am-modal').modal('close');
    }

    // 公共单个文件上传表单回调
    function CommonFormUploadEditorSingleBack(e)
    {
        CommonFormUploadEditorSingleBackHandle(e);
    }

    // 子级调用购物车数量更新
    function IframePopupHomeCartNumberTotalUpdate(value, popup = null)
    {
        HomeCartNumberTotalUpdate(value);
        if((popup || null) != null)
        {
            $(popup).modal('close');
        }
    }
</script>

<!-- 项目公共 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/index/<?php echo htmlentities($default_theme); ?>/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/layout.admin.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 应用插件公共js -->
<?php if(!empty($plugins_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 当前控制器js -->
<?php if(!empty($module_js)): ?>
	<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 底部信息 --> 
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): ?>
    <?php echo MyC('home_footer_info'); ?>
<?php endif; ?>

<!-- js钩子 -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_js</span>
        </div>
    <?php endif; ?>
<?php endif; if(!empty($plugins_js_data) and is_array($plugins_js_data)): foreach($plugins_js_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
                <script type='text/javascript' src="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
            <?php else: ?>
                <script type='text/javascript' src="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
            <?php endif; elseif(is_array($hook)): foreach($hook as $hook_js): if(!empty($hook_js) and is_string($hook_js)): if(substr($hook_js, 0, 4) == 'http'): ?>
                        <script type='text/javascript' src="<?php echo htmlentities($hook_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
                    <?php else: ?>
                        <script type='text/javascript' src="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- 公共页面底部钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_common_page_bottom</span>
    </div>
<?php endif; if(!empty($plugins_common_page_bottom_data) and is_array($plugins_common_page_bottom_data)): foreach($plugins_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>