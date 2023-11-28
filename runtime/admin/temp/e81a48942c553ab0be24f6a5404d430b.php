<?php /*a:5:{s:66:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/index/init.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/header.html";i:1699863362;s:75:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/page_loading.html";i:1699863362;s:73:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/index/stats_where.html";i:1699863362;s:69:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/public/footer.html";i:1699863362;}*/ ?>
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
<div class="content-right" data-url="<?php echo MyUrl('admin/index/stats'); ?>">
	<div class="content">
		<!-- 顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_top</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_top_data) and is_array($plugins_admin_view_index_init_top_data)): foreach($plugins_admin_view_index_init_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; if($is_system_show_base == 1): ?>
			<!-- 顶部提示信息 -->
			<?php if(!empty($site_store_info) and !empty($site_store_info['base']) and !empty($site_store_info['base']['site_top_notice'])): ?>
				<div class="am-alert am-alert-danger am-radius" data-am-alert>
					<button type="button" class="am-close">&times;</button>
					<p><?php echo $site_store_info['base']['site_top_notice']; ?></p>
				</div>
			<?php endif; ?>

			<!-- 顶部基础信息 -->
			<div class="block-container base-content-top am-nbfc">
				<div class="am-fl am-nbfc left-content">
					<!-- 帐号信息 -->
					<?php if(!empty($site_store_info) and !empty($site_store_info['user'])): ?>
						<i class="am-icon-user"></i>
						<span><?php echo htmlentities($site_store_info['user']['user_name_view']); ?></span>
						<a href="javascript:;" class="am-margin-left-xs store-accounts-event"><?php echo MyLang('modify_title'); ?></a>
					<?php else: ?>
						<a href="javascript:;" class="am-margin-left-xs store-accounts-event"><?php echo MyLang('store_bind_accounts_name'); ?></a>
						<!-- 连接商店错误信息 -->
						<?php if(!empty($site_store_error)): ?>
							<a href="javascript:;" class="am-icon-question-circle am-text-warning am-margin-left-sm" data-am-popover="{content: '<?php echo htmlentities($site_store_error); ?>', trigger: 'hover focus', theme: 'sm'}"></a>
						<?php endif; ?>
					<?php endif; ?>

					<!-- 广告 -->
					<?php if(!empty($site_store_info) and !empty($site_store_info['adverts']) and !empty($site_store_info['adverts']['name'])): ?>
						<a class="am-margin-left-sm am-text-danger ad-content <?php if(!empty($site_store_info['adverts']['icon'])): ?><?php echo htmlentities($site_store_info['adverts']['icon']); ?><?php endif; ?>" <?php if(empty($site_store_info['adverts']['url'])): ?>href="javascript:;"<?php else: ?>href="<?php echo htmlentities($site_store_info['adverts']['url']); ?>" target="_blank"<?php endif; ?>> <?php echo htmlentities($site_store_info['adverts']['name']); ?></a>
					<?php endif; ?>
				</div>
				<div class="am-fr am-nbfc right-content">
					<!-- VIP授权信息 -->
					<?php if(!empty($site_store_info) and !empty($site_store_info['vip']) and !empty($site_store_info['vip']['auth_view'])): ?>
						<a class="am-icon-diamond vip <?php if(isset($site_store_info['vip']['status']) and $site_store_info['vip']['status'] == 1): ?>vip-active<?php endif; ?>" <?php if(empty($site_store_info['vip']['go_url'])): ?>href="javascript:;"<?php else: ?>href="<?php echo htmlentities($site_store_info['vip']['go_url']); ?>" target="_blank"<?php endif; if(!empty($site_store_info['vip']['auth_person'])): ?>data-am-popover="{content: '<?php echo MyLang('store_bind_authorized_subject_name'); ?>：<?php echo htmlentities($site_store_info['vip']['auth_person']); ?>', trigger: 'hover focus', theme: 'sm'}"<?php endif; ?>> <?php echo htmlentities($site_store_info['vip']['auth_view']); ?></a>
					<?php endif; ?>

					<!-- 右侧版本信息及更新检查 -->
					<span class="right-base">
						<a <?php if(!empty($site_store_links) and !empty($site_store_links['system_update_log'])): ?>href="<?php echo htmlentities($site_store_links['system_update_log']); ?>" target="_blank"<?php else: ?>href="javascript:;"<?php endif; ?> class="am-margin-left-xs"><?php echo htmlentities(APPLICATION_VERSION); ?></a>
						<a href="javascript:;" class="am-margin-left-sm inspect-upgrade-submit" data-url="<?php echo MyUrl('admin/index/inspectupgrade'); ?>"><?php echo MyLang('store_check_update_name'); if(!empty($site_store_info) and !empty($site_store_info['upgrade']) and !empty($site_store_info['upgrade']['version_old']) and $site_store_info['upgrade']['version_old'] == APPLICATION_VERSION): ?><i></i><?php endif; ?></a>
					</span>
				</div>
			</div>
		<?php endif; ?>

		<!-- 公告顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_notice_top</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_notice_top_data) and is_array($plugins_admin_view_index_init_notice_top_data)): foreach($plugins_admin_view_index_init_notice_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>

		<!-- 后台公告 -->
		<?php if(!empty($admin_notice)): ?>
			<div class="am-alert am-alert-danger" data-am-alert>
				<button type="button" class="am-close">&times;</button>
				<p><?php echo $admin_notice; ?></p>
			</div>
		<?php endif; ?>

		<!-- 基础统计基础顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_stats_base_top</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_stats_base_top_data) and is_array($plugins_admin_view_index_init_stats_base_top_data)): foreach($plugins_admin_view_index_init_stats_base_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>

		<!-- 是否展示统计数据 -->
		<?php if(isset($is_stats) and $is_stats == 1): ?>
			<!-- 基础统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_base_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_base_top_data) and is_array($plugins_admin_view_index_init_stats_inside_base_top_data)): foreach($plugins_admin_view_index_init_stats_inside_base_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 基础统计 -->
			<div class="block-container shopxo-base">
				<div class="block-title echarts-title">
					<span class="icon"></span>
					<span class="title"><?php echo MyLang('index.base_item_base_stats_title'); ?></span>
					<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '<?php echo MyLang('index.base_item_base_stats_tips'); ?>', trigger: 'hover focus', theme: 'sm'}"></a>
					<div class="am-fr right-operate" data-type="base-count" data-empty-time="1">
					    <?php if(!empty($time_data)): ?>
					        <span class="quick-time">
					            <?php foreach($time_data as $k=>$v): if(!in_array($k, ['this-month', 'last-month'])): ?>
					                	<a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
					            	<?php endif; ?>
					            <?php endforeach; ?>
					            <a href="javascript:;" data-start="" data-end=""><?php echo MyLang('all_title'); ?></a>
					        </span>
					    <?php endif; ?>
					    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_start_title'); ?>" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_end_title'); ?>" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' <?php echo MyLang('loading_title'); ?>'}"> <?php echo MyLang('confirm_title'); ?></button>
