<?php /*a:1:{s:72:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/brand/module/url.html";i:1699863362;}*/ ?>
<!-- url -->
<?php if(!empty($module_data['website_url'])): ?>
    <a href="<?php echo htmlentities($module_data['website_url']); ?>" target="_blank" title="<?php echo htmlentities($module_data['name']); ?>"><?php echo htmlentities($module_data['website_url']); ?></a>
<?php endif; ?>