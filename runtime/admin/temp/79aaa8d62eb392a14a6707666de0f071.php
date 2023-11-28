<?php /*a:6:{s:74:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/pluginsadmin/index.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/header.html";i:1699863362;s:75:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/page_loading.html";i:1699863362;s:72:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/pluginsadmin/nav.html";i:1699863362;s:71:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/not_data.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/footer.html";i:1699863362;}*/ ?>
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
    <div class="content">
        <!-- nav start -->
        <ul class="am-nav am-nav-pills table-nav">
    <?php if(!empty($nav_data) and is_array($nav_data)): foreach($nav_data as $v): ?>
            <li <?php if($view_type == $v['type']): ?>class="am-active"<?php endif; ?>>
                <a href="<?php echo MyUrl('admin/pluginsadmin/index', ['view_type'=>$v['type']]); ?>"><?php echo htmlentities($v['name']); ?></a>
            </li>
        <?php endforeach; ?>
    <?php endif; if($is_system_show_base == 1 and !empty($store_url)): ?>
        <li class="am-fr">
            <a class="am-margin-left-sm" href="<?php echo htmlentities($store_url); ?>" target="_blank"><?php echo MyLang('pluginsadmin.base_nav_more_plugins_download_name'); ?> <i class="am-icon-external-link"></i></a>
        </li>
    <?php endif; ?>