</span>
					</div>
				</div>
				<ul class="<?php if(isset($is_income) and $is_income == true): ?>am-avg-sm-2 am-avg-lg-4<?php else: ?>am-avg-sm-1 am-avg-lg-3<?php endif; ?>">
					<li>
						<div class="li-content">
							<p class="name"><?php echo MyLang('index.base_item_user_title'); ?></p>
							<p class="total animation-count-to base-user-count" data-to="<?php echo htmlentities($base_count['user_count']); ?>" data-speed="1500">0</p>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_last_month_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['last_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_same_month_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['same_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_yesterday_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['yesterday_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item">
								<span><?php echo MyLang('index.base_item_today_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['today_count']); ?>" data-speed="1500">0</span>
							</div>
							<i class="am-icon-user am-icon-lg bg-icon"></i>
						</div>
					</li>
					<li>
						<div class="li-content">
							<p class="name"><?php echo MyLang('index.base_item_order_number_title'); ?></p>
							<p class="total animation-count-to base-order-count" data-to="<?php echo htmlentities($base_count['order_count']); ?>" data-speed="1500">0</p>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_last_month_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['last_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_same_month_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['same_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_yesterday_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['yesterday_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item">
								<span><?php echo MyLang('index.base_item_today_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['today_count']); ?>" data-speed="1500">0</span>
							</div>
							<i class="am-icon-pie-chart am-icon-lg bg-icon"></i>
						</div>
					</li>
					<li>
						<div class="li-content">
							<p class="name"><?php echo MyLang('index.base_item_order_complete_number_title'); ?></p>
							<p class="total animation-count-to base-order-sale-count" data-to="<?php echo htmlentities($base_count['order_sale_count']); ?>" data-speed="1500">0</p>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_last_month_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['last_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_same_month_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['same_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span><?php echo MyLang('index.base_item_yesterday_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['yesterday_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item">
								<span><?php echo MyLang('index.base_item_today_title'); ?></span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['today_count']); ?>" data-speed="1500">0</span>
							</div>
							<i class="am-icon-gg am-icon-lg bg-icon"></i>
						</div>
					</li>
					<!-- 收入统计权限判断 -->
					<?php if(isset($is_income) and $is_income == true): ?>
						<li>
							<div class="li-content">
								<p class="name"><?php echo MyLang('index.base_item_order_complete_title'); ?></p>
								<p class="total animation-count-to base-order-complete-total" data-to="<?php echo htmlentities($base_count['order_complete_total']); ?>" data-speed="1500" data-decimals="2">0.00</p>
								<div class="item am-margin-bottom-xs">
									<span><?php echo MyLang('index.base_item_last_month_title'); ?></span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['last_month_count']); ?>" data-speed="1500">0</span>
								</div>
								<div class="item am-margin-bottom-xs">
									<span><?php echo MyLang('index.base_item_same_month_title'); ?></span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['same_month_count']); ?>" data-speed="1500">0</span>
								</div>
								<div class="item am-margin-bottom-xs">
									<span><?php echo MyLang('index.base_item_yesterday_title'); ?></span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['yesterday_count']); ?>" data-speed="1500" data-decimals="2">0.00</span>
								</div>
								<div class="item">
									<span><?php echo MyLang('index.base_item_today_title'); ?></span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['today_count']); ?>" data-speed="1500" data-decimals="2">0.00</span>
								</div>
								<i class="am-icon-line-chart am-icon-lg bg-icon"></i>
							</div>
						</li>
					<?php endif; ?>
				</ul>
			</div>

			<!-- 订单金额走势统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_amount_trend_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_amount_trend_top_data) and is_array($plugins_admin_view_index_init_stats_inside_amount_trend_top_data)): foreach($plugins_admin_view_index_init_stats_inside_amount_trend_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 订单成交金额走势，收入统计权限判断-->
			<?php if(isset($is_income) and $is_income == true): ?>
				<div class="block-container">
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title"><?php echo MyLang('index.base_item_order_profit_title'); ?></span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '<?php echo MyLang('index.base_item_order_tips'); ?>', trigger: 'hover focus', theme: 'sm'}"></a>
						<div class="am-fr right-operate" data-type="order-profit" data-init="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_start_title'); ?>" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_end_title'); ?>" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' <?php echo MyLang('loading_title'); ?>'}"> <?php echo MyLang('confirm_title'); ?></button>
</span>
						</div>
					</div>
					<div id="echarts-order-profit"></div>
				</div>
			<?php endif; ?>

			<!-- 订单交易走势统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_order_trading_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_order_trading_top_data) and is_array($plugins_admin_view_index_init_stats_inside_order_trading_top_data)): foreach($plugins_admin_view_index_init_stats_inside_order_trading_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 订单交易走势 -->
			<div class="block-container">
				<div class="block-title echarts-title">
					<span class="icon"></span>
					<span class="title"><?php echo MyLang('index.base_item_order_trading_title'); ?></span>
					<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '<?php echo MyLang('index.base_item_order_tips'); ?>', trigger: 'hover focus', theme: 'sm'}"></a>
					<div class="am-fr right-operate" data-type="order-trading" data-init="1">
					    <?php if(!empty($time_data)): ?>
					        <span class="quick-time">
					            <?php foreach($time_data as $k=>$v): ?>
					                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
					            <?php endforeach; ?>
					        </span>
					    <?php endif; ?>
					    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_start_title'); ?>" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_end_title'); ?>" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' <?php echo MyLang('loading_title'); ?>'}"> <?php echo MyLang('confirm_title'); ?></button>
