<?php /*a:6:{s:72:"/www/wwwroot/deli.shop.cn/app/admin/view/default/site/siteset/index.html";i:1699863362;s:67:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/header.html";i:1699863362;s:73:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/page_loading.html";i:1699863362;s:69:"/www/wwwroot/deli.shop.cn/app/admin/view/default/site/public/nav.html";i:1699863362;s:77:"/www/wwwroot/deli.shop.cn/app/admin/view/default/site/public/siteset_nav.html";i:1699863362;s:67:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/footer.html";i:1699863362;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo MyConfig('shopxo.default_charset', 'utf-8'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($public_host); ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
	<title><?php echo htmlentities($admin_theme_site_name); ?><?php echo MyLang('common.admin_browser_title'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/assets/css/amazeui.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

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

    <!-- 可视化拖拽 -->
    <?php if(isset($is_load_layout) and $is_load_layout == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.admin.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 左侧菜单图标 -->
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/iconfontmenu.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- 插件 -->
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 页面样式 -->
	<?php if(!empty($module_css)): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- css钩子 -->
    <?php if(!empty($plugins_admin_css_data) and is_array($plugins_admin_css_data)): foreach($plugins_admin_css_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
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
	<?php if(!empty($plugins_admin_common_header_data) and is_array($plugins_admin_common_header_data)): foreach($plugins_admin_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
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
            /* 基础 */
            --html-body-size: 10px;
            --body-bg-color: #ffffff;
            --color-price: #E22C08;
            --color-red: #E22C08;
            --color-yellow: #FAAD14;
            --color-blue: #76AFFF;
            --color-green: #5EB95E;

            /* 主色 */
            --color-main: #E22C08;
            --color-mian-light: #F25232;
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
        }
    </style>
    <script type="text/javascript">
        // 基础配置
        var __system_type__ = '<?php echo htmlentities($system_type); ?>';
        var __root__ = '<?php echo htmlentities($public_host); ?>';
        var __my_http__ = '<?php echo htmlentities($my_http); ?>';
        var __my_host__ = '<?php echo htmlentities($my_host); ?>';
        var __my_url__ = '<?php echo htmlentities($my_url); ?>';
        var __my_public_url__ = '<?php echo htmlentities($my_public_url); ?>';
        var __public__ = '<?php echo htmlentities($public_host); ?>';
        var __default_theme__ = '<?php echo htmlentities($default_theme); ?>';
        var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
        var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
        var __currency_symbol__ = '<?php echo htmlentities($currency_symbol); ?>';
        var __is_mobile__ = '<?php if(IsMobile()): ?>1<?php else: ?>0<?php endif; ?>';
        var __env_max_input_vars_count__ = '<?php echo htmlentities($env_max_input_vars_count); ?>';
        var __map_view_url__ = '<?php echo MyUrl("admin/map/index"); ?>';
        var __load_map_type__ = '<?php echo htmlentities($load_map_type); ?>';
        var __goods_spec_type_url__ = '';
        var __goods_spec_detail_url__ = '';
        // 语言定义（用于js调用、模板引擎直接使用$lang_data.xxx获取对应语言即可）
        <?php if(!empty($lang_data)): foreach($lang_data as $k=>$v): if(!empty($k) and isset($v) and !is_array($v)): ?>
                    var lang_<?php echo htmlentities($k); ?> = '<?php echo htmlentities($v); ?>';
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </script>
</head>
<body class="<?php echo htmlentities($page_unique_mark); ?>">
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