</ul>
        <!-- nav end -->

        <!-- operation start -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="am-g am-margin-bottom-sm am-margin-top-sm">
                <a href="<?php echo MyUrl('admin/pluginsadmin/saveinfo'); ?>" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus"> <?php echo MyLang('add_title'); ?></a>
            </div>
        <?php endif; ?>
        <!-- operation end -->

        <div class="plugins-data-list am-nbfc">
            <?php if(!empty($data_list['db_data']) or !empty($data_list['dir_data'])): ?>
                <div class="am-input-group am-input-group-sm plugins-search">
                    <input type="text" class="am-form-field am-radius" placeholder="<?php echo MyLang('pluginsadmin.base_search_input_placeholder'); ?>" />
                    <span class="am-input-group-btn">
                        <button class="am-btn am-btn-default am-radius am-icon-search" type="button"> <?php echo MyLang('search_title'); ?></button>
                    </span>
                </div>

                <!-- 操作提示 -->
                <div class="am-alert am-radius">
                    <p><?php echo MyLang('pluginsadmin.base_top_tips_one'); ?></p>
                    <p>
                        <span><?php echo MyLang('pluginsadmin.base_top_tips_two'); ?></span>
                        <a href="javascript:;" class="am-margin-left am-icon-cog submit-move-setup-open"> <?php echo MyLang('pluginsadmin.base_open_setup_title'); ?></a>
                        <a href="javascript:;" class="am-margin-left am-icon-check submit-move-setup-save am-hide"> <?php echo MyLang('save_title'); ?></a>
                        <a href="javascript:;" class="am-margin-left-sm am-icon-close submit-move-setup-cancel am-hide"> <?php echo MyLang('cancel_title'); ?></a>
                    </p>
                    <?php if(empty($site_store_info) or empty($site_store_info['user'])): ?>
                        <p>
                            <span><?php echo MyLang('store_bind_accounts_tips'); ?></span>
                            <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-margin-left-xs am-icon-gg store-accounts-event"> <?php echo MyLang('store_bind_accounts_name'); ?></button>
                        </p>
                    <?php endif; ?>
                </div>

                <?php if(!empty($data_list['db_data'])): ?>
                    <!-- 插件分类 -->
                    <div class="plugins-category-nav am-padding-vertical-xs">
                        <strong><?php echo MyLang('pluginsadmin.plugins_category_title'); ?></strong>
                        <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-margin-left-sm"><?php echo MyLang('all_title'); ?></button>
                        <?php if(!empty($plugins_categosy_list)): foreach($plugins_categosy_list as $cv): ?>
                                <button type="button" class="am-btn am-btn-default am-radius am-btn-xs am-margin-left-sm" data-value="<?php echo htmlentities($cv['id']); ?>"><?php echo htmlentities($cv['name']); ?></button>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <a href="javascript:;" class="am-fr am-margin-top-xs am-icon-list-ul submit-popup" data-url="<?php echo MyUrl('admin/pluginscategory/index'); ?>" data-full="1" data-full-max="1" data-class="plugins-category-save-popup"> <?php echo MyLang('pluginsadmin.plugins_category_admin_title'); ?></a>
                    </div>

                    <!-- 已安装 -->
                    <ul class="already-install am-nbfc" data-setup-save-url="<?php echo MyUrl('admin/pluginsadmin/setupsave'); ?>">
                        <?php foreach($data_list['db_data'] as $v): if(isset($v['is_install']) and $v['is_install'] == 1): ?>
                                <li class="plugins-category-<?php echo htmlentities($v['plugins_category_id']); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-plugins="<?php echo htmlentities($v['plugins']); ?>">
                                    <div class="item <?php if($v['is_enable'] == 0): ?>am-active<?php endif; ?>" id="data-list-<?php echo htmlentities($v['plugins']); ?>">
                                        <img src="<?php echo htmlentities($v['logo']); ?>" class="icon" />
                                        <div class="base">
                                            <h3 class="name"><?php echo htmlentities($v['name']); ?></h3>
                                            <p><?php echo MyLang('pluginsadmin.data_list_author_title'); ?>：<?php echo htmlentities($v['author']); ?></p>
                                            <?php if(empty($site_store_info) or empty($site_store_info['vip']) or !isset($site_store_info['vip']['status']) or $site_store_info['vip']['status'] == 0): ?>
                                                <p><?php echo MyLang('pluginsadmin.data_list_author_url_title'); ?>：<a href="<?php echo htmlentities($v['author_url']); ?>" target="_blank"><?php echo htmlentities($v['author_url']); ?></a></p>
                                            <?php endif; ?>
                                            <p><?php echo MyLang('pluginsadmin.data_list_version_title'); ?>：<?php echo htmlentities($v['version']); ?></p>
                                        </div>
                                        <div class="desc"><?php echo htmlentities($v['desc']); ?></div>
                                        <div class="operation">
                                            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                                <a href="<?php echo MyUrl('admin/pluginsadmin/saveinfo', array('id'=>$v['plugins'])); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-edit" title="<?php echo MyLang('edit_title'); ?>"></a>
                                                <a href="<?php echo MyUrl('admin/pluginsadmin/download', array('id'=>$v['plugins'])); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-download" title="<?php echo MyLang('download_title'); ?>"></a>
                                                <button class="am-btn am-btn-default am-btn-xs am-radius am-icon-cloud-upload submit-popup" data-url="<?php echo MyUrl('admin/pluginsadmin/storeuploadinfo', ['id'=>$v['plugins']]); ?>" title="<?php echo MyLang('upload_title'); ?>"></button>
                                            <?php endif; ?>

                                            <a href="javascript:;" data-set-url="<?php echo PluginsAdminUrl($v['plugins'], 'admin', 'index'); ?>" data-name="<?php echo htmlentities($v['name']); ?>" data-key="plugins-<?php echo htmlentities($v['plugins']); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-gear plugins-set-event" title="<?php echo MyLang('setup_title'); ?>"></a>
                                            
                                            <button class="am-btn am-btn-default am-btn-xs am-radius am-icon-circle-o submit-ajax" data-url="<?php echo MyUrl('admin/pluginsadmin/uninstall'); ?>" data-id="<?php echo htmlentities($v['plugins']); ?>" data-view="reload" data-msg="<?php echo MyLang('pluginsadmin.uninstall_confirm_tips'); ?>" title="<?php echo MyLang('uninstall_title'); ?>"></button>

                                            <a href="javascript:;" class="am-btn am-btn-default am-btn-xs am-icon-check submit-state <?php if($v['is_enable'] == 1): ?>am-success<?php endif; ?>" data-url="<?php echo MyUrl('admin/pluginsadmin/statusupdate'); ?>" data-id="<?php echo htmlentities($v['plugins']); ?>" data-state="<?php echo htmlentities($v['is_enable']); ?>" data-is-update-status="1" title="<?php echo MyLang('status_title'); ?>"></a>

                                            <?php if(isset($v['is_home']) and $v['is_home'] == true): ?>
                                                <a href="<?php echo PluginsHomeUrl($v['plugins'], 'index', 'index'); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-home" title="<?php echo MyLang('home_title'); ?>" target="_blank"></a>
                                            <?php endif; ?>

                                            <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-arrows submit-move am-hide" title="<?php echo MyLang('sort_title'); ?>"></button>

                                            <?php if(!empty($upgrade_info) and isset($upgrade_info[$v['plugins']])): if(isset($upgrade_info[$v['plugins']]['version_new']) and version_compare($upgrade_info[$v['plugins']]['version_new'], $v['version'], '>')): ?>
                                                    <button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-refresh package-upgrade-event" title="<?php echo MyLang('update_title'); ?>" data-type="plugins" data-name="<?php echo htmlentities($v['name']); ?>" data-value="<?php echo htmlentities($v['plugins']); ?>" data-json="<?php echo urlencode(json_encode($upgrade_info[$v['plugins']])); ?>"></button>
                                                <?php endif; if(!empty($upgrade_info[$v['plugins']]['version_main']) and $upgrade_info[$v['plugins']]['version_main'] != $v['version']): ?>
                                                    <span class="am-fr am-text-danger am-margin-top-sm">v<?php echo htmlentities($upgrade_info[$v['plugins']]['version_main']); ?></span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="plugins-right-top-container am-hide">
                                            <?php if(!empty($left_menu)): ?>
                                                <div class="am-inline-block chosen-select-item">
                                                    <select class="am-radius chosen-select" name="plugins_menu_control" data-placeholder="<?php echo MyLang('pluginsadmin.plugins_menu_control_title'); ?>">
                                                        <option value=""><?php echo MyLang('pluginsadmin.plugins_menu_control_title'); ?></option>
                                                        <?php foreach($left_menu as $nv): ?>
                                                            <option value="<?php echo htmlentities($nv['control']); ?>" <?php if(isset($v['plugins_menu_control']) and $v['plugins_menu_control'] == strtolower($nv['control'])): ?>selected<?php endif; ?>><?php echo htmlentities($nv['name']); ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            <?php endif; if(!empty($plugins_categosy_list)): ?>
                                                <div class="am-inline-block chosen-select-item">
                                                    <select class="am-radius chosen-select" name="plugins_category_id" data-placeholder="<?php echo MyLang('pluginsadmin.plugins_category_title'); ?>">
                                                        <option value=""><?php echo MyLang('pluginsadmin.plugins_category_title'); ?></option>
                                                        <?php foreach($plugins_categosy_list as $cv): ?>
                                                            <option value="<?php echo htmlentities($cv['id']); ?>" <?php if(isset($v['plugins_category_id']) and $cv['id'] == $v['plugins_category_id']): ?>selected<?php endif; ?>><?php echo htmlentities($cv['name']); ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                    <!-- 搜索无数据展示 -->
                    <div class="not-data-tips am-hide">
                        <div class="table-no">
    <i class="am-icon-skyatlas am-icon-lg"></i>
    <p class="am-margin-top-sm"><?php echo MyLang('no_data'); ?></p>