</span>
					</div>
				</div>
				<div id="echarts-order-trading"></div>
			</div>

			<!-- 组合商品和支付统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_compose_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_compose_top_data) and is_array($plugins_admin_view_index_init_stats_inside_compose_top_data)): foreach($plugins_admin_view_index_init_stats_inside_compose_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 组合 -->
			<ul class="am-avg-sm-1 am-avg-sm-2 am-avg-lg-2 block-combination-container-2">
				<li>
					<!-- 热销商品 -->
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title"><?php echo MyLang('index.base_item_hot_sales_goods_title'); ?></span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '<?php echo MyLang('index.base_item_hot_sales_goods_tips'); ?>', trigger: 'hover focus', theme: 'sm'}"></a>
						<div class="am-fr right-operate" data-type="goods-hot" data-init="1" data-empty-time="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						            <a href="javascript:;" data-start="" data-end=""><?php echo MyLang('all_title'); ?></a>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_start_title'); ?>" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_end_title'); ?>" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' <?php echo MyLang('loading_title'); ?>'}"> <?php echo MyLang('confirm_title'); ?></button>
</span>
						</div>
					</div>
					<div id="echarts-goods-hot"></div>
				</li>

				<li>
					<!-- 支付方式 -->
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title"><?php echo MyLang('index.base_item_payment_type_title'); ?></span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '<?php echo MyLang('index.base_item_order_tips'); ?>', trigger: 'hover focus', theme: 'sm'}"></a>
						<div class="am-fr right-operate" data-type="pay-type" data-init="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_start_title'); ?>" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_end_title'); ?>" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' <?php echo MyLang('loading_title'); ?>'}"> <?php echo MyLang('confirm_title'); ?></button>
</span>
						</div>
					</div>
					<div id="echarts-pay-type"></div>
				</li>
			</ul>

			<!-- 地域分布统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_region_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_region_top_data) and is_array($plugins_admin_view_index_init_stats_inside_region_top_data)): foreach($plugins_admin_view_index_init_stats_inside_region_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 订单地域分布 -->
			<div class="am-nbfc <?php if($is_system_show_base == 0): ?>am-padding-bottom-sm<?php endif; ?>">
				<div class="block-container <?php if($is_system_show_base == 0): ?>am-margin-bottom-0<?php endif; ?>">
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title"><?php echo MyLang('index.base_item_map_whole_country_title'); ?></span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '<?php echo MyLang('index.base_item_map_whole_country_tips'); ?>', trigger: 'hover focus', theme: 'sm'}"></a>
						<select name="value" data-am-selected="{btnWidth: '50px', btnSize: 'xs'}">
							<option value="0" selected><?php echo MyLang('index.base_item_map_whole_country_province'); ?></option>
							<option value="1"><?php echo MyLang('index.base_item_map_whole_country_city'); ?></option>
							<option value="2"><?php echo MyLang('index.base_item_map_whole_country_county'); ?></option>
						</select>
						<div class="am-fr right-operate" data-type="order-whole-country" data-init="1" data-empty-time="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						            <a href="javascript:;" data-start="" data-end=""><?php echo MyLang('all_title'); ?></a>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_start_title'); ?>" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="<?php echo MyLang('form_time_end_title'); ?>" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' <?php echo MyLang('loading_title'); ?>'}"> <?php echo MyLang('confirm_title'); ?></button>