<!-- 公共顶部钩子 -->
<?php if(!empty($plugins_admin_view_common_top_data) and is_array($plugins_admin_view_common_top_data) and (!isset($is_header) or $is_header == 1)): foreach($plugins_admin_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			<?php echo $hook; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

<!-- right content start  -->
<div class="content-right">
    <!-- second nav start -->
    <?php if(!empty($second_nav_list) and is_array($second_nav_list)): ?>
    <ul class="am-nav am-nav-pills table-nav second-nav">
        <?php foreach($second_nav_list as $v): ?>
            <li <?php if($nav_type == $v['type']): ?>class="am-active"<?php endif; ?> data-type="<?php echo htmlentities($v['type']); ?>">
                <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>$v['type'], 'view_type'=>$view_type]); ?>"><?php echo htmlentities($v['name']); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; switch($nav_type): case "login":case "forgetpwd": ?>
        <!-- 登录/密码找回提示 -->
        <div class="content">
            <div class="am-alert am-alert-warning am-radius am-margin-bottom-0" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                <p class="am-text-xs"><?php echo MyLang('site.left_images_random_tips'); ?></p>
            </div>
        </div>
    <?php break; case "register": ?>
        <!-- 注册提示 -->
        <div class="content">
            <div class="am-alert am-alert-warning am-radius am-margin-bottom-0" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                <p class="am-text-xs"><?php echo MyLang('site.background_color_tips'); ?></p>
            </div>
        </div>
    <?php break; ?>
