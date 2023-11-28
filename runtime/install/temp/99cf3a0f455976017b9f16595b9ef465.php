<?php /*a:5:{s:61:"/www/wwwroot/v4.shop.iun.cc/app/install/view/index/check.html";i:1699863362;s:63:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/header.html";i:1699863362;s:67:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/header_nav.html";i:1699863362;s:63:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/footer.html";i:1699863362;s:67:"/www/wwwroot/v4.shop.iun.cc/app/install/view/public/footer_nav.html";i:1699863362;}*/ ?>
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
<div class="am-g inside check">
    <h2>环境检查</h2>
    <table class="am-table">
        <tr>
            <th width="25%">环境</th>
            <th width="25%">程序所需</th>
            <th width="25%">当前服务器</th>
            <th width="25%">是否符合</th>
        </tr>
        <tr class="<?php if(function_exists('php_uname')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>操作系统</td>
            <td>无限制</td>
            <td><?php echo function_exists('php_uname') ? php_uname('s') : '未知（php_uname函数未启用）'; ?></td>
            <td><?php echo function_exists('php_uname') ? '√' : '×'; ?></td>
        </tr>

        <?php $php_version = explode('.', PHP_VERSION); ?>
        <tr class="<?php if(($php_version[0] >=8) || ($php_version[0] >=7 && $php_version[1] >=3) || ($php_version[0] >=7 && $php_version[1] >=2 && $php_version[2] >=5)){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>PHP版本</td>
            <td>>=7.2.5</td>
            <td><?php echo PHP_VERSION ?></td>
            <td>
                <?php if(($php_version[0] >=8) || ($php_version[0] >=7 && $php_version[1] >=3) || ($php_version[0] >=7 && $php_version[1] >=2 && $php_version[2] >=5)): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>

        <?php
            if(function_exists('gd_info'))
            {
                $tmp = gd_info();
                preg_match("/[\d.]+/", $tmp['GD Version'], $match);
                unset($tmp);
            }
        ?>
        <tr class="<?php if(isset($match[0]) && $match[0] > 2){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>GD库</td>
            <td>2.0</td>
            <td><?php echo isset($match[0]) ? $match[0] : '未知（gd_info函数未启用）'; ?></td>
            <td>
                <?php if(isset($match[0]) && $match[0] > 2): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
    </table>

    <h2>目录/文件权限检查</h2>
    <table class="am-table">
        <tr>
            <th width="25%">环境</th>
            <th width="25%">所需状态</th>
            <th width="25%">当前状态</th>
            <th width="25%">是否符合</th>
        </tr>
        <tr class="<?php if(is_writable(ROOT)){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT)): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT)): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(APP_PATH.'install/config')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./app/install/config</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(APP_PATH.'install/config')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(APP_PATH.'install/config')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(APP_PATH.'index/route')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./app/index/route</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(APP_PATH.'index/route')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(APP_PATH.'index/route')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'app/index/view')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./app/index/view</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'app/index/view')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'app/index/view')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'app/plugins')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./app/plugins</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'app/plugins')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'app/plugins')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'config')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./config</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'config')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'config')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'runtime')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./runtime</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'runtime')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'runtime')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/upload/file')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/upload/file</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/file')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/file')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/upload/images')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/upload/images</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/images')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/images')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/upload/video')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/upload/video</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/video')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/video')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/download')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/download</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/download')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/download')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'extend/payment')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./extend/payment</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'extend/payment')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'extend/payment')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/plugins/css')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/plugins/css</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/css')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/css')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/plugins/js')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/plugins/js</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/js')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/js')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/plugins/images')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/plugins/images</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/images')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/images')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
    </table>

    <h2>函数/类</h2>
    <table class="am-table">
        <tr>
            <th width="25%">环境</th>
            <th width="25%">所需状态</th>
            <th width="25%">当前状态</th>
            <th width="25%">是否符合</th>
        </tr>
        <tr class="<?php if(function_exists('curl_init')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>curl_init 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('curl_init')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('curl_init')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('fsockopen')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>fsockopen 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('fsockopen')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('fsockopen')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('xml_parser_create')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>xml_parser_create 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('xml_parser_create')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('xml_parser_create')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('file_get_contents')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>file_get_contents 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('file_get_contents')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('file_get_contents')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('mb_convert_encoding')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mb_convert_encoding 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('mb_convert_encoding')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('mb_convert_encoding')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('json_encode')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>json_encode 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('json_encode')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('json_encode')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('json_decode')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>json_decode 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('json_decode')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('json_decode')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('simplexml_load_string')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>simplexml_load_string 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('simplexml_load_string')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('simplexml_load_string')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('mb_substr')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mb_substr 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('mb_substr')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('mb_substr')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('mb_strlen')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mb_strlen 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('mb_strlen')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('mb_strlen')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(class_exists('mysqli')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mysqli 类</td>
            <td>支持</td>
            <td>
                <?php if (class_exists('mysqli')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (class_exists('mysqli')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(class_exists('pdo')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>pdo 类</td>
            <td>支持</td>
            <td>
                <?php if (class_exists('pdo')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (class_exists('pdo')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(class_exists('ZipArchive')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>ZipArchive 类</td>
            <td>支持</td>
            <td>
                <?php if (class_exists('ZipArchive')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (class_exists('ZipArchive')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
    </table>

    <div class="agree ongoing-button">
        <a href="<?php echo MyUrl('install/index/index'); ?>" class="am-btn am-btn-secondary am-radius am-btn-xs">
            <i class="am-icon-arrow-left"></i>
            <span>上一步</span>
        </a>
        <button type="button" class="am-btn am-btn-success am-radius am-btn-xs check-submit" data-url="<?php echo MyUrl('install/index/create'); ?>">
            <i class="am-icon-arrow-right"></i>
            <span>继续下一步</span>
        </button>
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