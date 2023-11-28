<?php /*a:1:{s:71:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/link/module/url.html";i:1699863362;}*/ ?>
<!-- url -->
<?php if(!empty($module_data['url'])): ?>
    <a href="<?php echo htmlentities($module_data['url']); ?>" target="_blank" title="<?php echo htmlentities($module_data['name']); ?>"><?php echo htmlentities($module_data['url']); ?></a>
<?php endif; ?>