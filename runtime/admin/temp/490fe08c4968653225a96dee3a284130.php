<?php /*a:1:{s:78:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/navigation/module/info.html";i:1699863362;}*/ ?>
<!-- 商品基础信息 -->
<?php if(!empty($module_data)): ?>
    <div <?php if($module_data['pid'] > 0): ?>class="am-padding-left-lg am-margin-left-lg"<?php endif; ?> title="<?php echo htmlentities($module_data['name']); ?>">
        <span><?php echo htmlentities($module_data['name']); ?></span>
        <a href="<?php echo htmlentities($module_data['url']); ?>" target="_blank">
            <i class="am-icon-external-link"></i>
        </a>
    </div>
<?php endif; ?>