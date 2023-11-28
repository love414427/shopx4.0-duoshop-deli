<?php /*a:7:{s:65:"/www/wwwroot/deli.shop.cn/app/admin/view/default/index/index.html";i:1699863362;s:67:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/header.html";i:1699863362;s:73:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/page_loading.html";i:1699863362;s:64:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/nav.html";i:1699863362;s:65:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/menu.html";i:1699863362;s:68:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/nav_bar.html";i:1699863362;s:67:"/www/wwwroot/deli.shop.cn/app/admin/view/default/public/footer.html";i:1699863362;}*/ ?>
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

<!-- nav -->
<header class="am-topbar am-topbar-inverse admin-header">
	<!-- logo/名称信息 -->
	<div class="am-topbar-brand">
		<a href="<?php echo MyUrl('admin/index/index'); ?>">
			<h2><?php echo htmlentities($admin_theme_site_name); ?><span class="admin-site-vice-name am-margin-left-xs"><?php echo MyLang('common.admin_browser_title'); ?></span></h2>
		</a>
	</div>

	<!-- 快捷导航 -->
    <div class="am-fl am-text-nowrap am-scrollable-horizontal header-menu-open-pages-list tabs-switch-horizontal-container">
        <ul></ul>
    </div>

    <!-- 手机模式下导航按钮 -->
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-xs am-btn-success am-show-sm-only am-radius header-nav-submit" data-am-collapse="{target: '#topbar-collapse'}">
		<span class="am-sr-only"><?php echo MyLang('toggle_navigation_title'); ?></span>
		<i class="am-icon-bars"></i>
	</button>

	<!-- 右侧内容 -->
	<div class="am-collapse am-topbar-collapse" id="topbar-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
			<?php if(!empty($multilingual_data) and !empty($multilingual_data['data']) and !empty($multilingual_data['default']) and is_array($multilingual_data['data']) and is_array($multilingual_data['default'])): ?>
				<li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
					<a class="am-dropdown-toggle" href="javascript:;">
						<i class="am-icon-language"></i>
						<span><?php echo MyLang('lang_title'); ?>[<?php echo htmlentities($multilingual_data['default']['name']); ?>]</span>
					</a>
					<ul class="am-dropdown-content am-radius">
						<?php foreach($multilingual_data['data'] as $v): ?>
		                    <li>
		                        <a href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['name']); ?></a>
		                    </li>
	                    <?php endforeach; ?>
	                </ul>
				</li>
			<?php endif; ?>

			<li class="am-dropdown">
				<a href="<?php echo htmlentities($theme_color_url); ?>">
					<i class="am-icon-adjust"></i>
					<span><?php echo htmlentities($theme_color_name); ?></span>
				</a>
			</li>
			<?php if(AdminIsPower('cache', 'statusupdate')): ?>
				<li class="am-dropdown">
					<a href="javascript:;" class="submit-ajax" data-url="<?php echo MyUrl('admin/cache/statusupdate'); ?>" data-is-confirm="0" data-is-loading="1">
						<i class="am-icon-paint-brush"></i>
						<span><?php echo MyLang('common.remove_cache_title'); ?></span>
					</a>
				</li>
			<?php endif; ?>

			<li class="am-dropdown">
				<a href="javascript:;" class="fullscreen-event" data-fulltext-open="<?php echo MyLang('fullscreen_open_title'); ?>" data-fulltext-exit="<?php echo MyLang('fullscreen_exit_title'); ?>">
					<i class="am-icon-arrows-alt"></i>
					<span class="fullscreen-text"><?php echo MyLang('fullscreen_open_title'); ?></span>
				</a>
			</li>

			<li class="am-dropdown">
				<a href="<?php echo htmlentities($home_url); ?>" target="_blank">
					<i class="am-icon-home"></i>
					<span><?php echo MyLang('shop_home_title'); ?></span>
				</a>
			</li>
			
			<li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
				<a class="am-dropdown-toggle" href="javascript:;">
					<i class="am-icon-user"></i>
					<span class="tpl-header-list-user-nick"><?php echo htmlentities($admin['username']); ?></span>
					<span class="tpl-header-list-user-ico">
					</span>
				</a>
				<ul class="am-dropdown-content am-radius">
					<li>
						<a href="javascript:;" class="new-window" data-type="nav" data-url="<?php echo MyUrl('admin/admin/saveinfo', ['id'=>$admin['id']]); ?>" data-node-name="<?php echo MyLang('setup_title'); ?>">
							<i class="am-icon-cog"></i>
							<span><?php echo MyLang('setup_title'); ?></span>
						</a>
					</li>
					<li>
						<a href="<?php echo MyUrl('admin/admin/logout'); ?>">
							<i class="am-icon-power-off"></i>
							<span><?php echo MyLang('quit_title'); ?></span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</header>
		
