<?php /*a:5:{s:62:"/www/wwwroot/v4.shop.iun.cc/app/install/view/index/create.html";i:1699863362;s:63:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/header.html";i:1699863362;s:67:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/header_nav.html";i:1699863362;s:63:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/footer.html";i:1699863362;s:67:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/footer_nav.html";i:1699863362;}*/ ?>
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
<div class="am-g inside create">
    <form class="am-form am-form-horizontal form-validation" method="post" action="<?php echo MyUrl('install/index/confirm'); ?>" request-type="ajax-fun" request-value="FormBackConfirm" timeout="60000">
        <div class="am-alert am-radius" data-am-alert>
            <button type="button" class="am-close">&times;</button>
            <p class="am-text-sm">
                <strong>温馨提示</strong>
            </p>
            <div class="am-padding-left-sm am-text-xs am-margin-top-xs">
                <p>建议采用utf8mb4编码、MySQL版本5.6或5.7</p>
                <?php if(!empty($charset_type_list)): foreach($charset_type_list as $v): ?>
                        <p><?php echo htmlentities($v['charset']); ?>编码、MySQL版本需 <?php echo htmlentities($v['version']); ?> 及以上版本 （<?php echo htmlentities($v['collate']); ?>）</p>
                    <?php endforeach; ?>
                <?php endif; ?>
                <p class="am-margin-top-xs am-text-danger">填写的信息中不要包含【&nbsp;&nbsp;&nbsp;'&nbsp;&nbsp;&nbsp;&nbsp;"&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>?php&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>?&nbsp;&nbsp;&nbsp;&nbsp;?<span>></span>&nbsp;&nbsp;&nbsp;&nbsp;<&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&&nbsp;&nbsp;&nbsp;】类特殊符号</p>
            </div>
        </div>

        <div class="am-panel am-panel-default am-radius">
            <div class="am-panel-hd">
                <h2 class="am-margin-0">数据库配置信息</h2>
            </div>
            <div class="am-panel-bd">
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">数据库类型</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="DB_TYPE" placeholder="数据库类型" value="mysql" class="am-radius am-input-sm" readonly data-validation-message="请选择数据库类型" required />
                    </div>
                </div>
                <div class="am-form-group am-form-select">
                    <label class="am-u-sm-2 am-form-label">数据库编码</label>
                    <div class="am-u-sm-10">
                        <select class="am-input-sm am-radius chosen-select" name="DB_CHARSET" data-validation-message="请选择数据编码" required>
                            <?php if(!empty($charset_type_list)): foreach($charset_type_list as $v): ?>
                                    <option value="<?php echo htmlentities($v['charset']); ?>"><?php echo htmlentities($v['charset']); ?> - <?php echo htmlentities($v['collate']); ?> （mysql版本>=<?php echo htmlentities($v['version']); ?>）</option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">数据库服务器</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="DB_HOST" placeholder="数据库服务器" value="127.0.0.1" class="am-radius am-input-sm" data-validation-message="请填写数据库服务器地址" required />
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">数据库端口</label>
                    <div class="am-u-sm-10">
                        <input type="number" name="DB_PORT" placeholder="数据库端口" value="3306" class="am-radius am-input-sm" data-validation-message="请填写数据库端口" required />
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">数据库名</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="DB_NAME" placeholder="数据库名" value="" class="am-radius am-input-sm" data-validation-message="请填写数据库名" required />
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">数据库用户名</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="DB_USER" placeholder="数据库用户名" value="" class="am-radius am-input-sm" data-validation-message="请填写数据库用户名" required />
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">数据库密码</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="DB_PWD" placeholder="数据库密码" value="" class="am-radius am-input-sm" data-validation-message="请填写数据库密码" required />
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">数据表前缀</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="DB_PREFIX" placeholder="数据表前缀" value="sxo_" class="am-radius am-input-sm" data-validation-message="请填写数据表前缀" required />
                    </div>
                </div>
            </div>
        </div>

        <div class="am-panel am-panel-default am-radius">
            <div class="am-panel-hd">
                <h2 class="am-margin-0">管理员账号信息</h2>
            </div>
            <div class="am-panel-bd">
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">管理员账号</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="ADMIN_USERNAME" placeholder="账号格式2~18个字符之间" value="admin" minlength="2" maxlength="18" class="am-radius am-input-sm" data-validation-message="请填写管理员账号、格式2~18个字符之间" required />
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-u-sm-2 am-form-label">管理员密码</label>
                    <div class="am-u-sm-10">
                        <input type="text" name="ADMIN_PWD" placeholder="密码格式6~18个字符之间" value="" minlength="6" maxlength="18" class="am-radius am-input-sm" data-validation-message="请填写管理员密码、格式6~18个字符之间" required />
                    </div>
                </div>
            </div>
        </div>

        <div class="agree ongoing-button">
            <a href="<?php echo MyUrl('install/index/check'); ?>" class="am-btn am-btn-secondary am-radius am-btn-xs">
                <i class="am-icon-arrow-left"></i>
                <span>上一步</span>
            </a>
            <button type="submit" class="am-btn am-btn-success am-radius am-btn-xs btn-loading-example" data-am-loading="{spinner:'circle-o-notch', loadingText:'确认安装'}">
                <i class="am-icon-check"></i>
                <span>确认安装</span>
            </button>
        </div>
    </form>
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
<script type="text/javascript">
function FormBackConfirm(e)
{
    var $button = $('form.form-validation button[type="submit"]');
    if(e.code == 0)
    {
        $.AMUI.progress.start();
        $.ajax({
            url: "<?php echo MyUrl('install/index/add'); ?>",
            type: 'POST',
            dataType: "json",
            timeout: 60000,
            data: GetFormVal('form.form-validation', true),
            success: function(res)
            {
                $.AMUI.progress.done();
                if(res.code == 0)
                {
                    Prompt(res.msg, 'success');
                    setTimeout(function()
                    {
                        window.location.href = "<?php echo MyUrl('install/index/successful'); ?>";
                    }, 1500);
                } else {
                    Prompt(res.msg);
                    $button.button('reset');
                }
            },
            error: function(xhr, type)
            {
                $button.button('reset');
                $.AMUI.progress.done();
                Prompt(HtmlToString(xhr.responseText) || '异常错误', null, 30);
            }
        });
    } else {
        $button.button('reset');
        Prompt(e.msg)
    }
}
</script>