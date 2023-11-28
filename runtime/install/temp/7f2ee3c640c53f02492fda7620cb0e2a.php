<?php /*a:5:{s:61:"/www/wwwroot/v4.shop.iun.cc/app/install/view/index/index.html";i:1699863362;s:63:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/header.html";i:1699863362;s:67:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/header_nav.html";i:1699863362;s:63:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/footer.html";i:1699863362;s:67:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/footer_nav.html";i:1699863362;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>ShopXO安装程序</title>
	<meta name="description" content="ShopXO企业级免费开源商城系统，为企业提供php商城系统、微信商城、小程序。" />
    <meta name="keywords" content="ShopXO,开源电商系统,开源商城,开源B2C,免费商城系统,商城系统,B2C商城,微信商城,支付宝小程序,微信小程序,微信公众号,支付宝生活号" />
	<meta name="generator" content="<?php echo htmlentities(__MY_URL__); ?>" />
	<meta name="application-name" content="ShopXO" />
	<meta name="msapplication-tooltip" content="ShopXO" />
	<meta name="msapplication-starturl" content="<?php echo htmlentities(__MY_URL__); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities(__MY_URL__); ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/css/amazeui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/cropper/cropper.min.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/css/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/install/css/index.css" />
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
		var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
	    var __env_max_input_vars_count__ = '<?php echo htmlentities($env_max_input_vars_count); ?>';
	    var __map_view_url__ = '<?php echo MyUrl("admin/map/index"); ?>';
	    var __load_map_type__ = '<?php echo htmlentities($load_map_type); ?>';
	    // 语言定义（用于js调用、模板引擎直接使用$lang_data.xxx获取对应语言即可）
	    <?php if(!empty($lang_data)): foreach($lang_data as $k=>$v): if(!empty($k) and isset($v) and !is_array($v)): ?>
	                var lang_<?php echo htmlentities($k); ?> = '<?php echo htmlentities($v); ?>';
	            <?php endif; ?>
	        <?php endforeach; ?>
	    <?php endif; ?>
	</script>
<body>
<div class="body-content-container">

<!-- header nav -->
<div class="body-content-formal-container">
    <div class="header-nav" data-am-sticky="{animation: 'slide-top'}">
        <div class="inside">
            <p class="logo-name">
                <strong>Shop<em>XO</em></strong>
                <span class="desc">安装向导 <?php echo htmlentities(APPLICATION_VERSION); ?></span>
            </p>
            <ul class="schedule <?php if(isset($action) && $action == 'index'): ?>active<?php endif; ?>">
                <li class="number">1</li>
                <li class="word">使用协议</li>
            </ul>
            <ul class="schedule <?php if(isset($action) && $action == 'check'): ?>active<?php endif; ?>">
                <li class="number">2</li>
                <li class="word">环境检测</li>
            </ul>
            <ul class="schedule <?php if(isset($action) && $action == 'create'): ?>active<?php endif; ?>">
                <li class="number">3</li>
                <li class="word">创建数据</li>
            </ul>
            <ul class="schedule <?php if(isset($action) && $action == 'successful'): ?>active<?php endif; ?>">
                <li class="number">4</li>
                <li class="word">安装完成</li>
            </ul>
        </div>
    </div>
    <!-- <div class="am-container am-text-center am-text-danger am-padding-top-lg am-padding-bottom-sm">
        <span>v8.1版本由</span>
        <a href="#" target="_blank"><strong>XXXXXX</strong></a>
        <span>独家赞助发布！</span>
    </div> -->

<!-- conntent start  -->
<div class="am-g inside agreement">
    <h2>安装协议</h2>
    <ul>
        <li class="title">ShopXO遵循MIT开源协议发布</li>
        <li>MIT许可证之名源自麻省理工学院（Massachusetts Institute of Technology, MIT），又称「X条款」（X License）或「X11条款」（X11 License）。</li>
        <li>MIT内容与三条款BSD许可证（3-clause BSD license）内容颇为近似，但是赋予软体被授权人更大的权利与更少的限制。</li>
        <li class="title">协议条款</li>
        <li>1. 被授权人有权利使用、复制、修改、合并、出版发行、散布、再授权及贩售软体及软体的副本。</li>
        <li>2. 被授权人可根据程式的需要修改授权条款为适当的内容。</li>
        <li>3. 在软件和软件的所有副本中都必须包含版权声明和许可声明。</li>
        <li class="am-margin-top-xl">协议地址：<a href="https://license.shopxo.net/" target="_blank">https://license.shopxo.net/</a></li>
        <li>英文原文：<a href="https://opensource.org/licenses/mit-license.php" target="_blank">https://opensource.org/licenses/mit-license.php</a></li>
    </ul>

    <div class="agree ongoing-button">
        <button type="submit" class="am-btn am-btn-danger am-radius am-btn-xs window-close-event">
            <i class="am-icon-remove"></i>
            <span>拒绝并关闭</span>
        </button>
        <a href="<?php echo MyUrl('install/index/check'); ?>" class="am-btn am-btn-success am-radius am-btn-xs">
            <i class="am-icon-arrow-right"></i>
            <span>同意并安装</span>
        </a>
    </div>
</div>
<!-- conntent end  -->

</div>
<!-- footer start -->
<div class="body-content-footer-container">
    <footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <div class="am-footer-switch">
        <span class="am-text-sm">
            <a href="http://zongzhige.com/" target="_blank">纵之格科技</a>
        </span>
        <span class="am-footer-divider"> &nbsp;&nbsp;| &nbsp;&nbsp; </span>
        <span class="am-text-sm">
            <a href="http://shopxo.net/" target="_blank">ShopXO官网</a>
        </span>
        <span class="am-footer-divider"> &nbsp;&nbsp;| &nbsp;&nbsp; </span>
        <span class="am-text-sm">
            <a href="http://store.shopxo.net/" target="_blank">应用商店</a>
        </span>
        <span class="am-footer-divider"> &nbsp;&nbsp;| &nbsp;&nbsp; </span>
        <span class="am-text-sm">
            <a href="http://ask.shopxo.net/" target="_blank">交流提问</a>
        </span>
    </div>
    <div class="am-footer-miscs">
        <p>由 <a href="http://shopxo.net/" target="_blank">ShopXO</a> 提供技术支持</p>
        <p>CopyRight©<?php echo date('Y'); ?> ShopXO <?php echo htmlentities(APPLICATION_VERSION); ?> Inc.</p>
        <p>沪ICP备20014383号</p>
    </div>
</footer>
</div>
<!-- footer end -->
</div>
</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/jquery/jquery-2.2.4.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/js/amazeui.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/js/common.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/install/js/index.js"></script>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-dialog/amazeui.dialog.js"></script>

<!-- 复制插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/clipboard/clipboard.min.js"></script>