<!-- content -->
<div class="admin">
	<!-- left menu -->
	<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
	<div class="am-offcanvas-bar admin-offcanvas-bar">
		<ul class="am-list admin-sidebar-list common-left-menu">
			<li>
				<a href="javascript:;" data-key="-" data-type="menu" data-url="<?php echo MyUrl('admin/index/init'); ?>" class="common-left-menu-active">
					<span class="iconfont icon-home-page"></span>
					<p class="nav-name am-inline-block am-text-break"><?php echo MyLang('home_title'); ?></p>
				</a>
			</li>
			<?php foreach($left_menu as $v): if(empty($v['items'])): ?>
					<li>
						<a href="javascript:;" data-type="menu" data-url="<?php echo htmlentities($v['url']); ?>" data-key="<?php echo htmlentities($v['id']); ?>">
							<?php if(!empty($v['icon'])): ?><span class="iconfont <?php echo htmlentities($v['icon']); ?>"></span><?php endif; ?>
							<p class="nav-name am-inline-block am-text-break"><?php echo htmlentities($v['name']); ?></p>
						</a>
					</li>
				<?php else: ?>
					<li class="admin-parent">
						<a data-type="menu" class="am-cf menu-parent-items-<?php echo htmlentities($v['id']); ?>" data-am-collapse="{target: '#power-menu-<?php echo htmlentities($v['id']); ?>'}">
							<?php if(!empty($v['icon'])): ?><span class="iconfont <?php echo htmlentities($v['icon']); ?>"></span><?php endif; ?>
							<p class="nav-name am-inline-block am-text-break"><?php echo htmlentities($v['name']); ?></p>
							<i class="am-icon-angle-down am-fr am-margin-right left-menu-more-ico-rotate"></i>
						</a>
						<ul class="am-list am-collapse admin-sidebar-sub" id="power-menu-<?php echo htmlentities($v['id']); ?>">
							<?php foreach($v['items'] as $vs): ?>
								<li>
									<a href="javascript:;" class="menu-items-<?php echo htmlentities($vs['id']); ?>" data-parent-id="<?php echo htmlentities($v['id']); ?>" data-type="menu" data-url="<?php echo htmlentities($vs['url']); ?>" data-key="<?php echo htmlentities($vs['id']); ?>">
										<?php if(!empty($vs['icon'])): ?><span class="<?php echo htmlentities($vs['icon']); ?>"></span><?php endif; ?>
										<p class="nav-name am-inline-block am-text-break"><?php echo htmlentities($vs['name']); ?></p>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div>
	<a href="javascript:;" class="am-icon-dedent menu-scaling-submit am-hide-sm-only" data-status="0"></a>
</div>
<div class="menu-mini-container-tips am-animation-slide-right">
	<div class="mui-mbar-tab-tip am-icon-caret-left"></div>
	<span></span>
</div>
<div class="menu-mini-container-popup am-animation-slide-right">
	<div class="mui-mbar-tab-tip am-icon-caret-left"></div>
	<ul></ul>
</div>

	<!-- right content  -->
	<div id="ifcontent">
		<div class="window-layer">
	    	<iframe src="<?php echo htmlentities($to_url); ?>" width="100%" height="100%"></iframe>
	    </div>
	</div>
	<!-- right content end  -->
</div>

<!-- navbar -->
<a href="javascript:;" class="am-icon-btn am-icon-th-list am-show-sm-only common-nav-bar" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!-- footer -->
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