<?php endswitch; ?>
    <!-- second nav end -->

    <div class="content">
        <!-- nav start -->
        <?php if(!empty($siteset_nav_list) and is_array($siteset_nav_list)): ?>
    <ul class="am-nav am-nav-pills table-nav">
        <?php foreach($siteset_nav_list as $v): ?>
            <li <?php if($view_type == $v['type']): ?>class="am-active"<?php endif; ?> data-type="<?php echo htmlentities($v['type']); ?>">
                <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>$nav_type, 'view_type'=>$v['type']]); ?>"><?php echo htmlentities($v['name']); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
        <!-- nav end -->

        <!-- form start -->
        <form class="am-form form-validation am-form-popup-fixed" action="<?php echo MyUrl('admin/site/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/site/index', ['nav_type'=>$nav_type, 'view_type'=>$view_type]); ?>" enctype="multipart/form-data">
            <!-- 基础 -->
            <div class="am-panel am-panel-default am-margin-top-sm">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title"><?php echo MyLang('base_title'); ?></h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_banner_left_status']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_banner_left_status']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['home_index_banner_left_status']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_index_banner_left_status']['error_tips']); ?>" required>
                            <?php foreach($common_close_open_list as $v): ?>
                                <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['home_index_banner_left_status']['value']) and $data['home_index_banner_left_status']['value'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_banner_right_status']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_banner_right_status']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['home_index_banner_right_status']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_index_banner_right_status']['error_tips']); ?>" required>
                            <?php foreach($common_close_open_list as $v): ?>
                                <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['home_index_banner_right_status']['value']) and $data['home_index_banner_right_status']['value'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_floor_data_type']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_data_type']['describe']); ?></span></label>
                        <?php foreach($common_site_floor_data_type_list as $k=>$v): ?>
                            <label class="am-radio-inline">
                                <input type="radio" name="<?php echo htmlentities($data['home_index_floor_data_type']['only_tag']); ?>" value="<?php echo htmlentities($k); ?>" <?php if(isset($data['home_index_floor_data_type']['value']) and $data['home_index_floor_data_type']['value'] == $k): ?>checked<?php endif; ?> data-validation-message="<?php echo htmlentities($data['home_index_floor_data_type']['error_tips']); ?>" data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
                            </label>
                        <?php endforeach; ?>
                        <div class="am-alert">
                            <?php echo MyLang('site.site_setup_layout_tips'); ?><a href="<?php echo MyUrl('index/index/index', ['is_design'=>1, 'save_url'=>urlencode(base64_encode(MyUrl('admin/layout/layoutindexhomesave')))]); ?>" target="_blank" class="am-margin-left-sm"><?php echo MyLang('site.site_setup_layout_button_name'); ?></a>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_floor_left_top_category']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_left_top_category']['describe']); ?></span></label>
                        <?php if(!empty($goods_category_list)): ?>
                            <ul class="am-list am-list-static am-list-border am-margin-bottom-0">
                                <?php foreach($goods_category_list as $category): ?>
                                    <li>
                                        <p class="am-text-truncate am-margin-bottom-xs">
                                            <span><?php echo htmlentities($category['name']); ?></span>
                                            <span class="am-margin-left-sm form.am-form am-form-group-label-tips"><?php echo htmlentities($category['vice_name']); ?></span>
                                        </p>
                                        <?php if(!empty($category['items'])): foreach($category['items'] as $v): ?>
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" name="<?php echo htmlentities($data['home_index_floor_left_top_category']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>]" value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($category['config_category_ids']) and in_array($v['id'], $category['config_category_ids'])): ?>checked<?php endif; ?> data-validation-message="<?php echo htmlentities($data['home_index_floor_left_top_category']['error_tips']); ?>" data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
                                                </label>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="am-text-danger am-margin-top-sm"><?php echo MyLang('site.site_setup_goods_category_tips'); ?></p>
                        <?php else: ?>
                            <div class="am-text-center am-margin-top-lg">
                                <i class="am-icon-warning"></i>
                                <span><?php echo MyLang('site.site_setup_goods_category_no_data_tips'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_floor_top_right_keywords']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_top_right_keywords']['describe']); ?></span></label>
                        <?php if(!empty($goods_category_list)): ?>
                            <ul class="am-list am-list-static am-list-border am-margin-bottom-0">
                                <?php foreach($goods_category_list as $category): ?>
                                    <li>
                                        <p class="am-text-truncate am-margin-bottom-xs">
                                            <span><?php echo htmlentities($category['name']); ?></span>
                                            <span class="am-margin-left-sm form.am-form am-form-group-label-tips"><?php echo htmlentities($category['vice_name']); ?></span>
                                        </p>
                                        <input type="text" name="<?php echo htmlentities($data['home_index_floor_top_right_keywords']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>]" placeholder="<?php echo htmlentities($category['name']); ?><?php echo htmlentities($data['home_index_floor_top_right_keywords']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['home_index_floor_top_right_keywords']['error_tips']); ?>" class="am-radius" value="<?php echo htmlentities($category['config_keywords']); ?>" data-am-tagsinput />
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="am-text-danger am-margin-top-sm"><?php echo MyLang('site.site_setup_goods_category_tips'); ?></p>
                        <?php else: ?>
                            <div class="am-text-center am-margin-top-lg">
                                <i class="am-icon-warning"></i>
                                <span><?php echo MyLang('site.site_setup_goods_category_no_data_tips'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- 自动模式 -->
            <div class="am-panel am-panel-default am-radius">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title"><?php echo MyLang('site.base_item_site_auto_mode_title'); ?></h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_floor_goods_max_count']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_goods_max_count']['describe']); ?></span></label>
                        <input type="number" min="0" name="<?php echo htmlentities($data['home_index_floor_goods_max_count']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['home_index_floor_goods_max_count']['name']); ?>" data-validation-message="<?php echo htmlentities($data['home_index_floor_goods_max_count']['error_tips']); ?>" class="am-radius am-form-field" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['home_index_floor_goods_max_count']['value']); ?>"<?php endif; ?> />
                        <?php if(is_array(MyLang('site.goods_auto_mode_max_count_tips_list'))): ?>
                            <div class="am-alert am-alert-warning" data-am-alert>
                                <button type="button" class="am-close">&times;</button>
                                <p><?php echo implode('</p><p>', MyLang('site.goods_auto_mode_max_count_tips_list')); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_floor_goods_order_by_type']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_goods_order_by_type']['describe']); ?></span></label>
                        <?php foreach($common_goods_order_by_type_list as $k=>$v): ?>
                            <label class="am-radio-inline">
                                <input type="radio" name="<?php echo htmlentities($data['home_index_floor_goods_order_by_type']['only_tag']); ?>" value="<?php echo htmlentities($k); ?>" <?php if(isset($data['home_index_floor_goods_order_by_type']['value']) and $data['home_index_floor_goods_order_by_type']['value'] == $k): ?>checked<?php endif; ?> data-validation-message="<?php echo htmlentities($data['home_index_floor_goods_order_by_type']['error_tips']); ?>" data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
                            </label>
                        <?php endforeach; if(is_array(MyLang('site.goods_auto_mode_order_by_tips_list'))): ?>
                            <div class="am-alert am-alert-warning" data-am-alert>
                                <button type="button" class="am-close">&times;</button>
                                <p><?php echo implode('</p><p>', MyLang('site.goods_auto_mode_order_by_tips_list')); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['describe']); ?></span></label>
                        <?php foreach($common_goods_order_by_rule_list as $k=>$v): ?>
                            <label class="am-radio-inline">
                                <input type="radio" name="<?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['only_tag']); ?>" value="<?php echo htmlentities($k); ?>" <?php if(isset($data['home_index_floor_goods_order_by_rule']['value']) and $data['home_index_floor_goods_order_by_rule']['value'] == $k): ?>checked<?php endif; ?> data-validation-message="<?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['error_tips']); ?>" data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- 手动模式 -->
            <div class="am-panel am-panel-default am-radius">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title"><?php echo MyLang('site.base_item_site_manual_mode_title'); ?></h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label class="am-block"><?php echo htmlentities($data['home_index_floor_manual_mode_goods']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_manual_mode_goods']['describe']); ?></span></label>
                        <?php if(is_array(MyLang('site.goods_manual_mode_max_tips_list'))): ?>
                            <div class="am-alert am-alert-warning" data-am-alert>
                                <button type="button" class="am-close">&times;</button>
                                <p><?php echo implode('</p><p>', MyLang('site.goods_manual_mode_max_tips_list')); ?></p>
                            </div>
                        <?php endif; if(!empty($goods_category_list)): ?>
                            <ul class="am-list am-list-static am-list-border am-margin-bottom-0 am-margin-top-sm">
                                <?php foreach($goods_category_list as $category): ?>
                                    <li>
                                        <p class="am-text-truncate am-margin-bottom-xs">
                                            <span><?php echo htmlentities($category['name']); ?></span>
                                            <span class="am-margin-left-sm form.am-form am-form-group-label-tips"><?php echo htmlentities($category['vice_name']); ?></span>
                                        </p>
                                        <ul class="am-list am-list-border am-list-striped am-margin-top-sm manual-mode-goods-container manual-mode-goods-container-<?php echo htmlentities($category['id']); ?>">
                                        <?php if(!empty($floor_manual_mode_goods_list) && !empty($floor_manual_mode_goods_list[$category['id']])): foreach($floor_manual_mode_goods_list[$category['id']] as $g): ?>
                                                <li class="manual-mode-goods-item-<?php echo htmlentities($g['id']); ?>">
                                                    <input type="hidden" name="<?php echo htmlentities($data['home_index_floor_manual_mode_goods']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>][]" value="<?php echo htmlentities($g['id']); ?>" />
                                                    <a href="<?php echo htmlentities($g['goods_url']); ?>" target="_blank" class="am-text-truncate">
                                                        <img src="<?php echo htmlentities($g['images']); ?>" alt="<?php echo htmlentities($g['title']); ?>" class="am-fl am-margin-right-xs" width="20" height="20" />
                                                        <span><?php echo htmlentities($g['title']); ?></span>
                                                    </a>
                                                    <button type="button" class="am-close am-fr">&times;</button>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <span class="business-operations-submit goods-popup-add" data-tag=".manual-mode-goods-container-<?php echo htmlentities($category['id']); ?>" data-form-name="<?php echo htmlentities($data['home_index_floor_manual_mode_goods']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>][]">+ <?php echo MyLang('site.add_goods_title'); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="am-text-danger am-margin-top-sm"><?php echo MyLang('site.site_setup_goods_category_tips'); ?></p>
                        <?php else: ?>
                            <div class="am-text-center am-margin-top-lg">
                                <i class="am-icon-warning"></i>
                                <span><?php echo MyLang('site.site_setup_goods_category_no_data_tips'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="am-form-popup-submit">
                <input type="hidden" name="nav_type" value="<?php echo htmlentities($nav_type); ?>" />
                <input type="hidden" name="view_type" value="<?php echo htmlentities($view_type); ?>" />
                <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example" data-am-loading="{spinner: 'circle-o-notch', loadingText:'<?php echo MyLang('save_title'); ?>'}">
                    <i class="am-icon-save"></i>
                    <span><?php echo MyLang('save_title'); ?></span>
                </button>
            </div>
        </form>
        <!-- form end -->
    </div>
</div>
<!-- right content end  -->

<!-- 商品添加弹窗 -->
<div class="am-popup am-radius" id="siteset-goods-popup">
    <div class="am-popup-inner">
        <div class="am-popup-hd">
            <h4 class="am-popup-title"><?php echo MyLang('site.add_goods_title'); ?></h4>
            <span class="am-icon-arrows-alt am-full"></span>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd am-padding-0">
            <form class="am-form am-padding-sm goods-add-container">
                <!-- 搜索 -->
                <div class="forth-selection-container" data-search-url="<?php echo MyUrl('admin/site/goodssearch'); ?>">
                    <select class="am-radius chosen-select forth-selection-form-category" data-placeholder="<?php echo MyLang('form_goods_category_placeholder'); ?>" data-validation-message="<?php echo MyLang('form_goods_category_message'); ?>">
                        <option value=""><?php echo MyLang('form_goods_category_placeholder'); ?></option>
                        <?php if(!empty($goods_category_list)): foreach($goods_category_list as $v): ?>
                                <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['name']); ?></option>
                                <?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
                                        <option style="padding-left: 15px;" value="<?php echo htmlentities($vs['id']); ?>"><?php if(empty($vs['items'])): ?>├<?php else: ?>└<?php endif; ?>² <?php echo htmlentities($vs['name']); ?></option>
                                        <?php if(!empty($vs['items'])): foreach($vs['items'] as $kss=>$vss): ?>
                                                <option style="padding-left: 30px;" value="<?php echo htmlentities($vss['id']); ?>"><?php if($kss == count($vs['items'])-1): ?>└<?php else: ?>├<?php endif; ?>³ <?php echo htmlentities($vss['name']); ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <input type="text" placeholder="<?php echo MyLang('goods_name'); ?>" class="am-radius forth-selection-form-keywords" />
                    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-sm am-icon-search search-submit" data-am-loading="{loadingText: ' <?php echo MyLang('searching_tips'); ?>'}"> <?php echo MyLang('search_title'); ?></button>
                </div>

                <!-- 商品列表 -->
                <div class="am-scrollable-vertical am-margin-top-sm am-padding-bottom-xs goods-list-container" data-loading-msg="<?php echo MyLang('searching_tips'); ?>">
                    <ul class="am-gallery am-avg-sm-3 am-avg-md-4 am-avg-lg-5 am-gallery-bordered"></ul>
                </div>

                <!-- 分页 -->
                <div class="am-margin-top-sm am-text-center goods-page-container"></div>
            </form>
        </div>
    </div>
