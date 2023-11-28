<?php /*a:13:{s:74:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/appcenternav/index.html";i:1699863362;s:74:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/header.html";i:1699863362;s:75:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/page_loading.html";i:1699863362;s:86:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form_operate_top.html";i:1699863362;s:80:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form_table.html";i:1699863362;s:87:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form_table_search.html";i:1699863362;s:88:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form_table_content.html";i:1699863362;s:71:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/not_data.html";i:1699863362;s:89:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form_operate_bottom.html";i:1699863362;s:88:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form_fields_select.html";i:1699863362;s:85:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/module/form_table_page.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/footer.html";i:1699863362;}*/ ?>
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

<!-- content top hook -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_content_top); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_content_top, ['hook_name'=>$hook_name_content_top, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>

<!-- right content start  -->
<div class="am-form-table-data-container content-right">
    <!-- content top start -->
    <div class="form-table-content-top am-cf">
        
    </div>
    <!-- content top end -->
    <div class="content form-table-content">
        <!-- content inside top hook -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span><?php echo htmlentities($hook_name_content_inside_top); ?></span>
            </div>
        <?php endif; 
            $hook_data = MyEventTrigger($hook_name_content_inside_top, ['hook_name'=>$hook_name_content_inside_top, 'is_backend'=>true]);
            if(!empty($hook_data) && is_array($hook_data))
            {
                foreach($hook_data as $hook)
                {
                    if(is_string($hook) || is_int($hook))
                    {
                        echo htmlspecialchars_decode($hook);
                    }
                }
            }
         ?>

        <!-- form -->
        <?php if(!empty($form_table) and !empty($form_table['base']) and !empty($form_table['form']) and is_array($form_table['base']) and is_array($form_table['form'])): ?>
            <form class="am-form form-validation-search" method="post" action="<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1 and !empty($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>" request-type="jump" request-value="<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1 and !empty($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>">
                <!-- nav start -->
                <div class="form-table-navigation am-cf">
                    
                </div>
                <!-- nav end -->

                <!-- top operate start -->
                <div class="form-table-operate-top am-cf">
                    
    <a href="<?php echo MyUrl('admin/appcenternav/saveinfo'); ?>" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus"> <?php echo MyLang('add_title'); ?></a>
    <!-- 父级内容 -->
    
                        <!-- 公共操作 -->
<!-- 钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_form_top_operate); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_form_top_operate, ['hook_name'=>$hook_name_form_top_operate, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>

<!-- 是否开启数据打印操作 -->
<?php if(isset($form_table['base']['is_data_print']) and $form_table['base']['is_data_print'] == 1): ?>
    <button type="button" class="am-btn am-btn-danger am-radius am-btn-xs form-table-operate-top-data-print-submit" data-am-popover="{content: '<?php echo MyLang('form_table_nav_operate_data_list_print_tips'); ?>', trigger: 'hover focus', theme: 'warning sm'}">
        <i class="am-icon-print"></i>
        <span><?php echo MyLang('form_table_nav_operate_data_print_name'); ?></span>
    </button>
<?php endif; ?>

<!-- 是否开启数据导出pdf操作 -->
<?php if(isset($form_table['base']['is_data_export_pdf']) and $form_table['base']['is_data_export_pdf'] == 1): ?>
    <button type="button" class="am-btn am-btn-danger am-radius am-btn-xs form-table-operate-top-data-print-submit" data-is-pdf="1" data-am-popover="{content: '<?php echo MyLang('form_table_nav_operate_data_list_export_pdf_tips'); ?>', trigger: 'hover focus', theme: 'warning sm'}">
        <i class="am-icon-file-pdf-o"></i>
        <span><?php echo MyLang('form_table_nav_operate_data_export_pdf_name'); ?></span>
    </button>
<?php endif; ?>

<!-- 是否开启数据导出excel操作 -->
<?php if(isset($form_table['base']['is_data_export_excel']) and $form_table['base']['is_data_export_excel'] == 1): ?>
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs form-table-operate-top-export-excel-submit" data-am-popover="{content: '<?php echo MyLang('form_table_nav_operate_data_list_export_excel_tips'); ?>', trigger: 'hover focus', theme: 'warning sm'}">
        <i class="am-icon-file-excel-o"></i>
        <span><?php echo MyLang('form_table_nav_operate_data_export_excel_name'); ?></span>
    </button>
<?php endif; ?>

<!-- 是否开启删除操作 -->
<?php if(isset($form_table['base']['is_delete']) and $form_table['base']['is_delete'] == 1): ?>
    <button
        type="button"
        class="am-btn am-btn-danger am-radius am-btn-xs form-table-operate-top-delete-submit"
        data-url="<?php if(isset($form_table['base']['delete_url'])): ?><?php echo htmlentities($form_table['base']['delete_url']); ?><?php endif; ?>"
        data-form="<?php if(isset($form_table['base']['delete_form'])): ?><?php echo htmlentities($form_table['base']['delete_form']); ?><?php endif; ?>"
        data-key="<?php if(isset($form_table['base']['delete_key'])): ?><?php echo htmlentities($form_table['base']['delete_key']); ?><?php endif; ?>"
        data-confirm-title="<?php if(isset($form_table['base']['confirm_title'])): ?><?php echo htmlentities($form_table['base']['confirm_title']); ?><?php endif; ?>"
        data-confirm-msg="<?php if(isset($form_table['base']['confirm_msg'])): ?><?php echo htmlentities($form_table['base']['confirm_msg']); ?><?php endif; ?>"
        data-timeout="<?php if(isset($form_table['base']['timeout'])): ?><?php echo htmlentities($form_table['base']['timeout']); ?><?php endif; ?>"
        data-am-popover="{content: '<?php echo MyLang('form_table_nav_operate_data_list_delete_tips'); ?>', trigger: 'hover focus', theme: 'warning sm'}"
    >
        <i class="am-icon-trash-o"></i>
        <span><?php echo MyLang('delete_title'); ?></span>
    </button>
<?php endif; ?>

<!-- 右侧操作 -->
<?php if((!empty($admin) and (!isset($form_table['base']['is_fields_sel']) or $form_table['base']['is_fields_sel'] == 1)) or (isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1)): ?>
    <div class="am-fr am-nbfc operate-right">
        <!-- 是否开启搜索操作 公共搜索操作放在最后面 -->
        <?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1): ?>
            <!-- 搜索 -->
            <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example form-table-operate-top-search-submit" data-am-loading="{loadingText:' <?php echo MyLang('searching_tips'); ?>'}">
                <i class="am-icon-search"></i>
                <span><?php echo MyLang('search_title'); ?></span>
            </button>
            <!-- 重置 -->
            <a href="<?php if(isset($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>" class="am-btn am-btn-warning am-radius am-btn-xs form-table-operate-top-reset-submit" data-am-popover="{content: '<?php echo MyLang('clear_search_where'); ?>', trigger: 'hover focus', theme: 'warning sm'}">
                <i class="am-icon-filter"></i>
                <span><?php echo MyLang('reset_title'); ?></span>
            </a>

            <!-- 排序数据字段 -->
            <input type="hidden" name="fp_order_by_key" value="<?php if(!empty($form_order_by) and !empty($form_order_by['key'])): ?><?php echo htmlentities($form_order_by['key']); ?><?php endif; ?>" />
            <input type="hidden" name="fp_order_by_val" value="<?php if(!empty($form_order_by) and !empty($form_order_by['val'])): ?><?php echo htmlentities($form_order_by['val']); ?><?php endif; ?>" />

            <!-- 分页数据字段 -->
            <input type="hidden" name="page" value="<?php if(!empty($page)): ?><?php echo htmlentities($page); ?><?php endif; ?>" />
            <input type="hidden" name="page_size" value="<?php if(!empty($page_size)): ?><?php echo htmlentities($page_size); ?><?php endif; ?>" />
        <?php endif; ?>

        <!-- 字段选择 -->
        <?php if(!empty($admin) and (!isset($form_table['base']['is_fields_sel']) or $form_table['base']['is_fields_sel'] == 1)): ?>
            <button type="button" class="am-btn am-btn-default am-radius am-btn-xs" data-am-modal="{target: '#form-table-fields-popup'}">
                <i class="am-icon-cog"></i>
                <span><?php echo MyLang('setup_title'); ?></span>
            </button>
        <?php endif; ?>
    </div>
