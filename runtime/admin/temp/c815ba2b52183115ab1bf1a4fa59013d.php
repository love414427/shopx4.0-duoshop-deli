<?php /*a:1:{s:77:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/warehouse/module/info.html";i:1699863362;}*/ ?>
<!-- 基础信息 -->
<?php if(!empty($module_data)): if(!empty($module_data['name'])): ?>
        <p><?php echo htmlentities($module_data['name']); if(isset($module_data['is_default']) and $module_data['is_default'] == 1): ?><span class="am-badge am-badge-success-plain am-round am-margin-left-xs"><?php echo MyLang('default_title'); ?></span><?php endif; ?></p>
    <?php endif; if(!empty($module_data['alias'])): ?>
        <p class="am-badge am-badge-secondary-plain am-round"><?php echo htmlentities($module_data['alias']); ?></p>
    <?php endif; ?>
<?php endif; ?>