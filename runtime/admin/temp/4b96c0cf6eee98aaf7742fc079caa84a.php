<?php /*a:1:{s:80:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/apphomenav/module/images.html";i:1699863362;}*/ ?>
<!-- 图标 -->
<?php if(!empty($module_data) and !empty($module_data['images_url'])): ?>
    <div class="am-circle nav-icon-circle" <?php if(!empty($module_data['bg_color'])): ?>style="background-color:<?php echo htmlentities($module_data['bg_color']); ?>;"<?php endif; ?>>
        <a href="javascript:;" class="am-figure am-block" data-am-figure="{pureview: 'true'}">
            <img src="<?php echo htmlentities($module_data['images_url']); ?>" class="am-radius am-vertical-align-middle" <?php if(empty($module_data['bg_color'])): ?>width="50" height="50"<?php else: ?>width="30" height="30"<?php endif; ?> />
        </a>
    </div>
<?php endif; ?>