<?php endif; ?>
                    

                </div>
                <!-- top operate end -->

                <!-- form table start -->
                <div class="am-form-table-data-list-container am-scrollable-horizontal am-table-scrollable-horizontal am-radius" data-md5-key="<?php echo htmlentities($form_md5_key); ?>">
    <?php $form_table_data_list = empty($form_table_data_list) ? (empty($data_list) ? [] : $data_list) : $form_table_data_list; ?>
    <table class="am-table am-table-striped am-table-hover am-table-bordered am-text-nowrap form-table-data-list">
        <thead>
            <!-- title -->
            <tr>
                <?php foreach($form_table['form'] as $t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                        <!-- 1. 上下居中 -->
                        <!-- 2. 格子大小 -->
                        <!-- 3. 内容位置居（左|中|右） -->
                        <!-- 4. 格子是否固定（left|right 左|右） -->
                        <th class="form-table-search-item-head-title-<?php echo htmlentities($t['unique_key']); if(isset($t['is_middle']) and $t['is_middle'] == 1): ?> am-text-middle <?php endif; if(!empty($t['grid_size'])): ?> am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?> am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?> am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?> am-operate-grid <?php endif; ?>
                        "
                        style="
                            <?php if(!empty($t['width'])): ?>
                                min-width: <?php echo htmlentities($t['width']); ?>px;
                            <?php endif; ?>
                        "
                        >
                            <?php switch($t['view_type']): case "checkbox": ?>
                                    <button type="button" class="am-btn am-btn-default am-radius am-btn-xs form-table-operate-checkbox-submit" data-value="<?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>1<?php else: ?>0<?php endif; ?>" data-checked-text="<?php echo htmlentities($t['checked_text']); ?>" data-not-checked-text="<?php echo htmlentities($t['not_checked_text']); ?>" <?php if(empty($form_table_data_list)): ?>disabled<?php endif; ?>><?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?><?php echo htmlentities($t['checked_text']); else: ?><?php echo htmlentities($t['not_checked_text']); ?><?php endif; ?></button>
                                <?php break; default: if(isset($t['label'])): ?><?php echo htmlentities($t['label']); ?><?php endif; ?>
                            <?php endswitch; ?>

                            <!-- 排序操作 -->
                            <?php if(isset($t['is_sort']) and $t['is_sort'] == 1 and !empty($t['sort_key'])): ?>
                                <div class="form-sort-container am-nbfc am-inline-block">
                                    <a href="javascript:;" data-key="<?php echo htmlentities($t['sort_key']); ?>" data-val="asc" class="sort-icon am-icon-caret-up <?php if(!empty($form_order_by) and !empty($form_order_by['key']) and $form_order_by['key'] == $t['sort_key'] and !empty($form_order_by['val']) and $form_order_by['val'] == 'asc'): ?>sort-active<?php endif; ?>"></a>
                                    <a href="javascript:;" data-key="<?php echo htmlentities($t['sort_key']); ?>" data-val="desc" class="sort-icon am-icon-caret-down <?php if(!empty($form_order_by) and !empty($form_order_by['key']) and $form_order_by['key'] == $t['sort_key'] and !empty($form_order_by['val']) and $form_order_by['val'] == 'desc'): ?>sort-active<?php endif; ?>"></a>
                                </div>
                            <?php endif; ?>
                        </th>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>

            <!-- search -->
            <!-- form_table_data_search_start -->
<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1): ?>
    <tr class="form-table-search">
        <?php if(!empty($params['page_size'])): ?>
            <input type="hidden" name="page_size" value="<?php echo htmlentities($params['page_size']); ?>" />
        <?php endif; foreach($form_table['form'] as $k=>$t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                <td class="form-table-search-item-head-value-<?php echo htmlentities($t['unique_key']); if(isset($t['is_middle']) and $t['is_middle'] == 1): ?> am-text-middle <?php endif; if(!empty($t['grid_size'])): ?> am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?> am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?> am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?> am-operate-grid <?php endif; ?>
                "
                style="
                    <?php if(!empty($t['width'])): ?>
                        min-width: <?php echo htmlentities($t['width']); ?>px;
                    <?php endif; ?>
                "
                >
                    <?php if(!empty($t['search_config']) and !empty($t['search_config']['form_type']) and !empty($t['search_config']['form_name'])): switch($t['search_config']['form_type']): case "input": ?>
                                <!-- 输入 -->
                                <input type="text" class="am-form-field am-radius" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key']])): ?><?php echo htmlentities($form_params[$t['form_key']]); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key']])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key']]); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                            <?php break; case "select": ?>
                                <!-- 选择 -->
                                <select name="<?php echo htmlentities($t['form_key']); ?>"
                                    class="chosen-select am-text-left"
                                    data-placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>"
                                    <?php if(isset($t['search_config']['is_multiple']) and $t['search_config']['is_multiple'] == 1): ?> multiple<?php endif; if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; ?>
                                >
                                    <?php if(isset($t['search_config']['is_seat_select']) and $t['search_config']['is_seat_select'] == 1 and (!isset($t['search_config']['is_multiple']) or $t['search_config']['is_multiple'] != 1)): ?>
                                        <option value="<?php if(isset($t['search_config']['seat_select_value'])): ?><?php echo htmlentities($t['search_config']['seat_select_value']); ?><?php endif; ?>">
                                            <?php if(empty($t['search_config']['seat_select_text'])): if(empty($t['search_config']['placeholder'])): ?>请选择<?php if(!empty($t['label'])): ?><?php echo htmlentities($t['label']); ?><?php endif; else: ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; else: ?><?php echo htmlentities($t['search_config']['seat_select_text']); ?><?php endif; ?>
                                        </option>
                                    <?php endif; if(!empty($t['search_config']['data']) and is_array($t['search_config']['data'])): foreach($t['search_config']['data'] as $k=>$v): if(is_array($v)): ?>
                                                <option value="<?php if(isset($t['search_config']['data_key']) and isset($v[$t['search_config']['data_key']])): ?><?php echo htmlentities($v[$t['search_config']['data_key']]); ?><?php endif; ?>" <?php if(!empty($form_params) and isset($form_params[$t['form_key']]) and isset($t['search_config']['data_key']) and ((is_array($form_params[$t['form_key']]) and in_array($v[$t['search_config']['data_key']], $form_params[$t['form_key']])) or (!is_array($form_params[$t['form_key']]) and $v[$t['search_config']['data_key']] == $form_params[$t['form_key']]))): ?>selected<?php endif; ?>>
                                                    <?php if(isset($t['search_config']['data_name']) and isset($v[$t['search_config']['data_name']])): ?>
                                                        <?php echo htmlentities($v[$t['search_config']['data_name']]); ?>
                                                    <?php endif; ?>
                                                </option>
                                            <?php else: ?>
                                                <option value="<?php echo htmlentities($k); ?>" <?php if(!empty($form_params) and isset($form_params[$t['form_key']]) and isset($t['search_config']['data_key']) and ((is_array($form_params[$t['form_key']]) and in_array($k, $form_params[$t['form_key']])) or (!is_array($form_params[$t['form_key']]) and $k == $form_params[$t['form_key']]))): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            <?php break; case "section": ?>
                                <!-- 区间 -->
                                <div class="form-table-search-section">
                                    <input type="number" class="am-form-field am-radius am-inline-block" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>_min" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_min'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_min']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_point']) and $t['search_config']['is_point'] == 1): ?>step="0.01"<?php endif; ?> min="0" placeholder="<?php if(isset($t['search_config']['placeholder_min'])): ?><?php echo htmlentities($t['search_config']['placeholder_min']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_min'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key'].'_min']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                    <span>-</span>
                                    <input type="number" class="am-form-field am-radius am-inline-block" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>_max" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_max'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_max']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_point']) and $t['search_config']['is_point'] == 1): ?>step="0.01"<?php endif; ?> min="0" placeholder="<?php if(isset($t['search_config']['placeholder_max'])): ?><?php echo htmlentities($t['search_config']['placeholder_max']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_max'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key'].'_max']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                </div>
                            <?php break; case "datetime": ?>
                                <div class="form-table-search-section form-table-search-time">
                                    <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_start" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_start']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_start'])): ?><?php echo htmlentities($t['search_config']['placeholder_start']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd H:mm:ss',maxDate:'#F{$dp.$D(\'form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>\');}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key'].'_start']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                    <span>-</span>
                                    <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_end" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_end']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_end'])): ?><?php echo htmlentities($t['search_config']['placeholder_end']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd H:mm:ss',minDate:'#F{$dp.$D(\'form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>\');}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key'].'_end']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                </div>
                            <?php break; case "date": ?>
                                <div class="form-table-search-section form-table-search-time">
                                    <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_start" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_start']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_start'])): ?><?php echo htmlentities($t['search_config']['placeholder_start']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd',maxDate:'#F{$dp.$D(\'form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>\',{d:-1});}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key'].'_start']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                    <span>-</span>
                                    <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_end" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_end']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_end'])): ?><?php echo htmlentities($t['search_config']['placeholder_end']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd',minDate:'#F{$dp.$D(\'form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>\',{d:+1});}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key'].'_end']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                </div>
                            <?php break; case "ym": ?>
                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius Wdate" name="<?php echo htmlentities($t['form_key']); ?>" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key']])): ?><?php echo htmlentities($form_params[$t['form_key']]); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key']])): ?> data-am-popover="{theme: 'sm', content: '<?php echo PopoverContentHandle($form_params[$t['form_key']]); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                            <?php break; case "module": ?>
                                <!-- 从模块加载自定义模块数据 -->
                                <?php if(!empty($t['search_config']['template'])): if(isset($t['search_config']['data'])): ?>
                                        <?php echo ModuleInclude($t['search_config']['template'], [
                                            'form'=>$t,
                                            'data'=>$t['search_config']['data'],
                                            'form_name_key'=>$t['form_key'],
                                            'params'=>isset($form_params) ? $form_params : [],
                                        ]); else: ?>
                                        <?php echo ModuleInclude($t['search_config']['template'], [
                                            'form'=>$t,
                                            'data'=>[],
                                            'form_name_key'=>$t['form_key'],
                                            'params'=>isset($form_params) ? $form_params : [],
                                        ]); ?>
                                    <?php endif; ?>
                                <?php endif; break; ?>
                        <?php endswitch; ?>
                    <?php endif; ?>
                </td>
            <?php endif; ?>
        <?php endforeach; ?>
    </tr>
<?php endif; ?>
<!-- form_table_data_search_end -->
        </thead>
        <tbody>
            <!-- content -->
            <!-- form_table_data_content_start -->
<?php if(!empty($form_table_data_list) and !empty($form_table['base']['key_field'])): ?>
    <!-- 处理数据数量小于默认数量 -->
    <?php $__FOR_START_64499896__=0;$__FOR_END_64499896__=count($form_table_data_list);for($i=$__FOR_START_64499896__;$i < $__FOR_END_64499896__;$i+=1){ ?>
        <!-- 1. tr 主键id名称 -->
        <!-- 2. 是否黄色选中class -->
        <tr
            <?php if(isset($form_table_data_list[$i][$form_table['base']['key_field']])): ?>
                id="data-list-<?php echo htmlentities($form_table_data_list[$i][$form_table['base']['key_field']]); ?>"
            <?php endif; if(!empty($form_table['base']['status_field']) and isset($form_table_data_list[$i][$form_table['base']['status_field']]) and $form_table_data_list[$i][$form_table['base']['status_field']] == 0): ?>
                class="am-active"
            <?php endif; ?>
        >
            <?php foreach($form_table['form'] as $t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                    <!-- 1. 上下居中 -->
                    <!-- 2. 格子大小 -->
                    <!-- 3. 内容位置居（左|中|右） -->
                    <!-- 4. 格子是否固定（left|right 左|右） -->
                    <!-- 5. 是否操作列 -->
                    <td class="am-nowrap-initial
                        <?php if(isset($t['is_middle']) and $t['is_middle'] == 1): ?>am-text-middle <?php endif; if(!empty($t['grid_size'])): ?>am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?>am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?>am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?>am-operate-grid <?php endif; ?>
                    "
                    style="
                        <?php if(!empty($t['width'])): ?>
                            min-width: <?php echo htmlentities($t['width']); ?>px;
                        <?php endif; ?>
                    "
                    >
                        <?php if(isset($form_table_data_list[$i]) and !empty($t['view_type']) and !empty($t['view_key'])): ?>
                            <!-- 数据匹配 -->
                            <?php switch($t['view_type']): case "images": if(!empty($form_table_data_list[$i][$t['view_key']])): ?>
                                        <figure data-am-widget="figure" class="am-figure am-inline-block" data-am-figure="{pureview: 'true'}">
                                            <img src="<?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?>" class="am-img-thumbnail <?php if(!empty($t['images_shape'])): ?>am-<?php echo htmlentities($t['images_shape']); ?><?php endif; ?>" style="<?php if(!empty($t['images_width'])): ?>width:<?php echo htmlentities($t['images_width']); ?>px;<?php endif; if(!empty($t['images_height'])): ?>height:<?php echo htmlentities($t['images_height']); ?>px;<?php endif; ?>" />
                                        </figure>
                                    <?php endif; break; case "qrcode": if(!empty($form_table_data_list[$i][$t['view_key']])): if(isset($t['qrcode_type']) and $t['qrcode_type'] == 1): ?>
                                            <a href="javascript:;" class="text-copy-submit" data-value="<?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?>">
                                                <div class="view-qrcode-init <?php if(!empty($t['images_shape'])): ?>am-<?php echo htmlentities($t['images_shape']); ?><?php endif; ?>" data-width="<?php if(empty($t['images_width'])): ?>45<?php else: ?><?php echo htmlentities($t['images_width']); ?><?php endif; ?>" data-height="<?php if(empty($t['images_height'])): ?>45<?php else: ?><?php echo htmlentities($t['images_height']); ?><?php endif; ?>"><?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?></div>
                                                <?php if(isset($t['is_qrcode_text']) and $t['is_qrcode_text'] == 1): ?>
                                                    <p><?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?></p>
                                                <?php endif; ?>
                                            </a>
                                        <?php else: ?>
                                            <div class="am-dropdown am-inline-block text-copy-submit" data-value="<?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?>" data-am-dropdown="{trigger: 'hover'}">
                                                <a href="javascript:;" class="am-icon-qrcode am-dropdown-toggle"> <?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?></a>
                                                <div class="am-dropdown-content am-radius am-padding-sm am-text-center">
                                                    <div class="view-qrcode-init" data-width="130" data-height="130"><?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?></div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; break; case "progress": if((!empty($t['view_key']) and isset($form_table_data_list[$i][$t['view_key']])) or (!empty($t['progress_data_key']) and isset($form_table_data_list[$i][$t['progress_data_key']]))): ?>
                                        <div class="data-progress <?php if(!empty($t['progress_text_key'])): ?> data-progress-view-text<?php endif; ?>">
                                            <div class="am-progress am-margin-bottom-0 am-inline-block am-vertical-align-middle <?php if(isset($t['is_striped']) and $t['is_striped'] == 1): ?> am-progress-striped<?php endif; if(!empty($t['progress_size'])): ?> am-progress-<?php echo htmlentities($t['progress_size']); ?><?php endif; if(isset($t['is_radius']) and $t['is_radius'] == 1): ?> am-radius<?php endif; if(isset($t['is_active']) and $t['is_active'] == 1): ?> am-active<?php endif; ?>">
                                                <div class="am-progress-bar <?php if(!empty($t['color_style'])): ?> am-progress-bar-<?php echo htmlentities($t['color_style']); ?><?php endif; ?>"  style="width: <?php if(!empty($t['progress_data_key']) and isset($form_table_data_detail[$t['progress_data_key']])): ?><?php echo htmlentities($form_table_data_detail[$t['progress_data_key']]); else: ?><?php echo htmlentities($form_table_data_detail[$t['view_key']]); ?><?php endif; ?>%"></div>
                                            </div>
                                            <?php if(!empty($t['progress_text_key'])): ?>
                                                <span class="am-text-grey am-margin-left-xs am-vertical-align-middle"><?php if(isset($form_table_data_list[$i][$t['progress_text_key']])): ?><?php echo htmlentities($form_table_data_list[$i][$t['progress_text_key']]); ?><?php endif; if(isset($t['progress_text_unit'])): ?><?php echo htmlentities($t['progress_text_unit']); ?><?php endif; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; break; case "star": 
                                        $temp_star_data_key_field = (!empty($t['view_key']) and isset($form_table_data_list[$i][$t['view_key']])) ? 'view_key' : 'star_data_key';
                                     if(!empty($t[$temp_star_data_key_field]) and isset($form_table_data_list[$i][$t[$temp_star_data_key_field]])): ?>
                                        <div class="am-text-grey am-inline-block am-vertical-align-middle">
                                            <?php $__FOR_START_898183102__=1;$__FOR_END_898183102__=empty($t['star_max']) ? 5 : $t['star_max'];for($star_i=$__FOR_START_898183102__;$star_i <= $__FOR_END_898183102__;$star_i+=1){ if($star_i > $form_table_data_list[$i][$t[$temp_star_data_key_field]]): ?>
                                                    <i class="am-icon-star-o"></i>
                                                <?php else: ?>
                                                    <i class="am-icon-star <?php if(!empty($t['color_style'])): ?> am-text-<?php echo htmlentities($t['color_style']); ?><?php endif; ?>" <?php if(!empty($t['color_value'])): ?> style="color:<?php echo htmlentities($t['color_value']); ?>"<?php endif; ?>></i>
                                                <?php endif; } ?>
                                        </div>
                                        <?php if(!empty($t['star_text_key'])): ?>
                                            <span class="am-text-grey am-margin-left-xs am-vertical-align-middle"><?php if(isset($form_table_data_list[$i][$t['star_text_key']])): ?><?php echo htmlentities($form_table_data_list[$i][$t['star_text_key']]); ?><?php endif; if(isset($t['star_text_unit'])): ?><?php echo htmlentities($t['star_text_unit']); ?><?php endif; ?></span>
                                        <?php endif; ?>
                                    <?php endif; break; case "field": ?>
                                    <p class="
                                        <?php if(isset($t['is_badge']) and $t['is_badge'] == 1): ?>
                                            am-badge <?php if(!empty($t['badge_key']) and !empty($t['badge_style']) and isset($form_table_data_list[$i][$t['badge_key']]) and isset($t['badge_style'][$form_table_data_list[$i][$t['badge_key']]]) and substr($t['badge_style'][$form_table_data_list[$i][$t['badge_key']]], 0, 1) != '#'): ?>am-badge-<?php echo htmlentities($t['badge_style'][$form_table_data_list[$i][$t['badge_key']]]); ?> <?php endif; if(!empty($t['badge_shape'])): ?>am-<?php echo htmlentities($t['badge_shape']); ?> <?php endif; ?> 
                                        <?php endif; if(isset($t['is_color']) and $t['is_color'] == 1 and !empty($t['color_key']) and !empty($t['color_style']) and isset($form_table_data_list[$i][$t['color_key']]) and isset($t['color_style'][$form_table_data_list[$i][$t['color_key']]]) and substr($t['color_style'][$form_table_data_list[$i][$t['color_key']]], 0, 1) != '#'): ?>am-text-<?php echo htmlentities($t['color_style'][$form_table_data_list[$i][$t['color_key']]]); ?><?php endif; if(!empty($t['text_truncate'])): ?>am-text-truncate<?php if($t['text_truncate'] == 2): ?>-2<?php endif; ?><?php endif; ?>" 
                                        style="
                                        <?php if(isset($t['is_badge']) and $t['is_badge'] == 1 and !empty($t['badge_key']) and !empty($t['badge_style']) and is_array($t['badge_style']) and isset($form_table_data_list[$i][$t['badge_key']]) and isset($t['badge_style'][$form_table_data_list[$i][$t['badge_key']]]) and substr($t['badge_style'][$form_table_data_list[$i][$t['badge_key']]], 0, 1) == '#'): ?>background: <?php echo htmlentities($t['badge_style'][$form_table_data_list[$i][$t['badge_key']]]); ?>;<?php endif; if(isset($t['is_color']) and $t['is_color'] == 1 and !empty($t['color_key']) and !empty($t['color_style']) and is_array($t['color_style']) and isset($form_table_data_list[$i][$t['color_key']]) and isset($t['color_style'][$form_table_data_list[$i][$t['color_key']]]) and substr($t['color_style'][$form_table_data_list[$i][$t['color_key']]], 0, 1) == '#'): ?>color: <?php echo htmlentities($t['color_style'][$form_table_data_list[$i][$t['color_key']]]); ?>;<?php endif; ?>" 
                                        <?php if(isset($t['is_popover']) and $t['is_popover'] == 1 and !empty($t['popover_field']) and !empty($form_table_data_list[$i][$t['popover_field']])): ?>data-am-popover="{content: '<?php echo PopoverContentHandle($form_table_data_list[$i][$t['popover_field']]); ?>', trigger: 'hover focus', theme: 'sm'}"<?php endif; ?>
                                    >
                                        <!-- 图标+提示 -->
                                        <?php if(isset($t['is_first_tips']) and $t['is_first_tips'] == 1 and ((!empty($t['first_tips_key']) and !empty($form_table_data_list[$i][$t['first_tips_key']])) or (!empty($t['first_tips_data'])))): ?>
                                            <a href="javascript:;" class="am-margin-right-xs <?php if(!empty($t['first_tips_style'])): ?>am-text-<?php echo htmlentities($t['first_tips_style']); ?><?php endif; ?> am-icon-<?php if(empty($t['first_tips_icon'])): ?>exclamation-circle<?php else: ?><?php echo htmlentities($t['first_tips_icon']); ?><?php endif; ?>" data-am-popover="{content: '<?php if(!empty($t['first_tips_key']) and !empty($form_table_data_list[$i][$t['first_tips_key']])): ?><?php echo PopoverContentHandle($form_table_data_list[$i][$t['first_tips_key']]); else: ?><?php echo PopoverContentHandle($t['first_tips_data']); ?><?php endif; ?>', trigger: 'hover focus', theme: '<?php if(!empty($t['first_tips_style'])): ?><?php echo htmlentities($t['first_tips_style']); ?><?php endif; ?> sm'}"></a>
                                        <?php endif; ?>

                                        <!-- 连接+提示 -->
                                        <?php if(isset($t['is_first_link']) and $t['is_first_link'] == 1 and ((!empty($t['first_link_key']) and !empty($form_table_data_list[$i][$t['first_link_key']])) or (!empty($t['first_link_data'])))): ?>
                                            <a href="<?php if(!empty($t['first_link_key']) and !empty($form_table_data_list[$i][$t['first_link_key']])): ?><?php echo htmlentities($form_table_data_list[$i][$t['first_link_key']]); else: ?><?php echo htmlentities($t['first_link_data']); ?><?php endif; ?>" class="am-margin-right-xs <?php if(!empty($t['first_link_style'])): ?>am-text-<?php echo htmlentities($t['first_link_style']); ?><?php endif; ?> am-icon-<?php if(empty($t['first_link_icon'])): ?>external-link<?php else: ?><?php echo htmlentities($t['first_link_icon']); ?><?php endif; ?>" target="_blank" <?php if(!empty($t['first_link_popover'])): ?>data-am-popover="{content: '<?php echo PopoverContentHandle($t['first_link_popover']); ?>', trigger: 'hover focus', theme: 'sm'}"<?php endif; ?>></a>
                                        <?php endif; ?>

                                        <!-- 圆点 -->
                                        <?php if(isset($t['is_round_point']) and $t['is_round_point'] == 1): ?>
                                            <i class="am-icon-circle am-margin-right-xs <?php if(!empty($t['round_point_key']) and !empty($t['round_point_style']) and is_array($t['round_point_style']) and isset($form_table_data_list[$i][$t['round_point_key']]) and isset($t['round_point_style'][$form_table_data_list[$i][$t['round_point_key']]]) and substr($t['round_point_style'][$form_table_data_list[$i][$t['round_point_key']]], 0, 1) != '#'): ?>am-text-<?php echo htmlentities($t['round_point_style'][$form_table_data_list[$i][$t['round_point_key']]]); ?><?php endif; ?>" 
                                            style="<?php if(!empty($t['round_point_key']) and !empty($t['round_point_style']) and is_array($t['round_point_style']) and isset($form_table_data_list[$i][$t['round_point_key']]) and isset($t['round_point_style'][$form_table_data_list[$i][$t['round_point_key']]]) and substr($t['round_point_style'][$form_table_data_list[$i][$t['round_point_key']]], 0, 1) == '#'): ?>color: <?php echo htmlentities($t['round_point_style'][$form_table_data_list[$i][$t['round_point_key']]]); ?>;<?php endif; ?>"></i>
                                        <?php endif; ?>

                                        <!-- 前后固定拼接的值 前面 -->
                                        <?php if(isset($t['view_join_first'])): ?>
                                            <span><?php echo htmlentities($t['view_join_first']); ?></span>
                                        <?php endif; ?>

                                        <!-- 如果字段为数组则处理多个字段拼接数据 -->
                                        <?php if(is_array($t['view_key'])): foreach($t['view_key'] as $fk=>$fv): if(isset($form_table_data_list[$i][$fv])): ?>
                                                    <span><?php echo htmlentities($form_table_data_list[$i][$fv]); ?></span>
                                                    <!-- 多个字段拼接数据的的拼接字符 -->
                                                    <?php if(isset($t['view_key_join']) and $fk < count($t['view_key'])-1): ?>
                                                        <span><?php echo $t['view_key_join']; ?></span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; else: ?>
                                            <!-- 是否存在数据 key -->
                                            <?php if(isset($form_table_data_list[$i][$t['view_key']])): ?>
                                                <!-- 是否指定数据转换 -->
                                                <?php if(!empty($t['view_data']) and is_array($t['view_data'])): ?>
                                                    <!-- 不存在数组中则不显示 -->
                                                    <?php if(isset($t['view_data'][$form_table_data_list[$i][$t['view_key']]])): ?>
                                                        <!-- 是否指定二维数组key取值 -->
                                                        <?php if(!empty($t['view_data_key'])): if(isset($t['view_data'][$form_table_data_list[$i][$t['view_key']]][$t['view_data_key']])): ?>
                                                                <?php echo htmlentities($t['view_data'][$form_table_data_list[$i][$t['view_key']]][$t['view_data_key']]); ?>
                                                            <?php endif; else: ?>
                                                            <?php echo htmlentities($t['view_data'][$form_table_data_list[$i][$t['view_key']]]); ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                <!-- 直接展示数据 -->
                                                <?php else: ?>
                                                    <?php echo $form_table_data_list[$i][$t['view_key']]; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <!-- 前后固定拼接的值 后面 -->
                                        <?php if(isset($t['view_join_last'])): ?>
                                            <span><?php echo htmlentities($t['view_join_last']); ?></span>
                                        <?php endif; ?>
                                    </p>
                                <?php break; case "module": ?>
                                    <!-- 从模块加载自定义模块数据 -->
                                    <?php echo ModuleInclude(empty($t['template']) ? $t['view_key'] : $t['template'], $form_table_data_list[$i], [
                                        'form'      => $t,
                                        'params'    => isset($form_params) ? $form_params : [],
                                    ]); break; case "status": ?>
                                    <!-- 数据状态操作按钮组件 -->
                                    <?php if(!empty($t['key_field']) and !empty($t['post_url']) and !empty($form_table_data_list[$i][$t['key_field']]) and array_key_exists($t['view_key'], $form_table_data_list[$i])): ?>
                                        <a href="javascript:;"
                                            class="am-icon-btn am-icon-check submit-state <?php if($form_table_data_list[$i][$t['view_key']] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>"
                                            data-url="<?php echo htmlentities($t['post_url']); ?>"
                                            data-id="<?php if(isset($form_table_data_list[$i][$t['key_field']])): ?><?php echo htmlentities($form_table_data_list[$i][$t['key_field']]); ?><?php endif; ?>"
                                            data-state="<?php echo htmlentities($form_table_data_list[$i][$t['view_key']]); ?>"
                                            data-field="<?php echo htmlentities($t['view_key']); ?>"
                                            data-is-update-status="<?php if(isset($t['is_form_su']) and $t['is_form_su'] == 1): ?>1<?php else: ?>0<?php endif; ?>"
                                            data-is-loading="<?php if(isset($t['is_loading']) and $t['is_loading'] == 1): ?>1<?php else: ?>0<?php endif; ?>"
                                            data-loading-msg="<?php if(!empty($t['loading_msg'])): ?><?php echo htmlentities($t['loading_msg']); ?><?php endif; ?>"
                                        ></a>
                                    <?php endif; break; case "operate": ?>
                                    <!-- 是否操作列 -->
                                    <!-- 模块数据 -->
                                    <?php echo ModuleInclude($t['view_key'], $form_table_data_list[$i], [
                                        'form'      => $t,
                                        'params'    => isset($form_params) ? $form_params : [],
                                    ]); ?>

                                    <!-- 列表操作钩子 -->
                                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                        <div class="plugins-tag">
                                            <span><?php echo htmlentities($hook_name_form_list_operate); ?></span>
                                        </div>
                                    <?php endif; 
                                        $hook_data = MyEventTrigger($hook_name_form_list_operate, [
                                            'hook_name'     => $hook_name_form_list_operate,
                                            'is_backend'    => true,
                                            'id'            => isset($form_table_data_list[$i][$form_table['base']['key_field']]) ? $form_table_data_list[$i][$form_table['base']['key_field']] : 0,
                                            'data'          => $form_table_data_list[$i],
                                        ]);
                                        if(!empty($hook_data) && is_array($hook_data))
                                        {
                                            foreach($hook_data as $hook)
                                            {
                                                if(is_string($hook) || is_int($hook))
                                                {
                                                    echo htmlspecialchars_decode($hook);
                                                }
                                            }
                                        }
                                     break; case "radio": if(isset($form_table_data_list[$i][$form_table['base']['key_field']])): ?>
                                        <!-- 是否配置指定数据不显示控件 -->
                                        <?php if(!isset($t['not_show_data']) or 
                                            empty($t['not_show_key']) or 
                                            (is_array($t['not_show_data']) and isset($form_table_data_list[$i][$t['not_show_key']]) and !in_array($form_table_data_list[$i][$t['not_show_key']], $t['not_show_data'])) or 
                                            (isset($t['not_show_type']) and isset($form_table_data_list[$i][$t['not_show_key']]) and (
                                                ($t['not_show_type'] == 0 and $form_table_data_list[$i][$t['not_show_key']] == $t['not_show_data']) or 
                                                ($t['not_show_type'] == 1 and $form_table_data_list[$i][$t['not_show_key']] > $t['not_show_data']) or 
                                                ($t['not_show_type'] == 2 and $form_table_data_list[$i][$t['not_show_key']] < $t['not_show_data'])
                                            ))): ?>
                                            <div class="form-table-operate-radio">
                                                <label class="am-radio am-secondary am-radio-inline">
                                                    <input type="radio" name="<?php echo htmlentities($t['view_key']); ?>" value="<?php echo htmlentities($form_table_data_list[$i][$form_table['base']['key_field']]); ?>" <?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>checked<?php endif; ?> data-am-ucheck />
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; break; case "checkbox": if(isset($form_table_data_list[$i][$form_table['base']['key_field']])): ?>
                                        <!-- 是否配置指定数据不显示控件 -->
                                        <?php if(!isset($t['not_show_data']) or 
                                            empty($t['not_show_key']) or 
                                            (is_array($t['not_show_data']) and isset($form_table_data_list[$i][$t['not_show_key']]) and !in_array($form_table_data_list[$i][$t['not_show_key']], $t['not_show_data'])) or 
                                            (isset($t['not_show_type']) and isset($form_table_data_list[$i][$t['not_show_key']]) and (
                                                ($t['not_show_type'] == 0 and $form_table_data_list[$i][$t['not_show_key']] == $t['not_show_data']) or 
                                                ($t['not_show_type'] == 1 and $form_table_data_list[$i][$t['not_show_key']] > $t['not_show_data']) or 
                                                ($t['not_show_type'] == 2 and $form_table_data_list[$i][$t['not_show_key']] < $t['not_show_data'])
                                            ))): ?>
                                            <div class="form-table-operate-checkbox">
                                                <label class="am-checkbox am-secondary am-checkbox-inline">
                                                    <input type="checkbox" name="<?php echo htmlentities($t['view_key']); ?>" value="<?php echo htmlentities($form_table_data_list[$i][$form_table['base']['key_field']]); ?>" <?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>checked<?php endif; ?> data-am-ucheck />
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; break; ?>
                            <?php endswitch; ?>

                            <!-- 列表格子钩子 -->
                            <?php if(!empty($t['unique_key']) and $t['view_type'] != 'operate'): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                    <div class="plugins-tag">
                                        <span><?php echo htmlentities($hook_name_form_grid); ?>_<?php echo htmlentities($t['unique_key']); ?></span>
                                    </div>
                                <?php endif; 
                                    $hook_data = MyEventTrigger($hook_name_form_grid.'_'.$t['unique_key'], [
                                        'hook_name'     => $hook_name_form_grid.'_'.$t['unique_key'],
                                        'is_backend'    => true,
                                        'id'            => isset($form_table_data_list[$i][$form_table['base']['key_field']]) ? $form_table_data_list[$i][$form_table['base']['key_field']] : 0,
                                        'data'          => $form_table_data_list[$i],
                                    ]);
                                    if(!empty($hook_data) && is_array($hook_data))
                                    {
                                        foreach($hook_data as $hook)
                                        {
                                            if(is_string($hook) || is_int($hook))
                                            {
                                                echo htmlspecialchars_decode($hook);
                                            }
                                        }
                                    }
                                 ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                <?php endif; ?>
            <?php endforeach; ?>
        </tr>
    <?php } ?>
<?php endif; ?>
<!-- form_table_data_content_end -->
        </tbody>
    </table>
    <!-- 是否开启数据打印操作 -->
    <?php if(isset($form_table['base']['is_data_print']) and $form_table['base']['is_data_print'] == 1): ?>
        <script type="text/javascript">
            // 定义打印配置
            var print_is_list_choice = 1;
            // 模板打印数据
            var print_data = <?php if(empty($form_table_data_list)): ?>''<?php else: ?><?php echo json_encode($form_table_data_list, JSON_UNESCAPED_UNICODE); ?><?php endif; ?>;
            // 打印模板
            var print_template = <?php if(empty($form_table['base']['data_print_template'])): ?>{}<?php else: if(is_array($form_table['base']['data_print_template'])): ?><?php echo json_encode($form_table['base']['data_print_template'], JSON_UNESCAPED_UNICODE); else: ?><?php echo $form_table['base']['data_print_template']; ?><?php endif; ?><?php endif; ?>;
        </script>
    <?php endif; ?>

    <!-- 无数据 -->
    <div class="form-table-no-data">
        <?php if(empty($form_table_data_list)): ?>
            <!-- form_table_no_data_start -->
            <div class="table-no">
    <i class="am-icon-skyatlas am-icon-lg"></i>
    <p class="am-margin-top-sm"><?php echo MyLang('no_data'); ?></p>
</div>
            <!-- form_table_no_data_end -->
        <?php endif; ?>
    </div>
</div>
                <!-- form table end -->

                <!-- bottom operate start -->
                <div class="form-table-operate-bottom am-cf am-margin-top-sm">
                    
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_form_bottom_operate); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_form_bottom_operate, ['hook_name'=>$hook_name_form_bottom_operate, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>
                    
                </div>
                <!-- bottom operate end -->
            </form>

            <!-- 字段选择 -->
            <?php if(!isset($form_table['base']['is_fields_sel']) or $form_table['base']['is_fields_sel'] == 1): ?>
    <div class="am-popup popup-not-title" id="form-table-fields-popup">
        <div class="am-popup-inner">
            <span data-am-modal-close class="am-close am-close-alt">&times;</span>
            <div class="am-popup-bd am-padding-0">
                <form class="am-form am-form-full-screen am-form-popup-fixed">
                    <div class="form-table-fields-select-container">
                        <div class="form-table-fields-list-container">
                            <?php if(!empty($form_user_fields)): ?>
                                <div class="am-alert am-margin-bottom-0">
                                    <p><?php echo MyLang('form_table_column_sort_tips'); ?></p>
                                </div>
                                <ul class="am-list am-list-static am-list-striped am-margin-bottom-0 form-table-fields-content-container">
                                    <?php foreach($form_user_fields as $v): ?>
                                        <li>
                                            <label class="am-checkbox-inline">
                                                <input type="checkbox" name="form_field_checkbox_value" value="<?php echo htmlentities($v['key']); ?>" data-original-name="<?php echo htmlentities($v['label']); ?>" data-am-ucheck <?php if(isset($v['checked']) and $v['checked'] == 1): ?>checked<?php endif; ?> />
                                                <span><?php echo htmlentities($v['label']); ?></span>
                                            </label>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <div class="table-no">
    <i class="am-icon-skyatlas am-icon-lg"></i>
    <p class="am-margin-top-sm"><?php echo MyLang('no_data'); ?></p>
</div>
                            <?php endif; ?>
                        </div>
                        <div class="am-form-popup-submit">
                            <button type="button" class="am-btn am-btn-default am-radius am-btn-xs am-fl form-table-field-checkbox-submit" data-value="<?php if(array_sum(array_column($form_user_fields, 'checked')) > 0): ?>1<?php else: ?>0<?php endif; ?>" data-checked-text="<?php echo MyLang('reverse_select_title'); ?>" data-not-checked-text="<?php echo MyLang('select_all_title'); ?>">
                            <?php if(array_sum(array_column($form_user_fields, 'checked')) > 0): ?><?php echo MyLang('reverse_select_title'); else: ?><?php echo MyLang('select_all_title'); ?><?php endif; ?></button>

                            <button type="button" class="am-btn am-btn-warning am-radius am-btn-xs btn-loading-example am-margin-right-lg" data-am-modal-close>
                                <i class="am-icon-paint-brush"></i>
                                <span><?php echo MyLang('cancel_title'); ?></span>
                            </button>
                            <button type="button" class="am-btn am-btn-danger am-radius am-btn-xs btn-loading-example am-margin-right-lg submit-ajax" data-url="<?php echo MyUrl('admin/formtable/fieldsselectreset'); ?>" data-id="<?php echo htmlentities($form_md5_key); ?>" data-key="md5_key" data-view="reload" data-is-confirm="0" data-am-loading="{spinner: 'circle-o-notch', loadingText:'<?php echo MyLang('reset_title'); ?>'}">
                                <i class="am-icon-filter"></i>
                                <span><?php echo MyLang('reset_title'); ?></span>
                            </button>
                            <button type="button" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example form-table-field-confirm-submit" data-url="<?php echo MyUrl('admin/formtable/fieldsselectsave'); ?>" data-am-loading="{spinner: 'circle-o-notch', loadingText:'<?php echo MyLang('confirm_title'); ?>'}">
                                <i class="am-icon-check"></i>
                                <span><?php echo MyLang('confirm_title'); ?></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; else: ?>
            <div class="table-no"><i class="am-icon-warning"></i> <?php if(empty($form_error)): ?><?php echo MyLang('form_table_config_error_tips'); else: ?><?php echo htmlentities($form_error); ?><?php endif; ?></div>
        <?php endif; ?>

        <!-- page start -->
        <div class="form-table-operate-page am-cf">
            
                <!-- form_table_data_page_start -->
<?php $form_table_data_list = empty($form_table_data_list) ? (empty($data_list) ? [] : $data_list) : $form_table_data_list; if(!empty($form_table_data_list) and isset($page_html)): ?>
    <?php echo $page_html; ?>
<?php endif; ?>
<!-- form_table_data_page_end -->
            
        </div>
        <!-- page end -->

        <!-- extend start -->
        
        <!-- extend end -->

        <!-- content inside bottom hook -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span><?php echo htmlentities($hook_name_content_inside_bottom); ?></span>
            </div>
        <?php endif; 
            $hook_data = MyEventTrigger($hook_name_content_inside_bottom, ['hook_name'=>$hook_name_content_inside_bottom, 'is_backend'=>true]);
            if(!empty($hook_data) && is_array($hook_data))
            {
                foreach($hook_data as $hook)
                {
                    if(is_string($hook) || is_int($hook))
                    {
                        echo htmlspecialchars_decode($hook);
                    }
                }
            }
         ?>
    </div>
</div>
<!-- right content end  -->

<!-- content bottom hook -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_content_bottom); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_content_bottom, ['hook_name'=>$hook_name_content_bottom, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>

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

<!-- page buttom -->