</div>

<!-- footer start -->
<!-- 应用商店账户绑定 -->
<div class="am-popup popup-not-title" id="store-accounts-popup">
    <div class="am-popup-inner">
        <?php if(empty($site_store_info) or empty($site_store_info['base']) or !isset($site_store_info['base']['is_user_not_cloae_accounts_popup']) or $site_store_info['base']['is_user_not_cloae_accounts_popup'] == 0): ?>
            <span data-am-modal-close class="am-close am-close-alt">&times;</span>
        <?php endif; ?>
        <div class="am-popup-bd">
            <!-- form start -->
            <form class="am-form form-validation-store-accounts" action="<?php echo MyUrl('admin/index/storeaccountsbind'); ?>" method="POST" request-type="ajax-reload">
                <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                    <label><?php echo MyLang('store_bind_form_accounts'); ?><span class="am-form-group-label-tips-must">*</span></label>
                    <input type="text" name="common_store_accounts" placeholder="<?php echo MyLang('store_bind_form_accounts_placeholder'); ?>" data-validation-message="<?php echo MyLang('store_bind_form_accounts_message'); ?>" class="am-radius" value="" autocomplete="off" required />
                </div>
                <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                    <label><?php echo MyLang('store_bind_form_password'); ?><span class="am-form-group-label-tips-must">*</span></label>
                    <input type="password" name="common_store_password" placeholder="<?php echo MyLang('store_bind_form_password_placeholder'); ?>" data-validation-message="<?php echo MyLang('store_bind_form_password_message'); ?>" class="am-radius" value="" autocomplete="off" required />
                </div>
                
                <div class="am-form-group am-form-group-refreshing am-margin-top-sm">
                    <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'<?php echo MyLang('bind_tips'); ?>'}"><?php echo MyLang('bind_title'); ?></button>
                </div>
                <div class="am-margin-top-xr am-text-right am-padding-right-xs">
                    <a href="<?php echo MyConfig('shopxo.store_regster_url'); ?>" target="_blank"><?php echo MyLang('store_bind_form_regster_name'); ?></a>
                </div>
                <p class="am-text-warning am-text-center am-margin-top-sm"><?php echo MyLang('store_bind_form_tips'); ?></p>
            </form>
            <!-- form end -->
        </div>
    </div>