</span>
						</div>
					</div>
					<div id="echarts-map-whole-country"></div>
				</div>
			</div>
		<?php endif; ?>

		<!-- 系统信息顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_system_info_top</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_system_info_top_data) and is_array($plugins_admin_view_index_init_system_info_top_data)): foreach($plugins_admin_view_index_init_system_info_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>

		<!-- 系统信息 -->
		<?php if($is_system_show_base == 1): ?>
			<ul class="am-avg-sm-1 am-avg-sm-2 am-avg-lg-2 block-combination-container-2 am-padding-bottom-sm">
				<li>
					<div class="block-title">
						<span class="icon"></span>
						<span class="title"><?php echo MyLang('index.system_info_title'); ?></span>
					</div>
					<dl class="dl-content">
						<dt class="am-text-truncate"><?php echo MyLang('index.system_ver_title'); ?></dt>
						<dd><?php echo htmlentities($data['ver']); ?></dd>

						<dt class="am-text-truncate"><?php echo MyLang('index.system_os_ver_title'); ?></dt>
						<dd><?php echo htmlentities($data['os_ver']); ?></dd>

						<dt class="am-text-truncate"><?php echo MyLang('index.system_php_ver_title'); ?></dt>
						<dd><?php echo htmlentities($data['php_ver']); ?></dd>

						<dt class="am-text-truncate"><?php echo MyLang('index.system_mysql_ver_title'); ?></dt>
						<dd><?php echo htmlentities($data['mysql_ver']); ?></dd>

						<dt class="am-text-truncate"><?php echo MyLang('index.system_server_ver_title'); ?></dt>
						<dd><?php echo htmlentities($data['server_ver']); ?></dd>

						<dt class="am-text-truncate"><?php echo MyLang('index.system_host_title'); ?></dt>
						<dd><?php echo htmlentities($data['host']); ?></dd>
					</dl>
				</li>

				<li>
					<div class="block-title">
						<span class="icon"></span>
						<span class="title"><?php echo MyLang('index.development_team_title'); ?></span>
					</div>
					<dl class="dl-content">
						<dt class="am-text-truncate"><?php echo MyLang('index.development_team_website_title'); ?></dt>
						<dd>
							<a href="http://zongzhige.com/" target="_blank"><?php echo MyLang('index.development_team_website_value'); ?></a>
						</dd>

						<dt class="am-text-truncate"><?php echo MyLang('index.development_team_support_title'); ?></dt>
						<dd>
							<a href="http://shopxo.net/" target="_blank"><?php echo MyLang('index.development_team_support_value'); ?></a>
						</dd>

						<?php if(!empty($site_store_links) and !empty($site_store_links['community_website'])): ?>
							<dt class="am-text-truncate"><?php echo MyLang('index.development_team_ask_title'); ?></dt>
							<dd>
								<a href="<?php echo htmlentities($site_store_links['community_website']); ?>" target="_blank"><?php echo MyLang('index.development_team_ask_value'); ?></a>
							</dd>
						<?php endif; ?>

						<dt class="am-text-truncate"><?php echo MyLang('index.development_team_agreement_title'); ?></dt>
						<dd>
							<a href="<?php if(!empty($site_store_links) and !empty($site_store_links['source_license'])): ?><?php echo htmlentities($site_store_links['source_license']); else: ?>https://opensource.org/licenses/mit-license.php<?php endif; ?>" target="_blank"><?php echo MyLang('index.development_team_agreement_value'); ?></a>
						</dd>

						<?php if(!empty($site_store_links) and !empty($site_store_links['system_update_log'])): ?>
							<dt class="am-text-truncate"><?php echo MyLang('index.development_team_update_log_title'); ?></dt>
							<dd>
								<a href="<?php echo htmlentities($site_store_links['system_update_log']); ?>" target="_blank"><?php echo MyLang('index.development_team_update_log_value'); ?></a>
							</dd>
						<?php endif; if(is_array(MyLang('index.development_team_members_value'))): ?>
							<dt class="am-text-truncate"><?php echo MyLang('index.development_team_members_title'); ?></dt>
							<dd>
								<?php foreach(MyLang('index.development_team_members_value') as $v): ?>
									<a href="<?php echo htmlentities($v['url']); ?>" target="_blank" class="am-margin-right-sm"><?php echo htmlentities($v['name']); ?></a>
								<?php endforeach; ?>
							</dd>
						<?php endif; ?>
					</dl>
				</li>
			</ul>
		<?php endif; ?>

		<!-- 底部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_bottom</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_bottom_data) and is_array($plugins_admin_view_index_init_bottom_data)): foreach($plugins_admin_view_index_init_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
<!-- right content end  -->

<!-- 检查更新显示信息 -->
<div class="am-popup popup-not-title" id="inspect-upgrade-popup">
    <div class="am-popup-inner">
        <span data-am-modal-close class="am-close am-close-alt">&times;</span>
        <div class="am-popup-bd">
        	<div class="upgrade-content"></div>
			<div class="upgrade-bottom am-text-right">
				<div class="upgrade-bottom-content">
					<button type="button" class="am-btn am-btn-default am-radius am-btn-xs" data-am-modal-close><?php echo MyLang('cancel_title'); ?></button>
					<button type="button" class="am-btn am-btn-success am-radius am-btn-xs am-margin-left-sm am-hide inspect-upgrade-confirm" data-url="<?php echo MyUrl('admin/index/inspectupgradeconfirm'); ?>"><?php echo MyLang('index.base_update_button_title'); ?></button>
				</div>
			</div>
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