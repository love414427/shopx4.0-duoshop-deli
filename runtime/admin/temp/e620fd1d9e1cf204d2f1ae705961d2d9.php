<?php /*a:1:{s:72:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/link/module/info.html";i:1699863362;}*/ ?>
<!-- 基础信息 -->
<?php if(!empty($module_data)): ?>
    <div title="<?php echo htmlentities($module_data['name']); ?>">
        <span><?php echo htmlentities($module_data['name']); ?></span>
        <a href="<?php echo htmlentities($module_data['url']); ?>" target="_blank">
            <i class="am-icon-external-link"></i>
        </a>
    </div>
<?php endif; ?>