</div>
                    </div>
                <?php endif; if(!empty($data_list['dir_data'])): ?>
                    <!-- 未安装 -->
                    <div class="am-text-center am-margin-top-lg am-margin-bottom-xs middle-divider">
                        <strong>
                            <i class="am-icon-angle-double-down"></i>
                            <span class="am-text-lg am-margin-horizontal-xs"><?php echo MyLang('pluginsadmin.not_install_divide_title'); ?></span>
                            <i class="am-icon-angle-double-down"></i>
                        </strong>
                        <hr data-am-widget="divider" class="am-divider am-divider-dashed am-margin-top-0" />
                    </div>
                    <ul class="am-nbfc" data-setup-save-url="<?php echo MyUrl('admin/pluginsadmin/sortsave'); ?>">
                        <?php foreach($data_list['dir_data'] as $v): if(!isset($v['is_install']) or $v['is_install'] == 0): ?>
                                <li data-id="<?php echo htmlentities($v['id']); ?>" data-plugins="<?php echo htmlentities($v['plugins']); ?>">
                                    <div class="item am-active" id="data-list-<?php echo htmlentities($v['plugins']); ?>">
                                        <img src="<?php echo htmlentities($v['logo']); ?>" class="icon" />
                                        <div class="base">
                                            <h3 class="name"><?php echo htmlentities($v['name']); ?></h3>
                                            <p><?php echo MyLang('pluginsadmin.data_list_author_title'); ?>：<?php echo htmlentities($v['author']); ?></p>
                                            <?php if(empty($site_store_info) or empty($site_store_info['vip']) or !isset($site_store_info['vip']['status']) or $site_store_info['vip']['status'] == 0): ?>
                                                <p><?php echo MyLang('pluginsadmin.data_list_author_url_title'); ?>：<a href="<?php echo htmlentities($v['author_url']); ?>" target="_blank"><?php echo htmlentities($v['author_url']); ?></a></p>
                                            <?php endif; ?>
                                            <p><?php echo MyLang('pluginsadmin.data_list_version_title'); ?>：<?php echo htmlentities($v['version']); ?></p>
                                        </div>
                                        <div class="desc"><?php echo htmlentities($v['desc']); ?></div>
                                        <div class="operation">
                                            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                                <a href="<?php echo MyUrl('admin/pluginsadmin/saveinfo', array('id'=>$v['plugins'])); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-edit" title="<?php echo MyLang('edit_title'); ?>"></a>
                                                <a href="<?php echo MyUrl('admin/pluginsadmin/download', array('id'=>$v['plugins'])); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-download" title="<?php echo MyLang('download_title'); ?>"></a>
                                                <button class="am-btn am-btn-default am-btn-xs am-radius am-icon-cloud-upload submit-popup" data-url="<?php echo MyUrl('admin/pluginsadmin/storeuploadinfo', ['id'=>$v['plugins']]); ?>" title="<?php echo MyLang('upload_title'); ?>"></button>
                                            <?php endif; ?>

                                            <button class="am-btn am-btn-default am-btn-xs am-radius am-icon-remove submit-delete-modal" data-url="<?php echo MyUrl('admin/pluginsadmin/delete'); ?>" data-id="<?php echo htmlentities($v['plugins']); ?>" title="<?php echo MyLang('delete_title'); ?>"></button>

                                            <button class="am-btn am-btn-default am-btn-xs am-radius am-icon-cubes submit-ajax" data-url="<?php echo MyUrl('admin/pluginsadmin/install'); ?>" data-id="<?php echo htmlentities($v['plugins']); ?>" data-view="reload" data-msg="<?php echo MyLang('install_confirm_tips'); ?>" title="<?php echo MyLang('install_title'); ?>"></button>
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                    <!-- 删除弹层 -->
                    <div class="am-modal am-modal-no-btn" tabindex="-1" id="plugins-delete-modal">
                        <div class="am-modal-dialog am-radius am-nbfc">
                            <div class="am-modal-hd">
                                <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
                            </div>
                            <div class="am-modal-bd am-margin-top-sm">
                                <div class="am-alert  am-text-left" data-am-alert>
                                    <p><?php echo MyLang('pluginsadmin.delete_plugins_text'); ?><span class="am-text-warning"><?php echo MyLang('pluginsadmin.delete_plugins_text_tips'); ?></span></p>
                                    <p><?php echo MyLang('pluginsadmin.delete_plugins_data_text'); ?><span class="am-text-warning"><?php echo MyLang('pluginsadmin.delete_plugins_data_text_tips'); ?></span></p>
                                </div>
                                <p class="am-text-danger am-margin-top"><?php echo MyLang('pluginsadmin.delete_plugins_ps_tips'); ?></p>
                                <div class="am-margin-top-sm">
                                    <button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-circle-o submit-ajax" data-url="<?php echo MyUrl('admin/pluginsadmin/delete'); ?>" data-id="0" data-value="1" data-view="reload" data-msg="<?php echo MyLang('delete_confirm_tips'); ?>"> <?php echo MyLang('pluginsadmin.delete_plugins_data_button_name'); ?></button>
                                    <button class="am-btn am-btn-warning am-btn-xs am-radius am-icon-remove submit-ajax" data-url="<?php echo MyUrl('admin/pluginsadmin/delete'); ?>" data-id="0" data-value="0" data-view="reload" data-msg="<?php echo MyLang('delete_confirm_tips'); ?>"> <?php echo MyLang('pluginsadmin.delete_plugins_button_name'); ?></button>

                                    <button class="am-btn am-btn-success am-btn-xs am-radius am-icon-reply" data-am-modal-close> <?php echo MyLang('pluginsadmin.cancel_delete_plugins_button_name'); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; if($is_system_show_base == 1): ?>
                    <div class="am-padding-vertical-xl am-text-center">
                        <a href="<?php echo htmlentities($store_url); ?>" target="_blank" class="am-margin-left-xs"><?php echo MyLang('pluginsadmin.more_plugins_store_to_text'); ?></a>
                    </div>
                <?php endif; else: ?>
                <div class="table-no">
                    <i class="am-icon-skyatlas am-icon-lg"></i>
                    <p class="am-margin-top-sm"><?php echo MyLang('plugins_no_data_tips'); ?></p>
                    <?php if($is_system_show_base == 1): ?>
                        <div class="am-margin-top-xl">
                            <a href="<?php echo htmlentities($store_url); ?>" target="_blank" class="am-margin-left-xs"><?php echo MyLang('pluginsadmin.no_data_store_to_text'); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- right content end  -->

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