</div>

<!-- 插件包更新弹窗 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="package-upgrade-modal">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <p class="am-margin-bottom-sm"><strong class="upgrade-name">...</strong></p>
            <div class="am-scrollable-vertical am-text-left"></div>
            <div class="am-text-left am-nbfc am-margin-top-sm">
                <span class="am-icon-calendar-check-o upgrade-date"> ...</span>
                <span class="am-icon-vimeo am-margin-left-sm upgrade-version"> ...</span>
                <div class="am-fr">
                    <button type="button" class="am-btn am-btn-default am-radius am-btn-xs" data-am-modal-close><?php echo MyLang('cancel_title'); ?></button>
                    <button type="button" class="am-btn am-btn-success am-radius am-btn-xs am-margin-left-sm package-upgrade-submit" data-type="" data-value="" data-url="<?php echo MyUrl('admin/packageupgrade/upgrade'); ?>"><?php echo MyLang('update_title'); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 公共上传组件初始化 -->
<textarea id="upload-editor-view" data-url="<?php if(isset($is_load_upload_editor) and $is_load_upload_editor == 1): ?><?php echo MyUrl('admin/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?><?php endif; ?>" style="display: none;"></textarea>
<!-- 公共单个上传组件表单初始化 -->
<form class="am-form form-validation-common-upload-editor-single" method="post" action="<?php echo MyUrl('admin/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?>" request-type="ajax-fun" request-value="CommonFormUploadEditorSingleBack" style="display: none;">
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

