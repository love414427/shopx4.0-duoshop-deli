<?php /*a:1:{s:85:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/payment/module/apply_terminal.html";i:1699863362;}*/ ?>
<!-- 适配平台 -->
<?php if(!empty($module_data['apply_terminal']) and is_array($module_data['apply_terminal'])): foreach($module_data['apply_terminal'] as $terminal_k=>$terminal_v): ?>
        <p><?php echo htmlentities($common_platform_type[$terminal_v]['name']); ?></p>
    <?php endforeach; ?>
<?php endif; ?>