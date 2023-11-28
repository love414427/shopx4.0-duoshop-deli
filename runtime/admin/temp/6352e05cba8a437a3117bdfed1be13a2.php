<?php /*a:1:{s:73:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/brand/module/logo.html";i:1699863362;}*/ ?>
<!-- logo -->
<?php if(!empty($module_data) and !empty($module_data['logo'])): ?>
    <a href="<?php echo htmlentities($module_data['logo']); ?>" target="_blank">
        <img src="<?php echo htmlentities($module_data['logo']); ?>" alt="<?php echo htmlentities($module_data['name']); ?>" class="am-radius" width="100" />
    </a>
<?php endif; ?>