<!-- 公共底部钩子 -->
<?php if(!empty($plugins_admin_view_common_bottom_data) and is_array($plugins_admin_view_common_bottom_data)): foreach($plugins_admin_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jquery/jquery-2.2.4.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/assets/js/amazeui.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- jshash -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jshash/md5-min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- echarts 图表 -->
<?php if(isset($is_load_echarts) and $is_load_echarts == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/echarts.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/macarons.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/shine.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- ueditor 编辑器 -->
<script type='text/javascript' src="<?php echo htmlentities($my_public_url); ?>static/common/lib/ueditor/ueditor.config.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/ueditor.all.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 颜色选择器 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/colorpicker/jquery.colorpicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖拽排序插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/dragsort/jquery.dragsort-0.5.2.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 动画数数 -->
<?php if(isset($is_load_animation_count) and $is_load_animation_count == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/animation-count-to/animation.count.to.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-dialog/amazeui.dialog.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 日期组件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/My97DatePicker/WdatePicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖动 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/tdrag/tdrag.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 复制插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/clipboard/clipboard.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- base64 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/base64/base64csvtojson.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

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
</script>

<!-- 项目公共 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
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

<!-- js钩子 -->
<?php if(!empty($plugins_admin_js_data) and is_array($plugins_admin_js_data)): foreach($plugins_admin_js_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
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
<?php if(!empty($plugins_admin_common_page_bottom_data) and is_array($plugins_admin_common_page_bottom_data)): foreach($plugins_admin_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<script type="text/javascript">
$(function()
{
    // 绑定商店帐号
    <?php if(!empty($site_store_info) and !empty($site_store_info['base']) and isset($site_store_info['base']['is_user_force_bind_accounts']) and $site_store_info['base']['is_user_force_bind_accounts'] == 1 and !in_array($module_name.$controller_name.$action_name, ['adminindexindex', 'adminadminlogininfo']) and empty($site_store_info['user'])): ?>
        StoreAccountsPopupOpen();
    <?php endif; ?>
});
</script>
<!-- footer end -->